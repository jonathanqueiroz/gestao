<?php
class Projeto_model extends CI_Model {
 
    public function __construct()
    {
        $this->load->database();
    }
    
    public function get_projetos($text='')
    {
        $this->db->like('titulo', $text);        
        $query = $this->db->get('projeto');
        return $query->result_array();
    }
    
    public function get_projeto_by_id($id = 0)
    {
        if ($id === 0)
        {
            $query = $this->db->get('projeto');
            return $query->result_array();
        }
 
        $query = $this->db->get_where('projeto', array('id_projeto' => $id));
        return $query->row_array();
    }
    
    public function set_projeto($id = 0)
    {
        $this->load->helper('url');

        $data = array(
            'titulo' => $this->input->post('titulo'),
            'num_registro' => $this->input->post('num_registro'),
            'data_inicio' => $this->input->post('data_inicio'),
            'data_termino' => $this->input->post('data_termino'),
            'professor' => $this->input->post('professor'),
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
        }
    }
    
    public function delete_projeto($id)
    {
        $this->db->where('id_projeto', $id);
        return $this->db->delete('projeto');
    }

    public function setContribuintes($id=0)
    {
        $this->load->helper('url');

        $data = array(
            'num_docentes' => $this->input->post('num_docentes'),
            'num_bolsistas' => $this->input->post('num_bolsistas'),
            'num_voluntarios' => $this->input->post('num_voluntarios'),
            'num_atendidos' => $this->input->post('num_atendidos'),
            'obs_contrib' => $this->input->post('obs_contrib')            
        );
        
        if ($id == 0) {
            return $this->db->insert('contribuintes', $data);
        } else {
            $this->db->where('id_contribuintes', $id);
            return $this->db->update('contribuintes', $data);
        }
    }

    public function getContribuintes()
    {
        $query = $this->db->get('contribuintes');
        return $query->row();
    }

    public function setAluno($id=0)
    {
        $this->load->helper('url');
        
        $data = array(
            'nome' => $this->input->post('nome'),
            'cpf' => $this->input->post('cpf'),
            'nascimento' => $this->input->post('nascimento'),
            'sexo' => $this->input->post('sexo'),
            'endereco' => $this->input->post('endereco'),
            'cidade' => $this->input->post('cidade'),
            'matricula' => $this->input->post('matricula'),
            'curso' => $this->input->post('curso'),
            'semestre' => $this->input->post('semestre'),
            'tipo_bolsa' => $this->input->post('tipo_bolsa'),
            'periodo_entrada' => $this->input->post('periodo_entrada'),
            'fk_projeto' => $this->input->post('fk_projeto'),
            'periodo_saida' => $this->input->post('periodo_saida')           
        );
        
        if ($id == 0) {
            return $this->db->insert('alunos', $data);
        } else {
            $this->db->where('id_aluno', $id);
            return $this->db->update('alunos', $data);
        }
    }

    public function getAluno($id)
    {
        $this->db->where('id_aluno', $id);
        $query = $this->db->get('alunos');
        return $query->row();
    }

    public function getAlunos($text='')
    {

        $this->db->like('nome', $text);  
        $this->db->or_like('cpf', $text);      
        $query = $this->db->get('alunos');
        return $query->result_array();
    }
}