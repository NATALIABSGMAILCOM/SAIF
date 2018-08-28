<?php


class Sessao_Model extends CI_Model{
    public $id;
    public $tecnico_integrado;
    public $subsequente;
    public $superior;
//    public $datahora;
    
    public function __construct() {
        parent::__construct();
    }
    
    public function inserir() {
        $dados = array("tecnico_integrado" => $this->tecnico_integrado,"subsequente"=>$this->subsequente,"superior"=>$this->superior);
        $this->db->insert('sessao', $dados);
        
        
    }
    
    public function recuperar(){
        $this->db->select('*');
        $this->db->from('news_data');
        $id = $this->db->get()->num_rows();
        return $id;

    }
}
