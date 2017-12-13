--
-- PostgreSQL database dump
--

-- Dumped from database version 9.6.5
-- Dumped by pg_dump version 9.6.5

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;
SET row_security = off;

--
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


--
-- Name: citext; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS citext WITH SCHEMA public;


--
-- Name: EXTENSION citext; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION citext IS 'data type for case-insensitive character strings';


SET search_path = public, pg_catalog;

--
-- Name: url_slug(text); Type: FUNCTION; Schema: public; Owner: postgres
--

CREATE FUNCTION url_slug(s_texto text) RETURNS character varying
    LANGUAGE plpgsql SECURITY DEFINER
    AS $_$
DECLARE
	total integer;
BEGIN
    s_texto := replace(s_texto , 'U$', 'dolares');
    s_texto := replace(s_texto , 'R$', 'reais');
    s_texto := regexp_replace(translate(replace(lower(s_texto), ' ', '-'),
        'áàâãäåāăąÁÂÃÄÅĀĂĄèééêëēĕėęěĒĔĖÉĘĚìíîïìĩīĭÌÍÎÏÌĨĪĬóôõöōŏőÒÓÔÕÖŌŎŐùúûüũūŭůÙÚÛÜŨŪŬŮçÇÿ&,.ñÑ',
        'aaaaaaaaaaaaaaaaaeeeeeeeeeeeeeeeeiiiiiiiiiiiiiiiiooooooooooooooouuuuuuuuuuuuuuuuccy_--nn'), E'[^\\w -]', '', 'g');
	
	SELECT COUNT(not_slug) INTO total FROM noticias WHERE not_slug = s_texto;
	
	IF total > 0 THEN
		RETURN s_texto || '-' || total+1;
	ELSE	
		RETURN s_texto;
	END IF;
END;
$_$;


ALTER FUNCTION public.url_slug(s_texto text) OWNER TO postgres;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: alunos; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE alunos (
    id_aluno bigint NOT NULL,
    nome citext NOT NULL,
    cpf citext NOT NULL,
    nascimento date NOT NULL,
    sexo text NOT NULL,
    endereco text NOT NULL,
    cidade text NOT NULL,
    matricula text NOT NULL,
    curso text NOT NULL,
    semestre text NOT NULL,
    tipo_bolsa text NOT NULL,
    periodo_entrada date NOT NULL,
    periodo_saida date NOT NULL,
    fk_projeto integer NOT NULL
);


ALTER TABLE alunos OWNER TO postgres;

--
-- Name: cadastroAdolescente2; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE "cadastroAdolescente2" (
    fk_pessoa integer NOT NULL,
    motivo_adolescente text NOT NULL,
    motivo_acompanhante text NOT NULL,
    cod_adolescente text NOT NULL,
    cod_acompanhante text NOT NULL,
    obs_motivos text NOT NULL,
    perinatais text NOT NULL,
    crescimento text NOT NULL,
    vacinas text NOT NULL,
    cronica text NOT NULL,
    infectocontagiosas text NOT NULL,
    intoxicacao text NOT NULL,
    cirurgia text NOT NULL,
    medicamentos text NOT NULL,
    transtornos text NOT NULL,
    maltratos text NOT NULL,
    judiciais text NOT NULL,
    outros_pessoais text NOT NULL,
    obs_pessoais text NOT NULL,
    diabetes text NOT NULL,
    obesidade text NOT NULL,
    cadiovascular text NOT NULL,
    alergia text NOT NULL,
    infeccao text NOT NULL,
    infectocontagiosas_familiar text NOT NULL,
    transtornos_psicologicos text NOT NULL,
    alcool text NOT NULL,
    violencia text NOT NULL,
    mae_adolescente text NOT NULL,
    judiciais_familiar text NOT NULL,
    outros_familiar text NOT NULL,
    obs_familiar text NOT NULL
);


ALTER TABLE "cadastroAdolescente2" OWNER TO postgres;

--
-- Name: cadastroAdolescente3; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE "cadastroAdolescente3" (
    fk_pessoa bigint NOT NULL,
    convive_mae text NOT NULL,
    convive_pai text NOT NULL,
    convive_madrasta text NOT NULL,
    convive_padrastro text NOT NULL,
    convive_irmao text NOT NULL,
    convive_filho text NOT NULL,
    convive_companheiro text NOT NULL,
    convive_outros text NOT NULL,
    vive_instituicao text NOT NULL,
    vive_rua text NOT NULL,
    vive_sozinho text NOT NULL,
    instrucao_pai text NOT NULL,
    instrucao_mae text NOT NULL,
    tipo_trabalho_pai text NOT NULL,
    tipo_trabalho_mae text NOT NULL,
    ocupacao_pai text NOT NULL,
    ocupacao_mae text,
    ocupacao_responsavel text,
    percepcao text NOT NULL,
    condicoes_energia text NOT NULL,
    condicoes_lixo text NOT NULL,
    condicoes_agua text NOT NULL,
    condicoes_dejetos text NOT NULL,
    condicoes_quarto text NOT NULL,
    condicoes_cama text NOT NULL,
    condicoes_habitacao text NOT NULL,
    condicoes_construcao text NOT NULL,
    condicoes_numero_quartos bigint NOT NULL,
    condicoes_numero_comodos bigint NOT NULL,
    observacoes text
);


ALTER TABLE "cadastroAdolescente3" OWNER TO postgres;

--
-- Name: cadastroAdolescente4; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE "cadastroAdolescente4" (
    fk_pessoa integer NOT NULL,
    estuda text NOT NULL,
    nivel text NOT NULL,
    serie text NOT NULL,
    turno_escola text NOT NULL,
    problemas_escola text NOT NULL,
    anos_repetidos text NOT NULL,
    abandono_escola text NOT NULL,
    nao_formal text NOT NULL,
    atividade_trabalho text NOT NULL,
    idade_trabalho integer NOT NULL,
    horas_semana integer NOT NULL,
    horario_trabalho text NOT NULL,
    razao_trabalho text NOT NULL,
    legalizado text NOT NULL,
    insalubre text NOT NULL,
    tipo_trabalho text NOT NULL
);


ALTER TABLE "cadastroAdolescente4" OWNER TO postgres;

--
-- Name: cadastroAdolescente5; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE "cadastroAdolescente5" (
    fk_pessoa integer NOT NULL,
    aceitao text NOT NULL,
    namorado text NOT NULL,
    amigos text NOT NULL,
    atividades_grupo text NOT NULL,
    esportes text NOT NULL,
    televisao text NOT NULL,
    outras_atividades text NOT NULL,
    religiao text NOT NULL,
    alimentacao text NOT NULL,
    refeicoes_dia integer NOT NULL,
    sono text NOT NULL,
    tabagismo text NOT NULL,
    idade_tabagismo integer NOT NULL,
    alcool text NOT NULL,
    idade_alcool integer NOT NULL,
    outras_substancias text NOT NULL,
    dirige text NOT NULL
);


ALTER TABLE "cadastroAdolescente5" OWNER TO postgres;

--
-- Name: cadastroAdolescente6; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE "cadastroAdolescente6" (
    fk_pessoa integer NOT NULL,
    menarca_espermarca text NOT NULL,
    data_menstruacao text NOT NULL,
    ciclos text NOT NULL,
    dismonorreia text NOT NULL,
    patologico_secrecao text NOT NULL,
    dst text NOT NULL,
    num_gestacoes integer NOT NULL,
    num_filhos integer NOT NULL,
    num_abortos integer NOT NULL,
    informacao text NOT NULL,
    relacoes_sexuais text NOT NULL,
    parceiro text NOT NULL,
    idade_sexo integer NOT NULL,
    problema_sexuais text NOT NULL,
    preservativos text NOT NULL,
    outros_metodos text NOT NULL,
    abuso_sexual text NOT NULL
);


ALTER TABLE "cadastroAdolescente6" OWNER TO postgres;

--
-- Name: cadastroAdolescente7; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE "cadastroAdolescente7" (
    fk_pessoa integer NOT NULL,
    imagem_corporal text NOT NULL,
    auto_percepcao text NOT NULL,
    adulto_referencia text NOT NULL,
    projeto_vida text NOT NULL,
    aspecto_geral text NOT NULL,
    peso real NOT NULL,
    altura real NOT NULL,
    centil_peso_idade real NOT NULL,
    centil_altura_idade real NOT NULL,
    centil_peso_altura real NOT NULL,
    pele_anexos text NOT NULL,
    cabeca text NOT NULL,
    acuidade_visual text NOT NULL,
    acuidade_auditiva text NOT NULL,
    bocas_dentes text NOT NULL,
    pescoco_tireoide text NOT NULL,
    torax_mamas text NOT NULL,
    cardiovascular text NOT NULL,
    pressao_arterial text NOT NULL,
    frequencia_cardiaca integer NOT NULL,
    abdomen text NOT NULL,
    geniturinario text NOT NULL,
    coluna text NOT NULL,
    extremidades text NOT NULL,
    neurologicos text NOT NULL
);


ALTER TABLE "cadastroAdolescente7" OWNER TO postgres;

--
-- Name: cadastroAdolescenteOne; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE "cadastroAdolescenteOne" (
    id_pessoa bigint NOT NULL,
    nome citext NOT NULL,
    rg text NOT NULL,
    telefone text NOT NULL,
    endereco text NOT NULL,
    cidade text NOT NULL,
    pt_ref text NOT NULL,
    cep text NOT NULL,
    local_nascimento text NOT NULL,
    filiacao_mae text NOT NULL,
    filiacao_pai text NOT NULL,
    responsavel text NOT NULL,
    estado_civil text NOT NULL,
    acompanhante text NOT NULL,
    sexo text NOT NULL,
    data_criacao timestamp(1) with time zone NOT NULL,
    nascimento date NOT NULL,
    data_atualizacao timestamp(1) with time zone
);


ALTER TABLE "cadastroAdolescenteOne" OWNER TO postgres;

--
-- Name: cadastroAdolescenteOne_id_pessoa_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE "cadastroAdolescenteOne_id_pessoa_seq"
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE "cadastroAdolescenteOne_id_pessoa_seq" OWNER TO postgres;

--
-- Name: cadastroAdolescenteOne_id_pessoa_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE "cadastroAdolescenteOne_id_pessoa_seq" OWNED BY "cadastroAdolescenteOne".id_pessoa;


--
-- Name: colaboradores_id_colaborador_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE colaboradores_id_colaborador_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE colaboradores_id_colaborador_seq OWNER TO postgres;

--
-- Name: colaboradores_id_colaborador_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE colaboradores_id_colaborador_seq OWNED BY alunos.id_aluno;


--
-- Name: contribuintes; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE contribuintes (
    id_contribuintes bigint NOT NULL,
    num_docentes integer NOT NULL,
    num_bolsistas integer NOT NULL,
    num_voluntarios integer NOT NULL,
    num_atendidos integer NOT NULL,
    obs_contrib text NOT NULL
);


ALTER TABLE contribuintes OWNER TO postgres;

--
-- Name: contribuintes_id_contribuintes_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE contribuintes_id_contribuintes_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE contribuintes_id_contribuintes_seq OWNER TO postgres;

--
-- Name: contribuintes_id_contribuintes_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE contribuintes_id_contribuintes_seq OWNED BY contribuintes.id_contribuintes;


--
-- Name: instituicao; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE instituicao (
    id_instituicao bigint NOT NULL,
    nome citext NOT NULL,
    sigla citext NOT NULL,
    cnpj citext NOT NULL,
    representante text NOT NULL,
    endereco text NOT NULL,
    numero text NOT NULL,
    complemento text NOT NULL,
    cep text NOT NULL,
    municipio text NOT NULL,
    uf integer NOT NULL,
    telefone text NOT NULL,
    email text NOT NULL,
    sitio text NOT NULL,
    categoria_adm text NOT NULL,
    reitor text NOT NULL,
    credenciamento text NOT NULL
);


ALTER TABLE instituicao OWNER TO postgres;

--
-- Name: instituicao_id_instituicao_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE instituicao_id_instituicao_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE instituicao_id_instituicao_seq OWNER TO postgres;

--
-- Name: instituicao_id_instituicao_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE instituicao_id_instituicao_seq OWNED BY instituicao.id_instituicao;


--
-- Name: observacoes; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE observacoes (
    id_obs bigint NOT NULL,
    fk_pessoa integer NOT NULL,
    observacoes text NOT NULL
);


ALTER TABLE observacoes OWNER TO postgres;

--
-- Name: observacoes_id_obs_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE observacoes_id_obs_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE observacoes_id_obs_seq OWNER TO postgres;

--
-- Name: observacoes_id_obs_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE observacoes_id_obs_seq OWNED BY observacoes.id_obs;


--
-- Name: pessoa; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE pessoa (
    nome text NOT NULL,
    email text NOT NULL,
    telefone text NOT NULL,
    data_nascimento date NOT NULL,
    endereco text NOT NULL,
    status_cadastro integer NOT NULL,
    id_pessoa bigint NOT NULL
);


ALTER TABLE pessoa OWNER TO postgres;

--
-- Name: pessoa_id_pessoa_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE pessoa_id_pessoa_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE pessoa_id_pessoa_seq OWNER TO postgres;

--
-- Name: pessoa_id_pessoa_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE pessoa_id_pessoa_seq OWNED BY pessoa.id_pessoa;


--
-- Name: professores; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE professores (
    id_professor bigint NOT NULL,
    nome citext NOT NULL,
    cpf citext NOT NULL,
    nascimento date NOT NULL,
    sexo text NOT NULL,
    endereco text NOT NULL,
    numero text NOT NULL,
    complemento text NOT NULL,
    municipio text NOT NULL,
    uf integer NOT NULL,
    telefone text NOT NULL,
    email citext NOT NULL,
    matricula text NOT NULL,
    lattes text NOT NULL,
    departamento integer NOT NULL,
    situacao text NOT NULL,
    area text NOT NULL,
    cep text NOT NULL
);


ALTER TABLE professores OWNER TO postgres;

--
-- Name: professores_id_professor_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE professores_id_professor_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE professores_id_professor_seq OWNER TO postgres;

--
-- Name: professores_id_professor_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE professores_id_professor_seq OWNED BY professores.id_professor;


--
-- Name: projeto; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE projeto (
    id_projeto bigint NOT NULL,
    titulo citext NOT NULL,
    professor integer NOT NULL,
    descricao text NOT NULL,
    departamento integer NOT NULL,
    modalidade integer NOT NULL,
    publico_alvo text NOT NULL,
    justificativa text NOT NULL,
    objetivos text NOT NULL,
    metodologia text NOT NULL,
    cronograma text NOT NULL,
    data_inicio date NOT NULL,
    data_termino date NOT NULL,
    num_registro text NOT NULL
);


ALTER TABLE projeto OWNER TO postgres;

--
-- Name: projeto_colaboradores; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE projeto_colaboradores (
    id_projeto_colaborador bigint NOT NULL,
    fk_professor integer,
    fk_aluno integer,
    carga_horaria integer NOT NULL,
    data_entrada date NOT NULL,
    data_saida date,
    fk_voluntario integer
);


ALTER TABLE projeto_colaboradores OWNER TO postgres;

--
-- Name: projeto_colaboradores_id_projeto_colaborador_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE projeto_colaboradores_id_projeto_colaborador_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE projeto_colaboradores_id_projeto_colaborador_seq OWNER TO postgres;

--
-- Name: projeto_colaboradores_id_projeto_colaborador_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE projeto_colaboradores_id_projeto_colaborador_seq OWNED BY projeto_colaboradores.id_projeto_colaborador;


--
-- Name: projeto_id_projeto_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE projeto_id_projeto_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE projeto_id_projeto_seq OWNER TO postgres;

--
-- Name: projeto_id_projeto_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE projeto_id_projeto_seq OWNED BY projeto.id_projeto;


--
-- Name: tipo_usuario; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE tipo_usuario (
    id_tipo integer NOT NULL,
    tipo text NOT NULL
);


ALTER TABLE tipo_usuario OWNER TO postgres;

--
-- Name: usuario; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE usuario (
    id_usuario bigint NOT NULL,
    fk_pessoa integer NOT NULL,
    senha text NOT NULL,
    tipo_usuario integer NOT NULL
);


ALTER TABLE usuario OWNER TO postgres;

--
-- Name: usuario_id_usuario_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE usuario_id_usuario_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE usuario_id_usuario_seq OWNER TO postgres;

--
-- Name: usuario_id_usuario_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE usuario_id_usuario_seq OWNED BY usuario.id_usuario;


--
-- Name: alunos id_aluno; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY alunos ALTER COLUMN id_aluno SET DEFAULT nextval('colaboradores_id_colaborador_seq'::regclass);


--
-- Name: cadastroAdolescenteOne id_pessoa; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY "cadastroAdolescenteOne" ALTER COLUMN id_pessoa SET DEFAULT nextval('"cadastroAdolescenteOne_id_pessoa_seq"'::regclass);


--
-- Name: contribuintes id_contribuintes; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY contribuintes ALTER COLUMN id_contribuintes SET DEFAULT nextval('contribuintes_id_contribuintes_seq'::regclass);


--
-- Name: instituicao id_instituicao; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY instituicao ALTER COLUMN id_instituicao SET DEFAULT nextval('instituicao_id_instituicao_seq'::regclass);


--
-- Name: observacoes id_obs; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY observacoes ALTER COLUMN id_obs SET DEFAULT nextval('observacoes_id_obs_seq'::regclass);


--
-- Name: pessoa id_pessoa; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY pessoa ALTER COLUMN id_pessoa SET DEFAULT nextval('pessoa_id_pessoa_seq'::regclass);


--
-- Name: professores id_professor; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY professores ALTER COLUMN id_professor SET DEFAULT nextval('professores_id_professor_seq'::regclass);


--
-- Name: projeto id_projeto; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY projeto ALTER COLUMN id_projeto SET DEFAULT nextval('projeto_id_projeto_seq'::regclass);


--
-- Name: projeto_colaboradores id_projeto_colaborador; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY projeto_colaboradores ALTER COLUMN id_projeto_colaborador SET DEFAULT nextval('projeto_colaboradores_id_projeto_colaborador_seq'::regclass);


--
-- Name: usuario id_usuario; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY usuario ALTER COLUMN id_usuario SET DEFAULT nextval('usuario_id_usuario_seq'::regclass);


--
-- Name: cadastroAdolescente2 cadastroAdolescente2_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY "cadastroAdolescente2"
    ADD CONSTRAINT "cadastroAdolescente2_pkey" PRIMARY KEY (fk_pessoa);


--
-- Name: cadastroAdolescente3 cadastroAdolescente3_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY "cadastroAdolescente3"
    ADD CONSTRAINT "cadastroAdolescente3_pkey" PRIMARY KEY (fk_pessoa);


--
-- Name: cadastroAdolescente4 cadastroAdolescente4_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY "cadastroAdolescente4"
    ADD CONSTRAINT "cadastroAdolescente4_pkey" PRIMARY KEY (fk_pessoa);


--
-- Name: cadastroAdolescente5 cadastroAdolescente5_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY "cadastroAdolescente5"
    ADD CONSTRAINT "cadastroAdolescente5_pkey" PRIMARY KEY (fk_pessoa);


--
-- Name: cadastroAdolescente6 cadastroAdolescente6_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY "cadastroAdolescente6"
    ADD CONSTRAINT "cadastroAdolescente6_pkey" PRIMARY KEY (fk_pessoa);


--
-- Name: cadastroAdolescente7 cadastroAdolescente7_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY "cadastroAdolescente7"
    ADD CONSTRAINT "cadastroAdolescente7_pkey" PRIMARY KEY (fk_pessoa);


--
-- Name: cadastroAdolescenteOne cadastroAdolescenteOne_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY "cadastroAdolescenteOne"
    ADD CONSTRAINT "cadastroAdolescenteOne_pkey" PRIMARY KEY (id_pessoa);


--
-- Name: alunos colaboradores_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY alunos
    ADD CONSTRAINT colaboradores_pkey PRIMARY KEY (id_aluno);


--
-- Name: contribuintes contribuintes_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY contribuintes
    ADD CONSTRAINT contribuintes_pkey PRIMARY KEY (id_contribuintes);


--
-- Name: pessoa email; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY pessoa
    ADD CONSTRAINT email UNIQUE (email);


--
-- Name: instituicao instituicao_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY instituicao
    ADD CONSTRAINT instituicao_pkey PRIMARY KEY (id_instituicao);


--
-- Name: observacoes observacoes_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY observacoes
    ADD CONSTRAINT observacoes_pkey PRIMARY KEY (id_obs);


--
-- Name: pessoa pessoa_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY pessoa
    ADD CONSTRAINT pessoa_pkey PRIMARY KEY (id_pessoa);


--
-- Name: professores professores_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY professores
    ADD CONSTRAINT professores_pkey PRIMARY KEY (id_professor);


--
-- Name: projeto_colaboradores projeto_colaboradores_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY projeto_colaboradores
    ADD CONSTRAINT projeto_colaboradores_pkey PRIMARY KEY (id_projeto_colaborador);


--
-- Name: projeto projeto_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY projeto
    ADD CONSTRAINT projeto_pkey PRIMARY KEY (id_projeto);


--
-- Name: tipo_usuario tipo_usuario_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY tipo_usuario
    ADD CONSTRAINT tipo_usuario_pkey PRIMARY KEY (id_tipo);


--
-- Name: usuario usuario_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY usuario
    ADD CONSTRAINT usuario_pkey PRIMARY KEY (id_usuario);


--
-- Name: index_nome_adolescente; Type: INDEX; Schema: public; Owner: postgres
--

CREATE UNIQUE INDEX index_nome_adolescente ON "cadastroAdolescenteOne" USING btree (nome);


--
-- PostgreSQL database dump complete
--

