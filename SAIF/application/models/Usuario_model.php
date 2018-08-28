<?php


class Usuario_model extends CI_Model{
    public $id;
    public $nome;
    public $senha;
    public $login;
    public $cpf;
    

    public function __construct() {
        parent::__construct();
    }
    
    public function inserir(){
        $dados = array("nome" =>$this->nome,"senha"=>$this->senha,"login"=>$this->login,"cpf"=>$this->cpf);
        $this->db->insert('usuario', $dados);
    }
    
    public function ultimoId(){
        return $this->db->insert_id();
    }
    
     public function recuperar(){     
        $this->db->order_by('nome','datahora');
        $query = $this->db->get('usuario');
        return $query->result();
    }
    
     public function recuperarUm($id){
        $this->db->where('id',$id);
        $query = $this->db->get('usuario');
        return $query->row();
    }
    public function update(){
        $this->db->set('nome', $this->nome);
        $this->db->where('id', $this->id);
        $this->db->update('usuario');
    }
    public function verificarLoginESenha($login, $senha){
        $this->db->where("login", $login);
        $this->db->where("senha", $senha);
        $r = $this->db->get("usuario");
        return $r->row();
    }
    
   public function get_todos_usuarios(){
        $query = $this->db->get("usuario");
        return $query->result();
    }
   
    public function delete($id){
        $this->db->where('id', $id);
        $this->db->delete('usuario');
    }
}
