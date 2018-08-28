<?php


class Ficha_Model extends CI_Model{
    public $id;
    
//    public $datahora;
    
    public function __construct() {
        parent::__construct();
    }
    
    public function inserir() {
        $dados = array("id" => $this->id);
        $this->db->insert('fichas', $dados);
        
        
    }
}
