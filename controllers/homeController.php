<?php

/**
 * Classe Controladora da Home
 * @author Pierri Alexander Vidmar
 * @since 23/09/2022
 */
class homeController extends controller{

    public function __construct() {

        parent::__construct();

        $u = new Users();
        if($u->isLogged() == false) {
            header("Location: ".BASE_URL."/login");
            exit;
        }
    }

    public function index() {
        $data = array();
        // Instancia do model de Usuários.
        $u = new Users();
        // Pega a sessão que está logada, pega as informações do usuário e seta no model.
        $u->setLoggedUser();
        // instância do model da Compania que o usuário pertence.
        $company = new Companies($u->getCompany());
        $data['company_name'] = $company->getName();


        $this->loadTemplate('home', $data);
    }

}