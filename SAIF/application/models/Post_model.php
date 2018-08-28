<?php

class Post_model extends CI_Model{
    public $id;
    public $tecnico_integrado;
    public $subsequente;
    public $datahora;
    
    public function __construct() {
        parent::__construct();
    }
    
    public function inserir(){
        $dados = array("msg"=> $this->msg);
        return $this->db->insert('post', $dados);
    }
    public function recuperar(){
        $this->db->order_by('datahora', "desc");
        $query = $this->db->get('post');
        return $query->result();
    }
}