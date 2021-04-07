<?php


namespace Source\Controllers;

use Source\Models\User;
/**
 * Class Auth
 * @package Source\Controllers
 */
class Auth extends Controller
{
    /**
     * Auth constructor.
     * @param $router
     */
    public function __construct($router)
    {
        parent::__construct($router);
    }

    /**
     * @param $data
     */
    public function login($data): void
    {
        $email = filter_var($data["email"], FILTER_VALIDATE_EMAIL);
        $passwd = filter_var($data["passwd"], FILTER_DEFAULT);

        if (!$email || !$passwd) {
            flash("alert", "O e-mail ou senha não foi informado corretamente!");
            $this->router->redirect("web.login");
            return;
        }

        $user = (new User())->find("email = :e", "e={$email}")->fetch();
        if (!$user || !password_verify($passwd, $user->passwd)) {
            flash("error", "O e-mail ou senha informados não existem!");
            $this->router->redirect("web.login");
        }

        $_SESSION["user"] = $user->id;
        $_SESSION["level"] = $user->level;
        $level = $user->level;
        if ($level == "1") {
            $this->router->redirect("profile.home");
        } elseif ($level == "0") {
            $this->router->redirect("admin.home");
        } else {
            unset($_SESSION["user"]);
            $this->router->redirect("web.login");
        }
    }

    /**
     * @param $data
     */
    public function register($data): void
    {
        $data = filter_var_array($data, FILTER_SANITIZE_STRIPPED);
        if (in_array("", $data)) {
            flash("error", "Preencha todos os campos!");
            $this->router->redirect("web.register");
            return;
        }

        $user = new User();
        $user->first_name = $data["first_name"];
        $user->last_name = $data["last_name"];
        $user->email = $data["email"];
        $user->passwd = $data["passwd"];
        $user->level = "1";
        $user->save();

        if (!$user->save()) {
            $this->router->redirect("web.register");
            return;
        }

        $_SESSION["user"] = $user->id;
        $this->router->redirect("profile.home");
    }
}
