<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{	
		$this->load->model("Model_produtos");
		$dados['produtos']=$this->Model_produtos->get_produtos();
		$this->load->view('view_topo');
		$this->load->view('view_home',$dados);
		$this->load->view('view_rodape');
	}
	public function preco_desc(){
        $this->load->model("Model_produtos");
		$dados['produtos']=$this->Model_produtos->get_produtos();
		$dados['produtos']=$this->Model_produtos->preco_cresente();
		$this->load->view('view_topo');
		$this->load->view('view_home',$dados);
		$this->load->view('view_rodape');
    }
    public function preco_asc(){
        $this->load->model("Model_produtos");
		$dados['produtos']=$this->Model_produtos->get_produtos();
		$dados['produtos']=$this->Model_produtos->preco_decrescente();
		$this->load->view('view_topo');
		$this->load->view('view_home',$dados);
		$this->load->view('view_rodape');
    }
    public function qtde_desc(){
        $this->load->model("Model_produtos");
		$dados['produtos']=$this->Model_produtos->get_produtos();
		$dados['produtos']=$this->Model_produtos->qtde_cresente();
		$this->load->view('view_topo');
		$this->load->view('view_home',$dados);
		$this->load->view('view_rodape');
    }
    public function qtde_asc(){
        $this->load->model("Model_produtos");
		$dados['produtos']=$this->Model_produtos->get_produtos();
		$dados['produtos']=$this->Model_produtos->qtde_decrescente();
		$this->load->view('view_topo');
		$this->load->view('view_home',$dados);
		$this->load->view('view_rodape');
    }
}
