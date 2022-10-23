<?php

class permissionsController extends controller
{
    public function __construct()
    {
        parent::__construct();

        $u = new Users();
        if($u->isLogged() == false) {
            header("Location: ".BASE_URL."/login");
            exit;
        }
    }

    public function index() {
        $data = [];
        $u = new Users();
        // Pega a sessão que está logada, pega as informações do usuário e seta no model.
        $u->setLoggedUser();
        // instância do model da Compania que o usuário pertence.
        $company = new Companies($u->getCompany());
        $data['company_name'] = $company->getName();
        $data['email'] = $u->getEmail();

        $this->loadTemplate('permissions', $data);
    }
}