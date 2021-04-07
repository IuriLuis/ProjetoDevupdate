<?php


namespace Source\Controllers;

use Source\Models\User;

/**
 * Class Admin
 * @package Source\Controllers
 */
class Admin extends Controller
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

        if (!empty($_SESSION["level"]) && $_SESSION["level"] != "0") {
            unset($_SESSION["user"]);
            unset($_SESSION["level"]);
            flash("error", "Violação de nível de acesso identificada, você foi desconectado do sistema!");
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
            $this->router->route("admin.home"),
            routeImage("Conta de {$this->user->first_name}"),
            "true"
        )->render();

        echo $this->view->render("admin/dashboard", [
            "head" => $head,
            "user" => $this->user
        ]);
    }

    /**
     * @param $data
     */
    public function update(): void
    {
        $head = $this->seo->optimize(
            "Atualização de usuários | " . site("name"),
            site("desc"),
            $this->router->route("admin.update"),
            routeImage("Atualização"),
            "true"
        )->render();

        $form_user = new \stdClass();
        $form_user->first_name = null;
        $form_user->last_name = null;
        $form_user->email = null;

        echo $this->view->render("admin/updateUser", [
            "head" => $head,
            "user" => $form_user
        ]);
    }

    /**
     * @param $data
     */
    public function updateUser($data): void
    {
        $email = filter_var($data["email"], FILTER_VALIDATE_EMAIL);

        if (!$email) {
            flash("alert", "O e-mail não foi informado corretamente!");
            $this->router->redirect("admin.update");
            return;
        }


        $user = (new User())->find("email = :e", "e={$email}")->fetch();
        if (!$user) {
            flash("error", "O e-mail informado não existe!");
            $this->router->redirect("admin.update");
            return;
        }
        $_SESSION["user_atz"] = $user->id;


        $head = $this->seo->optimize(
            "Atualização de usuários | " . site("name"),
            site("desc"),
            $this->router->route("admin.update"),
            routeImage("Atualização"),
            "true"
        )->render();

        echo $this->view->render("admin/updateUser", [
            "head" => $head,
            "user" => $user
        ]);
    }

    /**
     * @param $data
     */
    public function updateUseratz($data): void
    {
        $data = filter_var_array($data, FILTER_SANITIZE_STRIPPED);
        if (in_array("", $data)) {
            flash("error", "Preencha todos os campos!");
            $this->router->redirect("admin.update");
            return;
        }

        $user = (new User())->findById($_SESSION["user_atz"]);
        $user->first_name = $data["first_name"];
        $user->last_name = $data["last_name"];
        $user->email = $data["email"];
        $user->passwd = $data["passwd"];
        $user->level = $data["level"];
        $user->save();

        if (!$user->save()) {
            flash("error","Ocorreu um erro durante a atualização do cadastro!");
            $this->router->redirect("admin.update");
            return;
        }

        unset($_SESSION["user_atz"]);
        flash("success","Usuário atualizado com sucesso!");
        $this->router->redirect("admin.update");
    }

    /**
     *
     */
    public function delete(): void
    {
        $head = $this->seo->optimize(
            "Deletar usuários | " . site("name"),
            site("desc"),
            $this->router->route("admin.delete"),
            routeImage("Remoção"),
            "true"
        )->render();

        $form_user = new \stdClass();
        $form_user->first_name = null;
        $form_user->last_name = null;
        $form_user->email = null;

        echo $this->view->render("admin/deleteUser", [
            "head" => $head,
            "user" => $form_user
        ]);
    }

    /**
     * @param $data
     */
    public function deleteUser($data): void
    {
        $email = filter_var($data["email"], FILTER_VALIDATE_EMAIL);

        if (!$email) {
            flash("alert", "O e-mail não foi informado corretamente!");
            $this->router->redirect("admin.delete");
            return;
        }


        $user = (new User())->find("email = :e", "e={$email}")->fetch();
        if (!$user) {
            flash("error", "O e-mail informado não existe!");
            $this->router->redirect("admin.delete");
            return;
        }
        $_SESSION["user_rem"] = $user->id;


        $head = $this->seo->optimize(
            "Deletar usuários | " . site("name"),
            site("desc"),
            $this->router->route("admin.delete"),
            routeImage("Remoção"),
            "true"
        )->render();

        echo $this->view->render("admin/deleteUser", [
            "head" => $head,
            "user" => $user
        ]);
    }

    /**
     * @param $data
     */
    public function deleteUserrem($data): void
    {
        $user = (new User())->findById($_SESSION["user_rem"]);
        $user->destroy();

        if (!$user->destroy()) {
            flash("error","Ocorreu um erro oa deletar o cadastro!");
            $this->router->redirect("admin.delete");
            return;
        }

        unset($_SESSION["user_rem"]);
        flash("success","Usuário deletado com sucesso!");
        $this->router->redirect("admin.delete");
    }

    /**
     *
     */
    public function register(): void
    {
        $head = $this->seo->optimize(
            "Cadastro de usuários | " . site("name"),
            site("desc"),
            $this->router->route("admin.register"),
            routeImage("Cadastro"),
            "true"
        )->render();

        echo $this->view->render("admin/registerUser", [
            "head" => $head,
        ]);
    }

    /**
     * @param $data
     */
    public function registerUseradc($data): void
    {
        $data = filter_var_array($data, FILTER_SANITIZE_STRIPPED);
        if (in_array("", $data)) {
            flash("error", "Preencha todos os campos!");
            $this->router->redirect("admin.register");
            return;
        }

        $user = new User();
        $user->first_name = $data["first_name"];
        $user->last_name = $data["last_name"];
        $user->email = $data["email"];
        $user->passwd = $data["passwd"];
        $user->level = $data["level"];
        $user->save();

        if (!$user->save()) {
            flash("error","Ocorreu um erro ao registrar o usuario!");
            $this->router->redirect("admin.register");
            return;
        }

        flash("success","Usuário cadastrado com sucesso!");
        $this->router->redirect("admin.register");
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
