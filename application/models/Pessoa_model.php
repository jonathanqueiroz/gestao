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


    public function setPessoa_step1($id=0)
    {
         $this->load->helper('url');
         date_default_timezone_set('America/Bahia');

        $data = array(
            'nome' => $this->input->post('nome'),
            'rg' => $this->input->post('rg'),
            'telefone' => $this->input->post('telefone'),
            'nascimento' => $this->input->post('nascimento'),
            'endereco' => $this->input->post('endereco'),
            'cidade' => $this->input->post('cidade'),
            'pt_ref' => $this->input->post('pt_ref'),
            'cep' => $this->input->post('cep'),
            'local_nascimento' => $this->input->post('local_nascimento'),
            'filiacao_mae' => $this->input->post('filiacao_mae'),
            'filiacao_pai' => $this->input->post('filiacao_pai'),
            'responsavel' => $this->input->post('responsavel'),
            'estado_civil' => $this->input->post('estado_civil'),
            'acompanhante' => $this->input->post('acompanhante'),
            'sexo' => $this->input->post('sexo'),
            'data_criacao' => date("Y-m-d H:i:s")
        );
        
        if ($id == 0) {
            $this->db->insert('cadastroAdolescenteOne', $data);
            $fk_pessoa = $this->db->insert_id();
            return $fk_pessoa;
        } 
        else {
            $this->db->where('id_pessoa', $id);
            $this->db->update('cadastroAdolescenteOne', $data);
        }
    }

    public function setPessoa_step2($id=0, $fk_pessoa=0)
    {
         $this->load->helper('url'); 

        $data = array(
            'fk_pessoa' => $fk_pessoa,
            'motivo_adolescente' => $this->input->post('motivo_adolescente'),
            'motivo_acompanhante' => $this->input->post('motivo_acompanhante'),
            'cod_adolescente' => $this->input->post('cod_adolescente'),
            'cod_acompanhante' => $this->input->post('cod_acompanhante'),
            'obs_motivos' => $this->input->post('obs_motivos'),
            'perinatais' => $this->input->post('perinatais'),
            'crescimento' => $this->input->post('crescimento'),
            'vacinas' => $this->input->post('vacinas'),
            'cronica' => $this->input->post('cronica'),
            'infectocontagiosas' => $this->input->post('infectocontagiosas'),
            'intoxicacao' => $this->input->post('intoxicacao'),
            'cirurgia' => $this->input->post('cirurgia'),
            'medicamentos' => $this->input->post('medicamentos'),
            'transtornos' => $this->input->post('transtornos'),
            'maltratos' => $this->input->post('maltratos'),
            'judiciais' => $this->input->post('judiciais'),
            'outros_pessoais' => $this->input->post('outros_pessoais'),
            'obs_pessoais' => $this->input->post('obs_pessoais'),
            'diabetes' => $this->input->post('diabetes'),
            'obesidade' => $this->input->post('obesidade'),
            'cadiovascular' => $this->input->post('cadiovascular'),
            'alergia' => $this->input->post('alergia'),
            'infeccao' => $this->input->post('infeccao'),
            'infectocontagiosas_familiar' => $this->input->post('infectocontagiosas_familiar'),
            'transtornos_psicologicos' => $this->input->post('transtornos_psicologicos'),
            'alcool' => $this->input->post('alcool'),
            'violencia' => $this->input->post('violencia'),
            'mae_adolescente' => $this->input->post('mae_adolescente'),
            'judiciais_familiar' => $this->input->post('judiciais_familiar'),
            'outros_familiar' => $this->input->post('outros_familiar'),
            'obs_familiar' => $this->input->post('obs_familiar')
        );
        
        if ($id == 0) {

            $this->db->insert('cadastroAdolescente2', $data);
            //Resolver ID retornado
            
        } 
        else {
            $this->db->where('fk_pessoa', $id);
            $this->db->update('cadastroAdolescente2', $data);
        }
    }

        public function setPessoa_step3($id=0, $fk_pessoa=0)
    {
         $this->load->helper('url'); 

        $data = array(
            'fk_pessoa' => $fk_pessoa,
            'convive_mae' => $this->input->post('convive_mae'),
            'convive_pai' => $this->input->post('convive_pai'),
            'convive_madrasta' => $this->input->post('convive_madrasta'),
            'convive_padrastro' => $this->input->post('convive_padrastro'),
            'convive_irmao' => $this->input->post('convive_irmao'),
            'convive_filho' => $this->input->post('convive_filho'),
            'convive_companheiro' => $this->input->post('convive_companheiro'),
            'convive_outros' => $this->input->post('convive_outros'),
            'vive_instituicao' => $this->input->post('vive_instituicao'),
            'vive_rua' => $this->input->post('vive_rua'),
            'vive_sozinho' => $this->input->post('vive_sozinho'),
            'instrucao_pai' => $this->input->post('instrucao_pai'),
            'instrucao_mae' => $this->input->post('instrucao_mae'),
            'tipo_trabalho_pai' => $this->input->post('tipo_trabalho_pai'),
            'tipo_trabalho_mae' => $this->input->post('tipo_trabalho_mae'),
            'ocupacao_pai' => $this->input->post('ocupacao_pai'),
            'ocupacao_mae' => $this->input->post('ocupacao_mae'),
            'ocupacao_responsavel' => $this->input->post('ocupacao_responsavel'),
            'percepcao' => $this->input->post('percepcao'),
            'condicoes_energia' => $this->input->post('condicoes_energia'),
            'condicoes_lixo' => $this->input->post('condicoes_lixo'),
            'condicoes_agua' => $this->input->post('condicoes_agua'),
            'condicoes_dejetos' => $this->input->post('condicoes_dejetos'),
            'condicoes_quarto' => $this->input->post('condicoes_quarto'),
            'condicoes_cama' => $this->input->post('condicoes_cama'),
            'condicoes_habitacao' => $this->input->post('condicoes_habitacao'),
            'condicoes_construcao' => $this->input->post('condicoes_construcao'),
            'condicoes_numero_quartos' => $this->input->post('condicoes_numero_quartos'),
            'condicoes_numero_comodos' => $this->input->post('condicoes_numero_comodos'),
            'observacoes' => $this->input->post('observacoes')
        );
        
        if ($id == 0) {

            $this->db->insert('cadastroAdolescente3', $data);
            //Resolver ID retornado
            
        } 
        else {
            $this->db->where('fk_pessoa', $id);
            $this->db->update('cadastroAdolescente3', $data);
        }
    }

        public function setPessoa_step4($id=0, $fk_pessoa=0)
    {
         $this->load->helper('url'); 

        $data = array(
            'fk_pessoa' => $fk_pessoa,
            'estuda' => $this->input->post('estuda'),
            'nivel' => $this->input->post('nivel'),
            'serie' => $this->input->post('serie'),
            'turno_escola' => $this->input->post('turno_escola'),
            'problemas_escola' => $this->input->post('problemas_escola'),
            'anos_repetidos' => $this->input->post('anos_repetidos'),
            'abandono_escola' => $this->input->post('abandono_escola'),
            'nao_formal' => $this->input->post('nao_formal'),
            'atividade_trabalho' => $this->input->post('atividade_trabalho'),
            'idade_trabalho' => $this->input->post('idade_trabalho'),
            'horas_semana' => $this->input->post('horas_semana'),
            'horario_trabalho' => $this->input->post('horario_trabalho'),
            'razao_trabalho' => $this->input->post('razao_trabalho'),
            'legalizado' => $this->input->post('legalizado'),
            'insalubre' => $this->input->post('insalubre'),
            'tipo_trabalho' => $this->input->post('tipo_trabalho')
        );
        
        if ($id == 0) {

            $this->db->insert('cadastroAdolescente4', $data);
            //Resolver ID retornado
            
        } 
        else {
            $this->db->where('fk_pessoa', $id);
            $this->db->update('cadastroAdolescente4', $data);
        }
    }

        public function setPessoa_step5($id=0, $fk_pessoa=0)
    {
         $this->load->helper('url'); 

        $data = array(
            'fk_pessoa' => $fk_pessoa,
            'aceitao' => $this->input->post('aceitao'),
            'namorado' => $this->input->post('namorado'),
            'amigos' => $this->input->post('amigos'),
            'atividades_grupo' => $this->input->post('atividades_grupo'),
            'esportes' => $this->input->post('esportes'),
            'televisao' => $this->input->post('televisao'),
            'outras_atividades' => $this->input->post('outras_atividades'),
            'religiao' => $this->input->post('religiao'),
            'alimentacao' => $this->input->post('alimentacao'),
            'refeicoes_dia' => $this->input->post('refeicoes_dia'),
            'sono' => $this->input->post('sono'),
            'tabagismo' => $this->input->post('tabagismo'),
            'idade_tabagismo' => $this->input->post('idade_tabagismo'),
            'alcool' => $this->input->post('alcool'),
            'idade_alcool' => $this->input->post('idade_alcool'),
            'outras_substancias' => $this->input->post('outras_substancias'),
            'dirige' => $this->input->post('dirige')
        );
        
        if ($id == 0) {

            $this->db->insert('cadastroAdolescente5', $data);
            //Resolver ID retornado
            
        } 
        else {
            $this->db->where('fk_pessoa', $id);
            $this->db->update('cadastroAdolescente5', $data);
        }
    }

        public function setPessoa_step6($id=0, $fk_pessoa=0)
    {
         $this->load->helper('url'); 

        $data = array(
            'fk_pessoa' => $fk_pessoa,
            'menarca_espermarca' => $this->input->post('menarca_espermarca'),
            'data_menstruacao' => $this->input->post('data_menstruacao'),
            'ciclos' => $this->input->post('ciclos'),
            'dismonorreia' => $this->input->post('dismonorreia'),
            'patologico_secrecao' => $this->input->post('patologico_secrecao'),
            'dst' => $this->input->post('dst'),
            'num_gestacoes' => $this->input->post('num_gestacoes'),
            'num_filhos' => $this->input->post('num_filhos'),
            'num_abortos' => $this->input->post('num_abortos'),
            'informacao' => $this->input->post('informacao'),
            'relacoes_sexuais' => $this->input->post('relacoes_sexuais'),
            'parceiro' => $this->input->post('parceiro'),
            'idade_sexo' => $this->input->post('idade_sexo'),
            'problema_sexuais' => $this->input->post('problema_sexuais'),
            'preservativos' => $this->input->post('preservativos'),
            'outros_metodos' => $this->input->post('outros_metodos'),
            'abuso_sexual' => $this->input->post('abuso_sexual')
        );
        
        if ($id == 0) {

            $this->db->insert('cadastroAdolescente6', $data);
            //Resolver ID retornado
            
        } 
        else {
            $this->db->where('fk_pessoa', $id);
            $this->db->update('cadastroAdolescente6', $data);
        }
    }

        public function setPessoa_step7($id=0, $fk_pessoa=0)
    {
         $this->load->helper('url'); 

        $data = array(
            'fk_pessoa' => $fk_pessoa,
            'imagem_corporal' => $this->input->post('imagem_corporal'),
            'auto_percepcao' => $this->input->post('auto_percepcao'),
            'adulto_referencia' => $this->input->post('adulto_referencia'),
            'projeto_vida' => $this->input->post('projeto_vida'),
            'aspecto_geral' => $this->input->post('aspecto_geral'),
            'peso' => $this->input->post('peso'),
            'altura' => $this->input->post('altura'),
            'centil_peso_idade' => $this->input->post('centil_peso_idade'),
            'centil_altura_idade' => $this->input->post('centil_altura_idade'),
            'centil_peso_altura' => $this->input->post('centil_peso_altura'),
            'pele_anexos' => $this->input->post('pele_anexos'),
            'cabeca' => $this->input->post('cabeca'),
            'acuidade_visual' => $this->input->post('acuidade_visual'),
            'acuidade_auditiva' => $this->input->post('acuidade_auditiva'),
            'bocas_dentes' => $this->input->post('bocas_dentes'),
            'pescoco_tireoide' => $this->input->post('pescoco_tireoide'),
            'torax_mamas' => $this->input->post('torax_mamas'),
            'cardiovascular' => $this->input->post('cardiovascular'),
            'pressao_arterial' => $this->input->post('pressao_arterial'),
            'frequencia_cardiaca' => $this->input->post('frequencia_cardiaca'),
            'abdomen' => $this->input->post('abdomen'),
            'geniturinario' => $this->input->post('geniturinario'),
            'coluna' => $this->input->post('coluna'),
            'extremidades' => $this->input->post('extremidades'),
            'neurologicos' => $this->input->post('neurologicos')
        );
        
        if ($id == 0) {

            $this->db->insert('cadastroAdolescente7', $data);
            //Resolver ID retornado
            
        } 
        else {
            $this->db->where('fk_pessoa', $id);
            $this->db->update('cadastroAdolescente7', $data);
        }
    }

    public function getAdolescentes()
    {
        $query = $this->db->get('cadastroAdolescenteOne');
        return $query->result_array();
    }

}