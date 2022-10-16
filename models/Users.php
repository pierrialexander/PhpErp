<?php

/**
 * Classe Model de Usuários.
 * @author Pierri Alexander Vidmar
 * @since 23/09/2022
 */
class Users extends model {

    // Armazena os dados do usuário logado.
    private $userInfo;

    /**
     * Método responsável por verificar se um usuário está logado na sessão ou não.
     * @return boolean
     * @author Pierri Alexander Vidmar
     */
    public function isLogged() {
        if(isset($_SESSION['ccUser']) && !empty($_SESSION['ccUser'])) {
            return true;
        }
        else {
            return false;
        }
    }

    /**
     * Método responsável por efetuar o Login
     * @param $email
     * @param $pass
     * @return bool
     */
    public function doLogin($email, $pass){
        $sql = $this->db->prepare("SELECT * FROM users WHERE email = :email AND password = :password");
        $sql->bindValue(':email', $email);
        $sql->bindValue(':password', md5($pass));
        $sql->execute();

        if($sql->rowCount() > 0) {
            $row = $sql->fetch();
            $_SESSION['ccUser'] = $row['id'];
            return true;
        }
        else {
            return false;
        }
    }

    /**
     * Método responsável por setar as configurações do usuário logado.
     * Armazena os dados no atributo $userInfo
     * @return void
     */
    public function setLoggedUser() {
        if(isset($_SESSION['ccUser']) && !empty($_SESSION['ccUser'])) {
            $id = $_SESSION['ccUser'];

            $sql = $this->db->prepare("SELECT * FROM users WHERE id = :id");
            $sql->bindValue(':id', $id);
            $sql->execute();

            if($sql->rowCount() > 0) {
                $this->userInfo = $sql->fetch();
            }
        }
    }

    /**
     * Retorna o ID da comanhia a qual o Usuário pertence.
     * @return mixed
     */
    public function getCompany() {
        if(isset($this->userInfo['id_company'])) {
            return $this->userInfo['id_company'];
        }
        else {
            return 0;
        }
    }
}


















