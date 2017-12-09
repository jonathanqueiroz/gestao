<?php
class Projeto_model extends CI_Model {
 
    public function __construct()
    {
        $this->load->database();
    }
    
    public function get_projetos()
    {
        //if ($id === FALSE)
        //{
            $query = $this->db->get('projeto');
            return $query->result_array();
        //}
 
        //$query = $this->db->get_where('projeto', array('id_projeto' => $id));
        //return $query->row_array();
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
}