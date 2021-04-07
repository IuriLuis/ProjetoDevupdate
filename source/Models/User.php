<?php


namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;
use Exception;

/**
 * Class User
 * @package Source\Models
 */
class User extends DataLayer
{
    /**
     * User constructor.
     */
    public function __construct()
    {
        parent::__construct("users", ["first_name", "last_name", "email", "passwd","level"]);
    }

    /**
     * @return bool
     */
    public function save(): bool
    {
        if (!$this->validateEmail()
            || !$this->validatePassword()
            || !parent::save()) {
            return false;
        }
        return true;
    }

    /**
     * @return bool
     */
    protected function validateEmail(): bool
    {
        if (empty($this->email) || !filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            flash("error", "Informe um e-mail válido!");
            return false;
        }

        $userByEmail = null;
        if (!$this->id) {
            $userByEmail = $this->find("email = :email", "email={$this->email}")->count();
        } else {
            $userByEmail = $this->find("email = :email AND id != :id", "email={$this->email}&id={$this->id}")->count();
        }
        if ($userByEmail) {
            flash("error", "O e-mail informado já esta cadastrado!");
            return false;
        }
        return true;
    }

    /**
     * @return bool
     */
    protected function validatePassword(): bool
    {
        if (empty($this->passwd) || strlen($this->passwd) < 8) {
            flash("error", "Informe uma senha com pelo menos 8 caracteres!");
            return false;
        }
        if (password_get_info($this->passwd)["algo"]) {
            return true;
        }
        $this->passwd = password_hash($this->passwd, PASSWORD_DEFAULT);
        return true;
    }
}