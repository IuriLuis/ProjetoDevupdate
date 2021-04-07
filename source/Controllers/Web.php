<?php


namespace Source\Controllers;

use Source\Models\User;

/**
 * Class Web
 * @package Source\Controllers
 */
class Web extends Controller
{
    /** @var User */
    protected $user;

    /**
     * Web constructor.
     * @param $router
     */
    public function __construct($router)
    {
        parent::__construct($router);

        if (!empty($_SESSION["user"])) {
            echo "<script>javascript:history.back()</script>";
        }
    }

    /**
     *
     */
    public function login(): void
    {
        $head = $this->seo->optimize(
            "Faça login no " . site("name"),
            site("desc"),
            $this->router->route("web.login"),
            routeImage("Login"),
            "true"
        )->render();

        echo $this->view->render("theme/login", [
            "head" => $head
        ]);
    }

    /**
     *
     */
    public function register(): void
    {
        $head = $this->seo->optimize(
            "Cadastre-se no " . site("name"),
            site("desc"),
            $this->router->route("web.register"),
            routeImage("Cadastre-se"),
            "true"
        )->render();

        $form_user = new \stdClass();
        $form_user->first_name = null;
        $form_user->last_name = null;
        $form_user->email = null;

        echo $this->view->render("theme/register", [
            "head" => $head,
            "user" => $form_user
        ]);
    }

    /**
     * @param $data
     */
    public function error($data): void
    {
        $error = filter_var($data["errcode"], FILTER_VALIDATE_INT);
        $head = $this->seo->optimize(
            "Oooops {$error} |" . site("name"),
            site("desc"),
            $this->router->route("web.error", ["errcode" => $error]),
            routeImage($error),
            "true"
        )->render();

        echo $this->view->render("theme/error", [
            "head" => $head,
            "error" => $error
        ]);
    }
}
