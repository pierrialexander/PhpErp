<?php

class loginController extends controller
{
    /**
     * Action Index, valida o login do usuário, caso não seja autorizado, impede
     * o acesso ao sistema.
     * @return void
     */
    public function index()
    {
        $data = [];

        if (isset($_POST['email']) && !empty($_POST['email'])) {
            $email = addslashes($_POST['email']);
            $pass  = addslashes($_POST['password']);

            $u = new Users();

            if ($u->doLogin($email, $pass)) {
                header("Location: " . BASE_URL);
                exit;
            } else {
                $data['error'] = 'Email e/ou senha incorretos.';
            }
        }

        $this->loadView('login', $data);
    }

    public function logout() {
        $u = new Users();
        $u->logout();
        header('Location: ' . BASE_URL);
    }
}

















