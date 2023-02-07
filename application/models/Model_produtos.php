<?php 

class Model_produtos extends CI_Model {

    public $id;
    public $descricao;
    public $preco;
    public $qtde;

    public function get_produtos() {
        $query = $this->db->get('produtos'); //select * from produtos
        return $query->result();
    }


    
    public function preco_cresente(){
        $this->db->order_by('preco', 'desc');
        $query= $this->db->get('produtos');
        return $query->result();
    }
    public function preco_decrescente(){
        $this->db->order_by('preco', 'asc');
        $query= $this->db->get('produtos');
        return $query->result();
    }
    public function qtde_cresente(){
        $this->db->order_by('qtde', 'desc');
        $query= $this->db->get('produtos');
        return $query->result();
    }
    public function qtde_decrescente(){
        $this->db->order_by('qtde', 'asc');
        $query= $this->db->get('produtos');
        return $query->result();
    }
}

?>