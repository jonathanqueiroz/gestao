<?php
class Pessoa_model extends CI_Model {
 
    public function __construct()
    {
        $this->load->database();
    }
    
    public function get_pessoas($id = FALSE)
    {
        if ($id === FALSE)
        {
            $query = $this->db->get('pessoa');
            return $query->result_array();
        }
 
        $query = $this->db->get_where('pessoa', array('id_pessoa' => $id));
        return $query->row_array();
    }
    
    public function get_pessoa_by_id($id = 0)
    {
        if ($id === 0)
        {
            $query = $this->db->get('pessoa');
            return $query->result_array();
        }
 
        $query = $this->db->get_where('pessoa', array('id_pessoa' => $id));
        return $query->row_array();
    }
    
    public function set_pessoa($id = 0)
    {
        $this->load->helper('url');

        $data = array(
            'nome' => $this->input->post('nome'),
            'email' => $this->input->post('email'),
            'telefone' => $this->input->post('telefone'),
            'data_nascimento' => $this->input->post('nascimento'),
            'endereco' => $this->input->post('endereco'),
            'status_cadastro' => 1
        );
        
        if ($id == 0) {
            return $this->db->insert('pessoa', $data);
        } else {
            $this->db->where('id_pessoa', $id);
            return $this->db->update('pessoa', $data);
        }
    }
    
    public function delete_pessoa($id)
    {
        $this->db->where('id_pessoa', $id);
        return $this->db->delete('pessoa');
    }

    public function set_usuario($id = 0)
    {
        $this->load->helper('url');

        $data = array(
            'nome' => $this->input->post('nome'),
            'email' => $this->input->post('email'),
            'telefone' => $this->input->post('telefone'),
            'data_nascimento' => $this->input->post('nascimento'),
            'endereco' => $this->input->post('endereco'),
            'status_cadastro' => 2
        );
        
        if ($id == 0) {
            $this->db->insert('pessoa', $data);
            $fk_pessoa = $this->db->insert_id();
            $data2 = array(
                'fk_pessoa' => $fk_pessoa,
                'senha' => md5($this->input->post('senha')),
                'tipo_usuario' => 1);
            return $this->db->insert('usuario', $data2);
        } 
        else {
            $this->db->where('id_pessoa', $id);
            $this->db->update('pessoa', $data);
            $this->db->where('fk_pessoa', $id);
            return $this->db->update('usuario', $data);
        }
    }

    public function get_usuario($login, $senha)
    {
        $this->db->select('*');
        $this->db->from('usuario');
        $this->db->join('pessoa', 'pessoa.id_pessoa = usuario.fk_pessoa');
        $this->db->where('pessoa.email', $login);
        $this->db->where('usuario.senha', $senha);
        $query = $this->db->get();
        return $query->row_array();
    }

}