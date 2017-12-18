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
            'verba_inicial' => $this->input->post('verba_inicial'),
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

    public function getAlunos2($id)
    {
        $query = $this->db->get('alunos where id_aluno NOT IN (select fk_aluno from projeto_colaboradores where fk_aluno > 0 and fk_projeto ='.$id.')');
        return $query->result_array();
    }

    public function getAlunos3($id)
    {
        $query = $this->db->get('alunos where id_aluno NOT IN (select fk_voluntario from projeto_colaboradores where fk_voluntario > 0 and fk_projeto ='.$id.')');
        return $query->result_array();
    }

    public function setColaboradoresProjProf($opcao=0,$id=0)
    {
        $this->load->helper('url');
        if($this->input->post('data_saida_professor') == ''){
            $data['data_saida'] = NULL;
        }
        else{
            $data['data_saida'] = $this->input->post('data_saida_professor');
        }
        $data = array(
            'fk_projeto' => $opcao,
            'fk_professor' => $this->input->post('professor'),
            'carga_horaria' => $this->input->post('carga_professor'),
            'funcao' => $this->input->post('funcao_professor'),
            'data_entrada' => $this->input->post('data_professor')     
        );
        if ($id == 0) {
            return $this->db->insert('projeto_colaboradores', $data);
        } else {
            $this->db->where('id_projeto_colaborador', $id);
            $this->db->where('fk_professor', $data['fk_professor']);
            return $this->db->update('projeto_colaboradores', $data);
        }
    }   

    public function setColaboradoresProjBol($opcao=0,$id=0)
    {
        $this->load->helper('url');
        if($this->input->post('data_saida_bolsista') == ''){
            $data['data_saida'] = NULL;
        }
        else{
            $data['data_saida'] = $this->input->post('data_saida_bolsista');
        }
        $data = array(
            'fk_projeto' => $opcao,
            'fk_aluno' => $this->input->post('bolsista'),
            'carga_horaria' => $this->input->post('carga_bolsista'),
            'funcao' => $this->input->post('funcao_bolsista'),
            'data_entrada' => $this->input->post('data_bolsista')           
        );
        if ($id == 0) {
            return $this->db->insert('projeto_colaboradores', $data);
        } 
        else {
            $this->db->where('id_projeto_colaborador', $id);
            $this->db->where('fk_aluno', $data['fk_aluno']);
            return $this->db->update('projeto_colaboradores', $data);
        }
    }
    public function setColaboradoresProjVol($opcao=0,$id=0)
    {
        $this->load->helper('url');
        if($this->input->post('data_saida_professor') == ''){
            $data['data_saida'] = NULL;
        }
        else{
            $data['data_saida'] = $this->input->post('data_saida_professor');
        }
        $data = array(
            'fk_projeto' => $opcao,
            'fk_voluntario' => $this->input->post('voluntario'),
            'carga_horaria' => $this->input->post('carga_voluntario'),
            'funcao' => $this->input->post('funcao_voluntario'),
            'data_entrada' => $this->input->post('data_voluntario')          
        );
        if ($id == 0) {
            return $this->db->insert('projeto_colaboradores', $data);
        } else {
            $this->db->where('fk_voluntario', $data['fk_voluntario']);
            $this->db->where('id_projeto_colaborador', $id);
            return $this->db->update('projeto_colaboradores', $data);
        }
    }

    public function getBolsista_Colab($id, $bolsista)
    {
        $this->db->where('fk_projeto', $id);
        $this->db->where('fk_aluno', $bolsista);
        $this->db->select('nome, id_projeto_colaborador, fk_aluno, carga_horaria, data_entrada, data_saida, funcao, fk_projeto');
        $this->db->from('projeto_colaboradores');
        $this->db->join('alunos', 'fk_aluno  = id_aluno');
        $query = $this->db->get();
        return $query->row(); 
    }


    public function getProjetoColabBol($id)
    {
        $query = $this->db->get('alunos where id_aluno IN (select fk_aluno from projeto_colaboradores where fk_aluno > 0 and fk_projeto = '.$id.')');
        return $query->result_array(); 
    }

    public function getVoluntario_Colab($id, $voluntario)
    {
        $this->db->where('fk_projeto', $id);
        $this->db->where('fk_voluntario', $voluntario);
        $this->db->select('nome, id_projeto_colaborador, fk_voluntario, carga_horaria, data_entrada, data_saida, funcao, fk_projeto');
        $this->db->from('projeto_colaboradores');
        $this->db->join('alunos', 'fk_voluntario  = id_aluno');
        $query = $this->db->get();
        return $query->row(); 
    }


    public function getProjetoColabVol($id)
    {
        $query = $this->db->get('alunos where id_aluno IN (select fk_voluntario from projeto_colaboradores where fk_voluntario > 0 and fk_projeto = '.$id.')');
        return $query->result_array(); 
    }
}