<?php
/**
 * Classe Model de Companies.
 * No construtor é passado o ID da companhia do usuário, em seguida feita a busca dos dados.
 * @author Pierri Alexander Vidmar.
 * @since 16/10/2022.
 */
class Companies extends model {

    // Atributo que conterá todas as informações do usuário.
    private $companyInfo;

    public function __construct($id)
    {
        parent::__construct();

        $sql = $this->db->prepare("SELECT * FROM companies WHERE id = :id");
        $sql->bindValue(':id', $id);
        $sql->execute();

        if($sql->rowCount() > 0) {
            $this->companyInfo = $sql->fetch();
        }
    }

    /**
     * Retorna o nome da compania
     * @return String
     */
    public function getName(){
        if($this->companyInfo['name']) {
            return utf8_encode($this->companyInfo['name']);
        }
        else {
            return '';
        }
    }


}
