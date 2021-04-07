<?php


namespace Source\Controllers;

use Source\Models\User;

/**
 * Class Profile
 * @package Source\Controllers
 */
class Profile extends Controller
{
    /** @var User */
    protected $user;

    /**
     * Profile constructor.
     * @param $router
     */
    public function __construct($router)
    {
        parent::__construct($router);

        if (empty($_SESSION["user"]) || !$this->user = (new User())->findById($_SESSION["user"])) {
            unset($_SESSION["user"]);

            flash("error", "Acesso negado!");
            $this->router->redirect("web.login");
        }
    }

    /**
     *
     */
    public function home(): void
    {
        $head = $this->seo->optimize(
            "Bem vindo(a) {$this->user->first_name} | " . site("name"),
            site("desc"),
            $this->router->route("profile.home"),
            routeImage("Conta de {$this->user->first_name}"),
            "true"
        )->render();
        echo $this->view->render("theme/dashboard", [
            "head" => $head,
            "user" => $this->user
        ]);
    }

    /**
     *
     */
    public function logoff(): void
    {
        unset($_SESSION["user"]);
        flash("info", "Você saiu com sucesso {$this->user->first_name}!");
        $this->router->redirect("web.login");
    }

}