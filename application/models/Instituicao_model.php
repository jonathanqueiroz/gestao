<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Instituicao_model extends CI_Model {

	public function __construct()
    {
        $this->load->database();
    }
    
    public function setInstituicao($id=0)
    {
    	$this->load->helper('url');

        $data = array(
            'nome' => $this->input->post('nome'),
            'cnpj' => $this->input->post('cnpj'),
            'sigla' => $this->input->post('sigla'),
            'representante' => $this->input->post('representante'),
            'endereco' => $this->input->post('endereco'),
            'numero' => $this->input->post('numero'),
            'complemento' => $this->input->post('complemento'),
            'cep' => $this->input->post('cep'),
            'municipio' => $this->input->post('municipio'),
            'uf' => $this->input->post('uf'),'
            telefone' => $this->input->post('telefone'),
            'email' => $this->input->post('email'),
            'sitio' => $this->input->post('sitio'),
            'categoria_adm' => $this->input->post('categoria_adm'),
            'reitor' => $this->input->post('reitor'),
            'credenciamento' =>$this->input->post('credenciamento')
        );
        
        if ($id == 0) {
            return $this->db->insert('instituicao', $data);
        } else {
            $this->db->where('id_instituicao', $id);
            return $this->db->update('instituicao', $data);
        }

    }

    public function getInstituicao($id=0)
    {     
        $query = $this->db->get('instituicao');
        return $query->row();
    }

    public function setProfessor($id=0)
    {
        $this->load->helper('url');
        $data = array(
	        'nome' => $this->input->post('nome'),
            'cpf' => $this->input->post('cpf'),
            'nascimento' => $this->input->post('nascimento'),
            'sexo' => $this->input->post('sexo'),
            'endereco' => $this->input->post('endereco'),
            'numero' => $this->input->post('numero'),
            'complemento' => $this->input->post('complemento'),
            'cep' => $this->input->post('cep'),
            'municipio' => $this->input->post('municipio'),
            'uf' => $this->input->post('uf'),'
            telefone' => $this->input->post('telefone'),
            'email' => $this->input->post('email'),
            'matricula' => $this->input->post('matricula'),
            'lattes' => $this->input->post('lattes'),
            'departamento' => $this->input->post('departamento'),
            'situacao' =>$this->input->post('situacao'),
            'area' =>$this->input->post('area')
    	);
    
	    if ($id == 0) {
	        return $this->db->insert('professores', $data);
	    } else {
	        $this->db->where('id_professor', $id);
	        return $this->db->update('professores', $data);
	    }	
    }

    public function getProfessor($id=0)
    {      
        $this->db->where('id_professor', $id);
        $query = $this->db->get('professores');
        return $query->row();
    }

    public function getProfessores($nome='')
    {      
        $this->db->like('nome', $nome);  
        $query = $this->db->get('professores');
        return $query->result_array();
    }

    public function getProfessores2($id)
    {      
        //$this->db->select('*');
        //$this->db->from('professores');
        //$this->db->join('projeto_colaboradores', 'fk_professor  != id_professor');
        $query = $this->db->get('professores where id_professor NOT IN (select fk_professor from projeto_colaboradores where fk_professor > 0 and fk_projeto = '.$id.')');
        return $query->result_array();
    }

    public function getProfessor_Colab($id, $professor)
    {
        $this->db->where('fk_projeto', $id);
        $this->db->where('fk_professor', $professor);
        $this->db->select('nome, id_projeto_colaborador, fk_professor, carga_horaria, data_entrada, data_saida, funcao, fk_projeto');
        $this->db->from('projeto_colaboradores');
        $this->db->join('professores', 'fk_professor  = id_professor');
        $query = $this->db->get();
        return $query->row(); 
    }


    public function getProjetoColabProf($id)
    {
        $query = $this->db->get('professores where id_professor IN (select fk_professor from projeto_colaboradores where fk_professor > 0 and fk_projeto = '.$id.')');
        return $query->result_array(); 
    }
    public function setDepartamento($id=0)
    {
    	/*$data = array(
	        'titulo' => $this->input->post('titulo'),
	        'orientador' => $this->input->post('orientador'),
	        'descricao' => $this->input->post('descricao'),
	        'departamento' => $this->input->post('departamento'),
	        'modalidade' => $this->input->post('modalidade'),
	        'publico_alvo' => $this->input->post('publico_alvo'),
	        'justificativa' => $this->input->post('justificativa'),
	        'objetivos' => $this->input->post('objetivos'),
	        'metodologia' => $this->input->post('metodologia'),
	        'cronograma' => $this->session->flashdata('upload')
    	);
    
	    if ($id == 0) {
	        return $this->db->insert('projeto', $data);
	    } else {
	        $this->db->where('id_projeto', $id);
	        return $this->db->update('projeto', $data);
	    } */
    }

    public function getDepartamento($text='')
    {
    	$this->db->like('nome', $text);  
        $this->db->or_like('sigla', $text); 
        $this->db->or_like('email', $text);       
        $query = $this->db->get('departamentos');
        return $query->result_array(); 
    }

    public function getEstados($text='')
    {
    	$this->db->like('nome', $text);  
        $this->db->or_like('sigla', $text);       
        $query = $this->db->get('estados');
        return $query->result_array(); 
    }

    public function getSituacaoContratual($text='')
    {
    	$this->db->like('nome', $text);        
        $query = $this->db->get('situacao_contratual');
        return $query->result_array(); 
    }
}

/* End of file Instituicao_model.php */
/* Location: ./application/models/Instituicao_model.php */ ?>