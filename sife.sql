--
-- PostgreSQL database dump
--

-- Dumped from database version 9.4.9
-- Dumped by pg_dump version 9.4.9
-- Started on 2018-10-22 15:17:02 CST

SET statement_timeout = 0;
SET lock_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;

--
-- TOC entry 1 (class 3079 OID 11861)
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: -
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- TOC entry 2311 (class 0 OID 0)
-- Dependencies: 1
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: -
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET search_path = public, pg_catalog;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- TOC entry 174 (class 1259 OID 39807)
-- Name: acl_classes; Type: TABLE; Schema: public; Owner: -; Tablespace: 
--

CREATE TABLE acl_classes (
    id integer NOT NULL,
    class_type character varying(200) NOT NULL
);


--
-- TOC entry 173 (class 1259 OID 39805)
-- Name: acl_classes_id_seq; Type: SEQUENCE; Schema: public; Owner: -
--

CREATE SEQUENCE acl_classes_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


--
-- TOC entry 2312 (class 0 OID 0)
-- Dependencies: 173
-- Name: acl_classes_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: -
--

ALTER SEQUENCE acl_classes_id_seq OWNED BY acl_classes.id;


--
-- TOC entry 181 (class 1259 OID 39842)
-- Name: acl_entries; Type: TABLE; Schema: public; Owner: -; Tablespace: 
--

CREATE TABLE acl_entries (
    id integer NOT NULL,
    class_id integer NOT NULL,
    object_identity_id integer,
    security_identity_id integer NOT NULL,
    field_name character varying(50) DEFAULT NULL::character varying,
    ace_order smallint NOT NULL,
    mask integer NOT NULL,
    granting boolean NOT NULL,
    granting_strategy character varying(30) NOT NULL,
    audit_success boolean NOT NULL,
    audit_failure boolean NOT NULL
);


--
-- TOC entry 180 (class 1259 OID 39840)
-- Name: acl_entries_id_seq; Type: SEQUENCE; Schema: public; Owner: -
--

CREATE SEQUENCE acl_entries_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


--
-- TOC entry 2313 (class 0 OID 0)
-- Dependencies: 180
-- Name: acl_entries_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: -
--

ALTER SEQUENCE acl_entries_id_seq OWNED BY acl_entries.id;


--
-- TOC entry 178 (class 1259 OID 39825)
-- Name: acl_object_identities; Type: TABLE; Schema: public; Owner: -; Tablespace: 
--

CREATE TABLE acl_object_identities (
    id integer NOT NULL,
    parent_object_identity_id integer,
    class_id integer NOT NULL,
    object_identifier character varying(100) NOT NULL,
    entries_inheriting boolean NOT NULL
);


--
-- TOC entry 177 (class 1259 OID 39823)
-- Name: acl_object_identities_id_seq; Type: SEQUENCE; Schema: public; Owner: -
--

CREATE SEQUENCE acl_object_identities_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


--
-- TOC entry 2314 (class 0 OID 0)
-- Dependencies: 177
-- Name: acl_object_identities_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: -
--

ALTER SEQUENCE acl_object_identities_id_seq OWNED BY acl_object_identities.id;


--
-- TOC entry 179 (class 1259 OID 39833)
-- Name: acl_object_identity_ancestors; Type: TABLE; Schema: public; Owner: -; Tablespace: 
--

CREATE TABLE acl_object_identity_ancestors (
    object_identity_id integer NOT NULL,
    ancestor_id integer NOT NULL
);


--
-- TOC entry 176 (class 1259 OID 39816)
-- Name: acl_security_identities; Type: TABLE; Schema: public; Owner: -; Tablespace: 
--

CREATE TABLE acl_security_identities (
    id integer NOT NULL,
    identifier character varying(200) NOT NULL,
    username boolean NOT NULL
);


--
-- TOC entry 175 (class 1259 OID 39814)
-- Name: acl_security_identities_id_seq; Type: SEQUENCE; Schema: public; Owner: -
--

CREATE SEQUENCE acl_security_identities_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


--
-- TOC entry 2315 (class 0 OID 0)
-- Dependencies: 175
-- Name: acl_security_identities_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: -
--

ALTER SEQUENCE acl_security_identities_id_seq OWNED BY acl_security_identities.id;


--
-- TOC entry 212 (class 1259 OID 82111)
-- Name: con_partidacontable; Type: TABLE; Schema: public; Owner: -; Tablespace: 
--

CREATE TABLE con_partidacontable (
    id integer NOT NULL,
    id_empresa integer NOT NULL,
    id_anio integer NOT NULL,
    id_tipo_partida integer NOT NULL,
    fecha date NOT NULL,
    numero integer NOT NULL,
    corr_anual integer,
    corr_mensual integer,
    corr_tipo integer,
    concepto character varying(150) NOT NULL,
    total_debe numeric(12,2),
    total_haber numeric(12,2),
    activo boolean,
    partida_inicial boolean,
    created_by integer NOT NULL,
    created_at timestamp without time zone NOT NULL,
    updated_by integer,
    updated_at timestamp without time zone
);


--
-- TOC entry 2316 (class 0 OID 0)
-- Dependencies: 212
-- Name: COLUMN con_partidacontable.numero; Type: COMMENT; Schema: public; Owner: -
--

COMMENT ON COLUMN con_partidacontable.numero IS 'numero de partida compuesto por origen de la empres ay un numero correlativo por empresa';


--
-- TOC entry 214 (class 1259 OID 82139)
-- Name: con_partidacontable_detalle; Type: TABLE; Schema: public; Owner: -; Tablespace: 
--

CREATE TABLE con_partidacontable_detalle (
    id integer NOT NULL,
    id_empresa integer NOT NULL,
    id_anio integer NOT NULL,
    id_partidacontable integer NOT NULL,
    id_cuentacontable integer NOT NULL,
    concepto character varying(200) NOT NULL,
    debe numeric(12,2),
    haber numeric(12,2),
    created_by integer NOT NULL,
    created_at timestamp without time zone NOT NULL,
    updated_by integer,
    updated_at timestamp without time zone
);


--
-- TOC entry 2317 (class 0 OID 0)
-- Dependencies: 214
-- Name: TABLE con_partidacontable_detalle; Type: COMMENT; Schema: public; Owner: -
--

COMMENT ON TABLE con_partidacontable_detalle IS 'detalle de las partidas contables';


--
-- TOC entry 213 (class 1259 OID 82137)
-- Name: con_partidacontable_detalle_id_seq; Type: SEQUENCE; Schema: public; Owner: -
--

CREATE SEQUENCE con_partidacontable_detalle_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


--
-- TOC entry 2318 (class 0 OID 0)
-- Dependencies: 213
-- Name: con_partidacontable_detalle_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: -
--

ALTER SEQUENCE con_partidacontable_detalle_id_seq OWNED BY con_partidacontable_detalle.id;


--
-- TOC entry 211 (class 1259 OID 82109)
-- Name: con_partidacontable_id_seq; Type: SEQUENCE; Schema: public; Owner: -
--

CREATE SEQUENCE con_partidacontable_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


--
-- TOC entry 2319 (class 0 OID 0)
-- Dependencies: 211
-- Name: con_partidacontable_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: -
--

ALTER SEQUENCE con_partidacontable_id_seq OWNED BY con_partidacontable.id;


--
-- TOC entry 188 (class 1259 OID 39981)
-- Name: ctl_anio; Type: TABLE; Schema: public; Owner: -; Tablespace: 
--

CREATE TABLE ctl_anio (
    id integer NOT NULL,
    nombre character varying(4)
);


--
-- TOC entry 187 (class 1259 OID 39979)
-- Name: ctl_anio_id_seq; Type: SEQUENCE; Schema: public; Owner: -
--

CREATE SEQUENCE ctl_anio_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


--
-- TOC entry 2320 (class 0 OID 0)
-- Dependencies: 187
-- Name: ctl_anio_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: -
--

ALTER SEQUENCE ctl_anio_id_seq OWNED BY ctl_anio.id;


--
-- TOC entry 192 (class 1259 OID 40036)
-- Name: ctl_departamento; Type: TABLE; Schema: public; Owner: -; Tablespace: 
--

CREATE TABLE ctl_departamento (
    id integer NOT NULL,
    id_pais integer NOT NULL,
    nombre character varying(80) NOT NULL
);


--
-- TOC entry 191 (class 1259 OID 40034)
-- Name: ctl_departamento_id_seq; Type: SEQUENCE; Schema: public; Owner: -
--

CREATE SEQUENCE ctl_departamento_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


--
-- TOC entry 2321 (class 0 OID 0)
-- Dependencies: 191
-- Name: ctl_departamento_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: -
--

ALTER SEQUENCE ctl_departamento_id_seq OWNED BY ctl_departamento.id;


--
-- TOC entry 190 (class 1259 OID 40028)
-- Name: ctl_empresa; Type: TABLE; Schema: public; Owner: -; Tablespace: 
--

CREATE TABLE ctl_empresa (
    id integer NOT NULL,
    origen character varying(3),
    nombre character varying(80) NOT NULL,
    registro character varying(15),
    nit character varying(14),
    consolidadora boolean,
    activo boolean,
    created_by integer NOT NULL,
    created_at timestamp without time zone NOT NULL,
    updated_by integer,
    updated_at timestamp without time zone,
    id_anioinicio integer NOT NULL
);


--
-- TOC entry 2322 (class 0 OID 0)
-- Dependencies: 190
-- Name: TABLE ctl_empresa; Type: COMMENT; Schema: public; Owner: -
--

COMMENT ON TABLE ctl_empresa IS 'Catalogos de empresas';


--
-- TOC entry 2323 (class 0 OID 0)
-- Dependencies: 190
-- Name: COLUMN ctl_empresa.origen; Type: COMMENT; Schema: public; Owner: -
--

COMMENT ON COLUMN ctl_empresa.origen IS 'origen de la empresa (similar al codigo)';


--
-- TOC entry 2324 (class 0 OID 0)
-- Dependencies: 190
-- Name: COLUMN ctl_empresa.nombre; Type: COMMENT; Schema: public; Owner: -
--

COMMENT ON COLUMN ctl_empresa.nombre IS 'nombre de la empresa';


--
-- TOC entry 2325 (class 0 OID 0)
-- Dependencies: 190
-- Name: COLUMN ctl_empresa.registro; Type: COMMENT; Schema: public; Owner: -
--

COMMENT ON COLUMN ctl_empresa.registro IS 'registro fiscal de la empresa';


--
-- TOC entry 2326 (class 0 OID 0)
-- Dependencies: 190
-- Name: COLUMN ctl_empresa.nit; Type: COMMENT; Schema: public; Owner: -
--

COMMENT ON COLUMN ctl_empresa.nit IS 'nit de la empresa';


--
-- TOC entry 2327 (class 0 OID 0)
-- Dependencies: 190
-- Name: COLUMN ctl_empresa.consolidadora; Type: COMMENT; Schema: public; Owner: -
--

COMMENT ON COLUMN ctl_empresa.consolidadora IS 'contabilidad consolidadora si o no';


--
-- TOC entry 2328 (class 0 OID 0)
-- Dependencies: 190
-- Name: COLUMN ctl_empresa.id_anioinicio; Type: COMMENT; Schema: public; Owner: -
--

COMMENT ON COLUMN ctl_empresa.id_anioinicio IS 'Año que la empresa inicio en el sistema, para crear perido contable inicial';


--
-- TOC entry 189 (class 1259 OID 40026)
-- Name: ctl_empresa_id_seq; Type: SEQUENCE; Schema: public; Owner: -
--

CREATE SEQUENCE ctl_empresa_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


--
-- TOC entry 2329 (class 0 OID 0)
-- Dependencies: 189
-- Name: ctl_empresa_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: -
--

ALTER SEQUENCE ctl_empresa_id_seq OWNED BY ctl_empresa.id;


--
-- TOC entry 210 (class 1259 OID 82074)
-- Name: ctl_forma_partida; Type: TABLE; Schema: public; Owner: -; Tablespace: 
--

CREATE TABLE ctl_forma_partida (
    id integer NOT NULL,
    nombre character varying(40) NOT NULL
);


--
-- TOC entry 2330 (class 0 OID 0)
-- Dependencies: 210
-- Name: COLUMN ctl_forma_partida.id; Type: COMMENT; Schema: public; Owner: -
--

COMMENT ON COLUMN ctl_forma_partida.id IS 'almacena la forma de la partida si contable, bancaria, remesas';


--
-- TOC entry 209 (class 1259 OID 82072)
-- Name: ctl_forma_partida_id_seq; Type: SEQUENCE; Schema: public; Owner: -
--

CREATE SEQUENCE ctl_forma_partida_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


--
-- TOC entry 2331 (class 0 OID 0)
-- Dependencies: 209
-- Name: ctl_forma_partida_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: -
--

ALTER SEQUENCE ctl_forma_partida_id_seq OWNED BY ctl_forma_partida.id;


--
-- TOC entry 198 (class 1259 OID 40141)
-- Name: ctl_mes; Type: TABLE; Schema: public; Owner: -; Tablespace: 
--

CREATE TABLE ctl_mes (
    id integer NOT NULL,
    nombre character varying(10)
);


--
-- TOC entry 197 (class 1259 OID 40139)
-- Name: ctl_mes_id_seq; Type: SEQUENCE; Schema: public; Owner: -
--

CREATE SEQUENCE ctl_mes_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


--
-- TOC entry 2332 (class 0 OID 0)
-- Dependencies: 197
-- Name: ctl_mes_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: -
--

ALTER SEQUENCE ctl_mes_id_seq OWNED BY ctl_mes.id;


--
-- TOC entry 194 (class 1259 OID 40044)
-- Name: ctl_municipio; Type: TABLE; Schema: public; Owner: -; Tablespace: 
--

CREATE TABLE ctl_municipio (
    id integer NOT NULL,
    id_departamento integer NOT NULL,
    nombre character varying(80) NOT NULL
);


--
-- TOC entry 193 (class 1259 OID 40042)
-- Name: ctl_municipio_id_seq; Type: SEQUENCE; Schema: public; Owner: -
--

CREATE SEQUENCE ctl_municipio_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


--
-- TOC entry 2333 (class 0 OID 0)
-- Dependencies: 193
-- Name: ctl_municipio_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: -
--

ALTER SEQUENCE ctl_municipio_id_seq OWNED BY ctl_municipio.id;


--
-- TOC entry 204 (class 1259 OID 81990)
-- Name: ctl_nivel_cuentacontable; Type: TABLE; Schema: public; Owner: -; Tablespace: 
--

CREATE TABLE ctl_nivel_cuentacontable (
    id integer NOT NULL,
    nombre character varying(30) NOT NULL,
    activo boolean
);


--
-- TOC entry 2334 (class 0 OID 0)
-- Dependencies: 204
-- Name: TABLE ctl_nivel_cuentacontable; Type: COMMENT; Schema: public; Owner: -
--

COMMENT ON TABLE ctl_nivel_cuentacontable IS 'Diferentes niveles de cuentas contables para diferencias de rubros, mayor y subcuentas';


--
-- TOC entry 203 (class 1259 OID 81988)
-- Name: ctl_nivel_cuentacontable_id_seq; Type: SEQUENCE; Schema: public; Owner: -
--

CREATE SEQUENCE ctl_nivel_cuentacontable_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


--
-- TOC entry 2335 (class 0 OID 0)
-- Dependencies: 203
-- Name: ctl_nivel_cuentacontable_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: -
--

ALTER SEQUENCE ctl_nivel_cuentacontable_id_seq OWNED BY ctl_nivel_cuentacontable.id;


--
-- TOC entry 196 (class 1259 OID 40126)
-- Name: ctl_pais; Type: TABLE; Schema: public; Owner: -; Tablespace: 
--

CREATE TABLE ctl_pais (
    id integer NOT NULL,
    nombre character varying(80) NOT NULL
);


--
-- TOC entry 195 (class 1259 OID 40124)
-- Name: ctl_pais_id_seq; Type: SEQUENCE; Schema: public; Owner: -
--

CREATE SEQUENCE ctl_pais_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


--
-- TOC entry 2336 (class 0 OID 0)
-- Dependencies: 195
-- Name: ctl_pais_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: -
--

ALTER SEQUENCE ctl_pais_id_seq OWNED BY ctl_pais.id;


--
-- TOC entry 200 (class 1259 OID 40149)
-- Name: ctl_periodocontable; Type: TABLE; Schema: public; Owner: -; Tablespace: 
--

CREATE TABLE ctl_periodocontable (
    id_anio integer NOT NULL,
    id_mes integer NOT NULL,
    id integer NOT NULL,
    id_empresa integer NOT NULL,
    activo boolean
);


--
-- TOC entry 199 (class 1259 OID 40147)
-- Name: ctl_periodocontable_id_seq; Type: SEQUENCE; Schema: public; Owner: -
--

CREATE SEQUENCE ctl_periodocontable_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


--
-- TOC entry 2337 (class 0 OID 0)
-- Dependencies: 199
-- Name: ctl_periodocontable_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: -
--

ALTER SEQUENCE ctl_periodocontable_id_seq OWNED BY ctl_periodocontable.id;


--
-- TOC entry 202 (class 1259 OID 81972)
-- Name: ctl_tipo_cuentacontable; Type: TABLE; Schema: public; Owner: -; Tablespace: 
--

CREATE TABLE ctl_tipo_cuentacontable (
    id integer NOT NULL,
    codigo character varying(1),
    nombre character varying(50),
    activo boolean
);


--
-- TOC entry 2338 (class 0 OID 0)
-- Dependencies: 202
-- Name: TABLE ctl_tipo_cuentacontable; Type: COMMENT; Schema: public; Owner: -
--

COMMENT ON TABLE ctl_tipo_cuentacontable IS 'Tipos de cuenta creadas para cada periodo de cada empresa.';


--
-- TOC entry 201 (class 1259 OID 81970)
-- Name: ctl_tipo_cuentacontable_id_seq; Type: SEQUENCE; Schema: public; Owner: -
--

CREATE SEQUENCE ctl_tipo_cuentacontable_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


--
-- TOC entry 2339 (class 0 OID 0)
-- Dependencies: 201
-- Name: ctl_tipo_cuentacontable_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: -
--

ALTER SEQUENCE ctl_tipo_cuentacontable_id_seq OWNED BY ctl_tipo_cuentacontable.id;


--
-- TOC entry 208 (class 1259 OID 82035)
-- Name: ctl_tipo_partida; Type: TABLE; Schema: public; Owner: -; Tablespace: 
--

CREATE TABLE ctl_tipo_partida (
    id integer NOT NULL,
    nombre character varying(40) NOT NULL,
    id_forma_partida integer NOT NULL
);


--
-- TOC entry 2340 (class 0 OID 0)
-- Dependencies: 208
-- Name: TABLE ctl_tipo_partida; Type: COMMENT; Schema: public; Owner: -
--

COMMENT ON TABLE ctl_tipo_partida IS 'especifica los tipos de partidas contables';


--
-- TOC entry 2341 (class 0 OID 0)
-- Dependencies: 208
-- Name: COLUMN ctl_tipo_partida.id_forma_partida; Type: COMMENT; Schema: public; Owner: -
--

COMMENT ON COLUMN ctl_tipo_partida.id_forma_partida IS 'fk de forma de partida';


--
-- TOC entry 207 (class 1259 OID 82033)
-- Name: ctl_tipo_partida_id_seq; Type: SEQUENCE; Schema: public; Owner: -
--

CREATE SEQUENCE ctl_tipo_partida_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


--
-- TOC entry 2342 (class 0 OID 0)
-- Dependencies: 207
-- Name: ctl_tipo_partida_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: -
--

ALTER SEQUENCE ctl_tipo_partida_id_seq OWNED BY ctl_tipo_partida.id;


--
-- TOC entry 186 (class 1259 OID 39927)
-- Name: fos_user_group; Type: TABLE; Schema: public; Owner: -; Tablespace: 
--

CREATE TABLE fos_user_group (
    id integer NOT NULL,
    name character varying(255) NOT NULL,
    roles text NOT NULL
);


--
-- TOC entry 2343 (class 0 OID 0)
-- Dependencies: 186
-- Name: COLUMN fos_user_group.roles; Type: COMMENT; Schema: public; Owner: -
--

COMMENT ON COLUMN fos_user_group.roles IS '(DC2Type:array)';


--
-- TOC entry 183 (class 1259 OID 39886)
-- Name: fos_user_group_id_seq; Type: SEQUENCE; Schema: public; Owner: -
--

CREATE SEQUENCE fos_user_group_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


--
-- TOC entry 184 (class 1259 OID 39888)
-- Name: fos_user_user; Type: TABLE; Schema: public; Owner: -; Tablespace: 
--

CREATE TABLE fos_user_user (
    id integer NOT NULL,
    username character varying(255) NOT NULL,
    username_canonical character varying(255) NOT NULL,
    email character varying(255) NOT NULL,
    email_canonical character varying(255) NOT NULL,
    enabled boolean NOT NULL,
    salt character varying(255) NOT NULL,
    password character varying(255) NOT NULL,
    last_login timestamp(0) without time zone DEFAULT NULL::timestamp without time zone,
    locked boolean NOT NULL,
    expired boolean NOT NULL,
    expires_at timestamp(0) without time zone DEFAULT NULL::timestamp without time zone,
    confirmation_token character varying(255) DEFAULT NULL::character varying,
    password_requested_at timestamp(0) without time zone DEFAULT NULL::timestamp without time zone,
    roles text NOT NULL,
    credentials_expired boolean NOT NULL,
    credentials_expire_at timestamp(0) without time zone DEFAULT NULL::timestamp without time zone,
    created_at timestamp(0) without time zone NOT NULL,
    updated_at timestamp(0) without time zone NOT NULL,
    date_of_birth timestamp(0) without time zone DEFAULT NULL::timestamp without time zone,
    firstname character varying(64) DEFAULT NULL::character varying,
    lastname character varying(64) DEFAULT NULL::character varying,
    website character varying(64) DEFAULT NULL::character varying,
    biography character varying(1000) DEFAULT NULL::character varying,
    gender character varying(1) DEFAULT NULL::character varying,
    locale character varying(8) DEFAULT NULL::character varying,
    timezone character varying(64) DEFAULT NULL::character varying,
    phone character varying(64) DEFAULT NULL::character varying,
    facebook_uid character varying(255) DEFAULT NULL::character varying,
    facebook_name character varying(255) DEFAULT NULL::character varying,
    facebook_data text,
    twitter_uid character varying(255) DEFAULT NULL::character varying,
    twitter_name character varying(255) DEFAULT NULL::character varying,
    twitter_data text,
    gplus_uid character varying(255) DEFAULT NULL::character varying,
    gplus_name character varying(255) DEFAULT NULL::character varying,
    gplus_data text,
    token character varying(255) DEFAULT NULL::character varying,
    two_step_code character varying(255) DEFAULT NULL::character varying
);


--
-- TOC entry 2344 (class 0 OID 0)
-- Dependencies: 184
-- Name: COLUMN fos_user_user.roles; Type: COMMENT; Schema: public; Owner: -
--

COMMENT ON COLUMN fos_user_user.roles IS '(DC2Type:array)';


--
-- TOC entry 2345 (class 0 OID 0)
-- Dependencies: 184
-- Name: COLUMN fos_user_user.facebook_data; Type: COMMENT; Schema: public; Owner: -
--

COMMENT ON COLUMN fos_user_user.facebook_data IS '(DC2Type:json)';


--
-- TOC entry 2346 (class 0 OID 0)
-- Dependencies: 184
-- Name: COLUMN fos_user_user.twitter_data; Type: COMMENT; Schema: public; Owner: -
--

COMMENT ON COLUMN fos_user_user.twitter_data IS '(DC2Type:json)';


--
-- TOC entry 2347 (class 0 OID 0)
-- Dependencies: 184
-- Name: COLUMN fos_user_user.gplus_data; Type: COMMENT; Schema: public; Owner: -
--

COMMENT ON COLUMN fos_user_user.gplus_data IS '(DC2Type:json)';


--
-- TOC entry 185 (class 1259 OID 39920)
-- Name: fos_user_user_group; Type: TABLE; Schema: public; Owner: -; Tablespace: 
--

CREATE TABLE fos_user_user_group (
    user_id integer NOT NULL,
    group_id integer NOT NULL
);


--
-- TOC entry 182 (class 1259 OID 39884)
-- Name: fos_user_user_id_seq; Type: SEQUENCE; Schema: public; Owner: -
--

CREATE SEQUENCE fos_user_user_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


--
-- TOC entry 206 (class 1259 OID 82000)
-- Name: mnt_cuentacontable; Type: TABLE; Schema: public; Owner: -; Tablespace: 
--

CREATE TABLE mnt_cuentacontable (
    id integer NOT NULL,
    id_empresa integer NOT NULL,
    id_anio integer NOT NULL,
    id_tipo_cuentacontable integer NOT NULL,
    id_nivel_cuentacontable integer NOT NULL,
    id_cuentacontable_depende integer,
    cuenta character varying(20) NOT NULL,
    nombre character varying(50) NOT NULL,
    activo boolean NOT NULL,
    created_by integer NOT NULL,
    created_at timestamp without time zone NOT NULL,
    updated_by integer,
    updated_at timestamp without time zone
);


--
-- TOC entry 2348 (class 0 OID 0)
-- Dependencies: 206
-- Name: COLUMN mnt_cuentacontable.id_tipo_cuentacontable; Type: COMMENT; Schema: public; Owner: -
--

COMMENT ON COLUMN mnt_cuentacontable.id_tipo_cuentacontable IS 'tipo de cuenta en base al efecto activo, pasivo. etc';


--
-- TOC entry 2349 (class 0 OID 0)
-- Dependencies: 206
-- Name: COLUMN mnt_cuentacontable.id_nivel_cuentacontable; Type: COMMENT; Schema: public; Owner: -
--

COMMENT ON COLUMN mnt_cuentacontable.id_nivel_cuentacontable IS 'Nivel en base al tipo de cuenta';


--
-- TOC entry 2350 (class 0 OID 0)
-- Dependencies: 206
-- Name: COLUMN mnt_cuentacontable.id_cuentacontable_depende; Type: COMMENT; Schema: public; Owner: -
--

COMMENT ON COLUMN mnt_cuentacontable.id_cuentacontable_depende IS 'cuenta de la que depende';


--
-- TOC entry 205 (class 1259 OID 81998)
-- Name: mnt_cuentacontable_id_seq; Type: SEQUENCE; Schema: public; Owner: -
--

CREATE SEQUENCE mnt_cuentacontable_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


--
-- TOC entry 2351 (class 0 OID 0)
-- Dependencies: 205
-- Name: mnt_cuentacontable_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: -
--

ALTER SEQUENCE mnt_cuentacontable_id_seq OWNED BY mnt_cuentacontable.id;


--
-- TOC entry 2009 (class 2604 OID 39810)
-- Name: id; Type: DEFAULT; Schema: public; Owner: -
--

ALTER TABLE ONLY acl_classes ALTER COLUMN id SET DEFAULT nextval('acl_classes_id_seq'::regclass);


--
-- TOC entry 2012 (class 2604 OID 39845)
-- Name: id; Type: DEFAULT; Schema: public; Owner: -
--

ALTER TABLE ONLY acl_entries ALTER COLUMN id SET DEFAULT nextval('acl_entries_id_seq'::regclass);


--
-- TOC entry 2011 (class 2604 OID 39828)
-- Name: id; Type: DEFAULT; Schema: public; Owner: -
--

ALTER TABLE ONLY acl_object_identities ALTER COLUMN id SET DEFAULT nextval('acl_object_identities_id_seq'::regclass);


--
-- TOC entry 2010 (class 2604 OID 39819)
-- Name: id; Type: DEFAULT; Schema: public; Owner: -
--

ALTER TABLE ONLY acl_security_identities ALTER COLUMN id SET DEFAULT nextval('acl_security_identities_id_seq'::regclass);


--
-- TOC entry 2048 (class 2604 OID 82114)
-- Name: id; Type: DEFAULT; Schema: public; Owner: -
--

ALTER TABLE ONLY con_partidacontable ALTER COLUMN id SET DEFAULT nextval('con_partidacontable_id_seq'::regclass);


--
-- TOC entry 2049 (class 2604 OID 82142)
-- Name: id; Type: DEFAULT; Schema: public; Owner: -
--

ALTER TABLE ONLY con_partidacontable_detalle ALTER COLUMN id SET DEFAULT nextval('con_partidacontable_detalle_id_seq'::regclass);


--
-- TOC entry 2036 (class 2604 OID 39984)
-- Name: id; Type: DEFAULT; Schema: public; Owner: -
--

ALTER TABLE ONLY ctl_anio ALTER COLUMN id SET DEFAULT nextval('ctl_anio_id_seq'::regclass);


--
-- TOC entry 2038 (class 2604 OID 40039)
-- Name: id; Type: DEFAULT; Schema: public; Owner: -
--

ALTER TABLE ONLY ctl_departamento ALTER COLUMN id SET DEFAULT nextval('ctl_departamento_id_seq'::regclass);


--
-- TOC entry 2037 (class 2604 OID 40031)
-- Name: id; Type: DEFAULT; Schema: public; Owner: -
--

ALTER TABLE ONLY ctl_empresa ALTER COLUMN id SET DEFAULT nextval('ctl_empresa_id_seq'::regclass);


--
-- TOC entry 2047 (class 2604 OID 82077)
-- Name: id; Type: DEFAULT; Schema: public; Owner: -
--

ALTER TABLE ONLY ctl_forma_partida ALTER COLUMN id SET DEFAULT nextval('ctl_forma_partida_id_seq'::regclass);


--
-- TOC entry 2041 (class 2604 OID 40144)
-- Name: id; Type: DEFAULT; Schema: public; Owner: -
--

ALTER TABLE ONLY ctl_mes ALTER COLUMN id SET DEFAULT nextval('ctl_mes_id_seq'::regclass);


--
-- TOC entry 2039 (class 2604 OID 40047)
-- Name: id; Type: DEFAULT; Schema: public; Owner: -
--

ALTER TABLE ONLY ctl_municipio ALTER COLUMN id SET DEFAULT nextval('ctl_municipio_id_seq'::regclass);


--
-- TOC entry 2044 (class 2604 OID 81993)
-- Name: id; Type: DEFAULT; Schema: public; Owner: -
--

ALTER TABLE ONLY ctl_nivel_cuentacontable ALTER COLUMN id SET DEFAULT nextval('ctl_nivel_cuentacontable_id_seq'::regclass);


--
-- TOC entry 2040 (class 2604 OID 40129)
-- Name: id; Type: DEFAULT; Schema: public; Owner: -
--

ALTER TABLE ONLY ctl_pais ALTER COLUMN id SET DEFAULT nextval('ctl_pais_id_seq'::regclass);


--
-- TOC entry 2042 (class 2604 OID 40152)
-- Name: id; Type: DEFAULT; Schema: public; Owner: -
--

ALTER TABLE ONLY ctl_periodocontable ALTER COLUMN id SET DEFAULT nextval('ctl_periodocontable_id_seq'::regclass);


--
-- TOC entry 2043 (class 2604 OID 81975)
-- Name: id; Type: DEFAULT; Schema: public; Owner: -
--

ALTER TABLE ONLY ctl_tipo_cuentacontable ALTER COLUMN id SET DEFAULT nextval('ctl_tipo_cuentacontable_id_seq'::regclass);


--
-- TOC entry 2046 (class 2604 OID 82038)
-- Name: id; Type: DEFAULT; Schema: public; Owner: -
--

ALTER TABLE ONLY ctl_tipo_partida ALTER COLUMN id SET DEFAULT nextval('ctl_tipo_partida_id_seq'::regclass);


--
-- TOC entry 2045 (class 2604 OID 82003)
-- Name: id; Type: DEFAULT; Schema: public; Owner: -
--

ALTER TABLE ONLY mnt_cuentacontable ALTER COLUMN id SET DEFAULT nextval('mnt_cuentacontable_id_seq'::regclass);


--
-- TOC entry 2263 (class 0 OID 39807)
-- Dependencies: 174
-- Data for Name: acl_classes; Type: TABLE DATA; Schema: public; Owner: -
--

COPY acl_classes (id, class_type) FROM stdin;
\.


--
-- TOC entry 2352 (class 0 OID 0)
-- Dependencies: 173
-- Name: acl_classes_id_seq; Type: SEQUENCE SET; Schema: public; Owner: -
--

SELECT pg_catalog.setval('acl_classes_id_seq', 1, false);


--
-- TOC entry 2270 (class 0 OID 39842)
-- Dependencies: 181
-- Data for Name: acl_entries; Type: TABLE DATA; Schema: public; Owner: -
--

COPY acl_entries (id, class_id, object_identity_id, security_identity_id, field_name, ace_order, mask, granting, granting_strategy, audit_success, audit_failure) FROM stdin;
\.


--
-- TOC entry 2353 (class 0 OID 0)
-- Dependencies: 180
-- Name: acl_entries_id_seq; Type: SEQUENCE SET; Schema: public; Owner: -
--

SELECT pg_catalog.setval('acl_entries_id_seq', 1, false);


--
-- TOC entry 2267 (class 0 OID 39825)
-- Dependencies: 178
-- Data for Name: acl_object_identities; Type: TABLE DATA; Schema: public; Owner: -
--

COPY acl_object_identities (id, parent_object_identity_id, class_id, object_identifier, entries_inheriting) FROM stdin;
\.


--
-- TOC entry 2354 (class 0 OID 0)
-- Dependencies: 177
-- Name: acl_object_identities_id_seq; Type: SEQUENCE SET; Schema: public; Owner: -
--

SELECT pg_catalog.setval('acl_object_identities_id_seq', 1, false);


--
-- TOC entry 2268 (class 0 OID 39833)
-- Dependencies: 179
-- Data for Name: acl_object_identity_ancestors; Type: TABLE DATA; Schema: public; Owner: -
--

COPY acl_object_identity_ancestors (object_identity_id, ancestor_id) FROM stdin;
\.


--
-- TOC entry 2265 (class 0 OID 39816)
-- Dependencies: 176
-- Data for Name: acl_security_identities; Type: TABLE DATA; Schema: public; Owner: -
--

COPY acl_security_identities (id, identifier, username) FROM stdin;
\.


--
-- TOC entry 2355 (class 0 OID 0)
-- Dependencies: 175
-- Name: acl_security_identities_id_seq; Type: SEQUENCE SET; Schema: public; Owner: -
--

SELECT pg_catalog.setval('acl_security_identities_id_seq', 1, false);


--
-- TOC entry 2301 (class 0 OID 82111)
-- Dependencies: 212
-- Data for Name: con_partidacontable; Type: TABLE DATA; Schema: public; Owner: -
--

COPY con_partidacontable (id, id_empresa, id_anio, id_tipo_partida, fecha, numero, corr_anual, corr_mensual, corr_tipo, concepto, total_debe, total_haber, activo, partida_inicial, created_by, created_at, updated_by, updated_at) FROM stdin;
\.


--
-- TOC entry 2303 (class 0 OID 82139)
-- Dependencies: 214
-- Data for Name: con_partidacontable_detalle; Type: TABLE DATA; Schema: public; Owner: -
--

COPY con_partidacontable_detalle (id, id_empresa, id_anio, id_partidacontable, id_cuentacontable, concepto, debe, haber, created_by, created_at, updated_by, updated_at) FROM stdin;
\.


--
-- TOC entry 2356 (class 0 OID 0)
-- Dependencies: 213
-- Name: con_partidacontable_detalle_id_seq; Type: SEQUENCE SET; Schema: public; Owner: -
--

SELECT pg_catalog.setval('con_partidacontable_detalle_id_seq', 1, false);


--
-- TOC entry 2357 (class 0 OID 0)
-- Dependencies: 211
-- Name: con_partidacontable_id_seq; Type: SEQUENCE SET; Schema: public; Owner: -
--

SELECT pg_catalog.setval('con_partidacontable_id_seq', 1, false);


--
-- TOC entry 2277 (class 0 OID 39981)
-- Dependencies: 188
-- Data for Name: ctl_anio; Type: TABLE DATA; Schema: public; Owner: -
--

COPY ctl_anio (id, nombre) FROM stdin;
1	2018
\.


--
-- TOC entry 2358 (class 0 OID 0)
-- Dependencies: 187
-- Name: ctl_anio_id_seq; Type: SEQUENCE SET; Schema: public; Owner: -
--

SELECT pg_catalog.setval('ctl_anio_id_seq', 1, true);


--
-- TOC entry 2281 (class 0 OID 40036)
-- Dependencies: 192
-- Data for Name: ctl_departamento; Type: TABLE DATA; Schema: public; Owner: -
--

COPY ctl_departamento (id, id_pais, nombre) FROM stdin;
1	1	AHUACHAPAN
2	1	SANTA ANA
3	1	SONSONATE
4	1	CHALATENANGO
5	1	LA LIBERTAD
6	1	SAN SALVADOR
7	1	Cuscatlan 
8	1	LA PAZ
9	1	CABAÑAS
10	1	SAN VICENTE
11	1	USULUTAN
12	1	SAN MIGUEL
13	1	MORAZAN
14	1	LA UNION
\.


--
-- TOC entry 2359 (class 0 OID 0)
-- Dependencies: 191
-- Name: ctl_departamento_id_seq; Type: SEQUENCE SET; Schema: public; Owner: -
--

SELECT pg_catalog.setval('ctl_departamento_id_seq', 1, false);


--
-- TOC entry 2279 (class 0 OID 40028)
-- Dependencies: 190
-- Data for Name: ctl_empresa; Type: TABLE DATA; Schema: public; Owner: -
--

COPY ctl_empresa (id, origen, nombre, registro, nit, consolidadora, activo, created_by, created_at, updated_by, updated_at, id_anioinicio) FROM stdin;
1	EMC	ASOCIACION EQUIPO MAIZ CONSOLIDADORA	107846-1	06140904971063	t	t	4	2018-10-20 05:28:13	\N	\N	1
\.


--
-- TOC entry 2360 (class 0 OID 0)
-- Dependencies: 189
-- Name: ctl_empresa_id_seq; Type: SEQUENCE SET; Schema: public; Owner: -
--

SELECT pg_catalog.setval('ctl_empresa_id_seq', 1, true);


--
-- TOC entry 2299 (class 0 OID 82074)
-- Dependencies: 210
-- Data for Name: ctl_forma_partida; Type: TABLE DATA; Schema: public; Owner: -
--

COPY ctl_forma_partida (id, nombre) FROM stdin;
1	PARTIDAS CONTABLES
2	PARTIDAS BANCARIAS
3	PARTIDAS REMESAS
\.


--
-- TOC entry 2361 (class 0 OID 0)
-- Dependencies: 209
-- Name: ctl_forma_partida_id_seq; Type: SEQUENCE SET; Schema: public; Owner: -
--

SELECT pg_catalog.setval('ctl_forma_partida_id_seq', 3, true);


--
-- TOC entry 2287 (class 0 OID 40141)
-- Dependencies: 198
-- Data for Name: ctl_mes; Type: TABLE DATA; Schema: public; Owner: -
--

COPY ctl_mes (id, nombre) FROM stdin;
1	ENERO
2	FEBRERO
3	MARZO
4	ABRIL
5	MAYO
6	JUNIO
7	JULIO
8	AGOSTO
9	SEPTIEMBRE
10	OCTUBRE
11	NOVIEMBRE
12	DICIEMBRE
\.


--
-- TOC entry 2362 (class 0 OID 0)
-- Dependencies: 197
-- Name: ctl_mes_id_seq; Type: SEQUENCE SET; Schema: public; Owner: -
--

SELECT pg_catalog.setval('ctl_mes_id_seq', 12, true);


--
-- TOC entry 2283 (class 0 OID 40044)
-- Dependencies: 194
-- Data for Name: ctl_municipio; Type: TABLE DATA; Schema: public; Owner: -
--

COPY ctl_municipio (id, id_departamento, nombre) FROM stdin;
1	1	AHUACHAPAN
2	1	APANECA
3	1	ATIQUIZAYA
4	1	CONCEPCION DE ATACO
5	1	EL REFUGIO
6	1	GUAYMANGO 
7	1	JUJUTLA
8	1	SAN FRANCISCO MENENDEZ
9	1	SAN LORENZO
10	1	SAN PEDRO PUXTLA
11	1	TACUBA
12	1	TURIN
13	2	CANDELARIA DE LA FRONTERA
14	2	COATEPEQUE
15	2	CHALCHUAPA
16	2	EL CONGO
17	2	EL PORVENIR
18	2	MASAHUAT
19	2	METAPAN
20	2	SAN ANTONIO PAJONAL
21	2	SAN SEBASTIAN SALITRILLO
22	2	SANTA ANA
23	2	SANTA ROSA GUACHIPILIN
24	2	SANTIAGO DE LA FRONTERA
25	2	TEXISTEPEQUE
26	3	ACAJUTLA
27	3	ARMENIA
28	3	CALUCO
29	3	CUISNAHUAT
30	3	SANTA ISABEL ISHUATAN
31	3	IZALCO
32	3	JUAYUA
33	3	NAHUIZALCO
34	3	NAHUILINGO
35	3	SALCOATITAN
36	3	SAN ANTONIO DEL MONTE
37	3	SAN JULIAN
38	3	SANTA CATARINA MASAHUAT
39	3	SANTO DOMINGO DE GUZMAN
40	3	SONSONATE
41	3	SONZACATE 
42	4	AGUA CALIENTE
43	4	ARCATAO
44	4	AZACUALPA
45	4	CITALA
46	4	COMALAPA
47	4	CONCEPCION QUEZALTEPEQUE
48	4	CHALATENANGO
49	4	DULCE NOMBRE DE MARIA 
50	4	EL CARRIZAL 
51	4	EL PARAISO 
52	4	LA LAGUNA 
53	4	LA PALMA 
54	4	LA REINA 
55	4	LAS VUELTAS 
56	4	NOMBRE DE JESUS 
57	4	NUEVA CONCEPCION 
58	4	NUEVA TRINIDAD 
59	4	OJOS DE AGUA 
60	4	POTONICO 
61	4	SAN ANTONIO DE LA CRUZ 
62	4	SAN ANTONIO LOS RANCHOS 
63	4	SAN FERNANDO 
64	4	SAN FRANCISCO LEMPA 
65	4	SAN FRANCISCO MORAZAN 
66	4	SAN IGNACIO 
67	4	SAN ISIDRO LABRADOR 
68	4	SAN JOSE CANCASQUE 
69	4	LAS FLORES 
70	4	SAN LUIS DEL CARMEN 
71	4	SAN MIGUEL DE MERCEDES 
72	4	SAN RAFAEL 
73	4	SANTA RITA 
74	4	TEJUTLA 
75	5	ANTIGUO CUSCATLAN 
76	5	CIUDAD ARCE 
77	5	COLON 
78	5	COMASAGUA 
79	5	CHILTIUPAN 
80	5	HUIZUCAR 
81	5	JAYAQUE 
82	5	JICALAPA 
83	5	PUERTO DE LA LIBERTAD 
84	5	NUEVO CUSCATLAN 
85	5	NUEVA SAN SALVADOR 
86	5	QUEZALTEPEQUE 
87	5	SACACOYO 
88	5	SAN JOSE VILLANUEVA 
89	5	SAN JUAN OPICO 
90	5	SAN MATIAS 
91	5	SAN PABLO TACACHICO 
92	5	TAMANIQUE 
93	5	TALNIQUE 
94	5	TEOTEPEQUE 
95	5	TEPECOYO 
96	5	ZARAGOZA 
97	6	AGUILARES 
98	6	APOPA 
99	6	AYUTUXTEPEQUE 
100	6	CUSCATANCINGO 
101	6	desconocido 
102	6	GUAZAPA 
103	6	ILOPANGO 
104	6	MEJICANOS 
105	6	NEJAPA 
106	6	PANCHIMALCO 
107	6	ROSARIO DE MORA 
108	6	SAN MARCOS 
109	6	SAN MARTIN 
110	6	SAN SALVADOR 
111	6	SANTIAGO TEXACUANGOS 
112	6	SANTO TOMAS 
113	6	SOYAPANGO 
114	6	TONACATEPEQUE 
115	6	DELGADO 
116	7	CANDELARIA 
117	7	COJUTEPEQUE 
118	7	EL CARMEN 
119	7	EL ROSARIO 
120	7	MONTE SAN JUAN 
121	7	ORATORIO DE CONCEPCION 
122	7	SAN BARTOLOME PERULAPIA 
123	7	SAN CRISTOBAL 
124	7	SAN JOSE GUAYABAL 
125	7	SAN PEDRO PERULAPAN 
126	7	SAN RAFAEL CEDROS 
127	7	SAN RAMON 
128	7	SANTA CRUZ ANALQUITO 
129	7	SANTA CRUZ MICHAPA 
130	7	SUCHITOTO 
131	7	TENANCINGO 
132	8	CUYULTITAN 
133	8	EL ROSARIO 
134	8	JERUSALEN 
135	8	MERCEDES DE LA CEIBA 
136	8	OLOCUILTA 
137	8	PARAISO DE OSORIO 
138	8	SAN ANTONIO MASAHUAT 
139	8	SAN EMIGDIO 
140	8	SAN FRANCISCO CHINAMECA 
141	8	SAN JUAN NONUALCO 
142	8	SAN JUAN TALPA 
143	8	SAN JUAN TEPEZONTES 
144	8	SAN LUIS TALPA 
145	8	SAN MIGUEL TEPEZONTES 
146	8	SAN PEDRO MASAHUAT 
147	8	SAN PEDRO NONUALCO 
148	8	SAN RAFAEL OBRAJUELO 
149	8	SANTA MARIA OSTUMA 
150	8	SANTIAGO NONUALCO 
151	8	TAPALHUACA 
152	8	ZACATECOLUCA 
153	8	SAN LUIS DE LA HERRADURA 
154	9	CINQUERA 
155	9	GUACOTECTI 
156	9	ILOBASCO 
157	9	JUTIAPA 
158	9	SAN ISIDRO 
159	9	SENSUNTEPEQUE 
160	9	TEJUTEPEQUE 
161	9	VICTORIA 
162	9	DOLORES 
163	10	APASTEPEQUE 
164	10	GUADALUPE 
165	10	SAN CAYETANO ISTEPEQUE 
166	10	SANTA CLARA 
167	10	SANTO DOMINGO 
168	10	SAN ESTEBAN CATARINA 
169	10	SAN ILDEFONSO 
170	10	SAN LORENZO 
171	10	SAN SEBASTIAN 
172	10	SAN VICENTE 
173	10	TECOLUCA 
174	10	TEPETITAN 
175	10	VERAPAZ 
176	11	ALEGRIA 
177	11	BERLIN 
178	11	CALIFORNIA 
179	11	CONCEPCION BATRES 
180	11	EL TRIUNFO 
181	11	EREGUAYQUIN 
182	11	ESTANZUELAS 
183	11	JIQUILISCO 
184	11	JUCUAPA 
185	11	JUCUARAN 
186	11	MERCEDES UMANA 
187	11	NUEVA GRANADA 
188	11	OZATLAN 
189	11	PUERTO EL TRIUNFO 
190	11	SAN AGUSTIN 
191	11	SAN BUENAVENTURA 
192	11	SAN DIONISIO 
193	11	SANTA ELENA 
194	11	SAN FRANCISCO JAVIER 
195	11	SANTA MARIA 
196	11	SANTIAGO DE MARIA 
197	11	TECAPAN 
198	11	USULUTAN 
199	12	CAROLINA 
200	12	CIUDAD BARRIOS 
201	12	desconocido 
202	12	CHAPELTIQUE 
203	12	CHINAMECA 
204	12	CHIRILAGUA 
205	12	EL TRANSITO 
206	12	LOLOTIQUE 
207	12	MONCAGUA 
208	12	NUEVA GUADALUPE 
209	12	NUEVO EDEN DE SAN JUAN 
210	12	QUELEPA 
211	12	SAN ANTONIO 
212	12	SAN GERARDO 
213	12	SAN JORGE 
214	12	SAN LUIS DE LA REINA 
215	12	SAN MIGUEL 
216	12	SAN RAFAEL ORIENTE 
217	12	SESORI 
218	12	ULUAZAPA 
219	13	ARAMBALA 
220	13	CACAOPERA 
221	13	CORINTO 
222	13	CHILANGA 
223	13	DELICIAS DE CONCEPCION 
224	13	EL DIVISADERO 
225	13	EL ROSARIO 
226	13	GUALOCOCTI 
227	13	GUATAJIAGUA 
228	13	JOATECA 
229	13	JOCOAITIQUE 
230	13	JOCORO 
231	13	LOLOTIQUILLO 
232	13	MEANGUERA 
233	13	OSICALA 
234	13	PERQUIN 
235	13	SAN CARLOS 
236	13	SAN FERNANDO 
237	13	SAN FRANCISCO GOTERA 
238	13	SAN ISIDRO 
239	13	SAN SIMON 
240	13	SENSEMBRA 
241	13	SOCIEDAD 
242	13	TOROLA 
243	13	YAMABAL 
244	13	YOLOAIQUIN 
245	14	ANAMOROS 
246	14	BOLIVAR 
247	14	CONCEPCION ORIENTE 
248	14	CONCHAGUA 
249	14	EL CARMEN 
250	14	EL SAUCE 
251	14	INTIPUCA 
252	14	LA UNION 
253	14	LISLIQUE 
254	14	NUEVA ESPARTA 
255	14	PASAQUINA 
256	14	POLOROS 
257	14	SAN ALEJO 
258	14	SAN JOSE 
259	14	SANTA ROSA DE LIMA 
260	14	YAYANTIQUE 
261	14	YUCUAIQUIN 
262	14	MEANGUERA DEL GOLFO 
\.


--
-- TOC entry 2363 (class 0 OID 0)
-- Dependencies: 193
-- Name: ctl_municipio_id_seq; Type: SEQUENCE SET; Schema: public; Owner: -
--

SELECT pg_catalog.setval('ctl_municipio_id_seq', 1, false);


--
-- TOC entry 2293 (class 0 OID 81990)
-- Dependencies: 204
-- Data for Name: ctl_nivel_cuentacontable; Type: TABLE DATA; Schema: public; Owner: -
--

COPY ctl_nivel_cuentacontable (id, nombre, activo) FROM stdin;
1	RUBRO	t
2	MAYOR	t
3	SUBCUENTA	t
4	SUBSUBCUENTA	t
\.


--
-- TOC entry 2364 (class 0 OID 0)
-- Dependencies: 203
-- Name: ctl_nivel_cuentacontable_id_seq; Type: SEQUENCE SET; Schema: public; Owner: -
--

SELECT pg_catalog.setval('ctl_nivel_cuentacontable_id_seq', 4, true);


--
-- TOC entry 2285 (class 0 OID 40126)
-- Dependencies: 196
-- Data for Name: ctl_pais; Type: TABLE DATA; Schema: public; Owner: -
--

COPY ctl_pais (id, nombre) FROM stdin;
1	El Salvador
\.


--
-- TOC entry 2365 (class 0 OID 0)
-- Dependencies: 195
-- Name: ctl_pais_id_seq; Type: SEQUENCE SET; Schema: public; Owner: -
--

SELECT pg_catalog.setval('ctl_pais_id_seq', 1, false);


--
-- TOC entry 2289 (class 0 OID 40149)
-- Dependencies: 200
-- Data for Name: ctl_periodocontable; Type: TABLE DATA; Schema: public; Owner: -
--

COPY ctl_periodocontable (id_anio, id_mes, id, id_empresa, activo) FROM stdin;
1	1	1	1	f
1	2	2	1	f
1	3	3	1	f
1	4	4	1	f
1	5	5	1	f
1	6	6	1	f
1	7	7	1	f
1	8	8	1	f
1	9	9	1	f
1	11	11	1	f
1	12	12	1	f
1	10	10	1	t
\.


--
-- TOC entry 2366 (class 0 OID 0)
-- Dependencies: 199
-- Name: ctl_periodocontable_id_seq; Type: SEQUENCE SET; Schema: public; Owner: -
--

SELECT pg_catalog.setval('ctl_periodocontable_id_seq', 12, true);


--
-- TOC entry 2291 (class 0 OID 81972)
-- Dependencies: 202
-- Data for Name: ctl_tipo_cuentacontable; Type: TABLE DATA; Schema: public; Owner: -
--

COPY ctl_tipo_cuentacontable (id, codigo, nombre, activo) FROM stdin;
1	A	CUENTA DE ACTIVO	t
\.


--
-- TOC entry 2367 (class 0 OID 0)
-- Dependencies: 201
-- Name: ctl_tipo_cuentacontable_id_seq; Type: SEQUENCE SET; Schema: public; Owner: -
--

SELECT pg_catalog.setval('ctl_tipo_cuentacontable_id_seq', 1, true);


--
-- TOC entry 2297 (class 0 OID 82035)
-- Dependencies: 208
-- Data for Name: ctl_tipo_partida; Type: TABLE DATA; Schema: public; Owner: -
--

COPY ctl_tipo_partida (id, nombre, id_forma_partida) FROM stdin;
1	CHEQUES	1
2	DIARIO	1
3	EGRESO	1
4	INGRESO	1
5	REMESAS	1
\.


--
-- TOC entry 2368 (class 0 OID 0)
-- Dependencies: 207
-- Name: ctl_tipo_partida_id_seq; Type: SEQUENCE SET; Schema: public; Owner: -
--

SELECT pg_catalog.setval('ctl_tipo_partida_id_seq', 5, true);


--
-- TOC entry 2275 (class 0 OID 39927)
-- Dependencies: 186
-- Data for Name: fos_user_group; Type: TABLE DATA; Schema: public; Owner: -
--

COPY fos_user_group (id, name, roles) FROM stdin;
\.


--
-- TOC entry 2369 (class 0 OID 0)
-- Dependencies: 183
-- Name: fos_user_group_id_seq; Type: SEQUENCE SET; Schema: public; Owner: -
--

SELECT pg_catalog.setval('fos_user_group_id_seq', 1, false);


--
-- TOC entry 2273 (class 0 OID 39888)
-- Dependencies: 184
-- Data for Name: fos_user_user; Type: TABLE DATA; Schema: public; Owner: -
--

COPY fos_user_user (id, username, username_canonical, email, email_canonical, enabled, salt, password, last_login, locked, expired, expires_at, confirmation_token, password_requested_at, roles, credentials_expired, credentials_expire_at, created_at, updated_at, date_of_birth, firstname, lastname, website, biography, gender, locale, timezone, phone, facebook_uid, facebook_name, facebook_data, twitter_uid, twitter_name, twitter_data, gplus_uid, gplus_name, gplus_data, token, two_step_code) FROM stdin;
4	cplatero	cplatero	cplatero@sifemaiz.org	cplatero@sifemaiz.org	t	sdf6dlsueio08cc0ko0wc0ow4g8owkw	i6tTr9NVQBOp1eOiLZIDf27t93nQ1Qt2KXMZa/DPsmKk+sIkRg1fU9dsK19JBvHLGoSYJA+y26YznIUoqly1/Q==	2018-10-20 05:18:27	f	f	\N	\N	\N	a:1:{i:0;s:16:"ROLE_SUPER_ADMIN";}	f	\N	2018-10-20 05:17:49	2018-10-20 05:18:27	\N	CRISTINA	PLATERO	\N	\N	f	\N	\N	\N	\N	\N	null	\N	\N	null	\N	\N	null	\N	\N
2	jcastillo	jcastillo	jcastillo@ninfac.com	jcastillo@ninfac.com	f	sbnscuw6u1w0co80w08o8o00k8co0oc	d46FZj/uYvPTqSvgSb4F7+TC84FZnDz+wpjtW90MHCvaa++1pt+g6zV0KAt9c961ORoL0ZMgJg1x3Zi3uJg1ZQ==	\N	f	f	\N	\N	\N	a:0:{}	f	\N	2018-10-06 04:36:02	2018-10-06 07:00:10	\N	\N	\N	\N	\N	u	\N	\N	\N	\N	\N	null	\N	\N	null	\N	\N	null	\N	\N
3	ralfaro	ralfaro	ralfaro@sifemaiz.org	ralfaro@sifemaiz.org	t	2j71oaqdfuucowc8gswg44kwc0cco08	OGGeXhSq/S/v6OEvFqhbU8CXaRkPaYPami0QUP0AYlwE3zPM26rNIyBz/SGRPNwcnU/a6Jinlvt4lGCuuVkJdg==	2018-10-20 04:52:03	f	f	\N	\N	\N	a:1:{i:0;s:16:"ROLE_SUPER_ADMIN";}	f	\N	2018-10-20 03:38:24	2018-10-20 04:52:03	\N	Rhina	Alfaro	\N	\N	f	\N	\N	\N	\N	\N	null	\N	\N	null	\N	\N	null	\N	\N
1	admin	admin	admin@maiz.com	admin@maiz.com	t	99aqjfg4yukoock8cco4og4goo4ko0c	AgQQcxFADf+JLtcFx7UnE+mwvIvdY3NGFoFG4XNZTP1GJFFKtRu2YwD/fYwv75TRcvKj47Ibhpf0NyBlEUwzQg==	2018-10-22 15:52:22	f	f	\N	\N	\N	a:1:{i:0;s:16:"ROLE_SUPER_ADMIN";}	f	\N	2017-05-14 12:48:59	2018-10-22 15:52:22	\N	\N	\N	\N	\N	u	\N	\N	\N	\N	\N	null	\N	\N	null	\N	\N	null	\N	\N
\.


--
-- TOC entry 2274 (class 0 OID 39920)
-- Dependencies: 185
-- Data for Name: fos_user_user_group; Type: TABLE DATA; Schema: public; Owner: -
--

COPY fos_user_user_group (user_id, group_id) FROM stdin;
\.


--
-- TOC entry 2370 (class 0 OID 0)
-- Dependencies: 182
-- Name: fos_user_user_id_seq; Type: SEQUENCE SET; Schema: public; Owner: -
--

SELECT pg_catalog.setval('fos_user_user_id_seq', 4, true);


--
-- TOC entry 2295 (class 0 OID 82000)
-- Dependencies: 206
-- Data for Name: mnt_cuentacontable; Type: TABLE DATA; Schema: public; Owner: -
--

COPY mnt_cuentacontable (id, id_empresa, id_anio, id_tipo_cuentacontable, id_nivel_cuentacontable, id_cuentacontable_depende, cuenta, nombre, activo, created_by, created_at, updated_by, updated_at) FROM stdin;
1	1	1	1	1	\N	1	ACTIVO	t	4	2018-10-20 05:40:36	\N	\N
2	1	1	1	1	1	11	ACTIVO CORRIENTE	t	4	2018-10-20 05:41:26	\N	\N
3	1	1	1	2	2	1101	EFECTIVO Y EQUIVALENTE	t	4	2018-10-20 05:42:06	\N	\N
4	1	1	1	3	3	110101	FONDOS EN EFECTIVO	t	4	2018-10-20 05:43:05	\N	\N
5	1	1	1	4	4	11010101	FONDO DE CAMBIO	t	4	2018-10-20 05:52:31	\N	\N
6	1	1	1	4	4	11010102	CAJA CHICA ADMINISTRACION	t	4	2018-10-20 05:53:51	\N	\N
7	1	1	1	4	4	11010103	CAJA CHICA EDUCACION	t	4	2018-10-20 05:54:48	4	2018-10-20 05:57:14
8	1	1	1	4	4	11010104	CAJA	t	4	2018-10-20 05:59:18	\N	\N
9	1	1	1	3	3	110102	BANCOS CUENTAS CORRIENTES	t	4	2018-10-20 06:00:06	\N	\N
10	1	1	1	4	9	11010201	BA N° 504-008147-2 MAIZ	t	4	2018-10-20 06:01:08	\N	\N
11	1	1	1	4	9	11010202	BA N° 504-009532-0 TROCAIRE	t	4	2018-10-20 06:02:26	\N	\N
12	1	1	1	4	9	11010203	BA N° 504-010399-4 APN	t	4	2018-10-20 06:03:19	\N	\N
13	1	1	1	4	9	11010204	BA N° 504-010436-3 EDUCACION SIN FRONTERAS	t	4	2018-10-20 06:04:26	\N	\N
14	1	1	1	4	9	11010205	BA N° 504-010441-0 MISEREOR	t	4	2018-10-20 06:05:11	\N	\N
15	1	1	1	4	9	11010206	BA N° 504-0010514-0 MANOS UNIDAS	t	4	2018-10-20 06:06:53	\N	\N
16	1	1	1	4	9	11010207	BA N° 504-010515-1 PAZ Y SOLIDARIDAD	t	4	2018-10-20 06:09:45	\N	\N
17	1	1	1	4	9	11010208	BA N° 504-010989-9 PROCLADE	t	4	2018-10-20 06:12:14	\N	\N
18	1	1	1	4	9	11010209	BA N° 504-011149-3 MAIZ LIOF	t	4	2018-10-20 06:13:11	\N	\N
19	1	1	1	4	9	11010210	BA N° 504-011205-5 ROSA LUXEMBURGO	t	4	2018-10-20 06:14:05	\N	\N
20	1	1	1	4	9	11010211	PROCREDIT N°210301001084-3 TDH	t	4	2018-10-20 06:14:58	\N	\N
21	1	1	1	4	9	11010212	BA N° 504-011424-3 EED	t	4	2018-10-20 06:15:53	\N	\N
22	1	1	1	4	9	11010213	BAC N° 201061017 PAZ CON DIGNIDAD	t	4	2018-10-20 06:16:43	\N	\N
23	1	1	1	4	9	11010214	BAC N° 201105202 PAZ Y SOLIDARIDAD 2018-2019	t	4	2018-10-20 06:41:15	\N	\N
\.


--
-- TOC entry 2371 (class 0 OID 0)
-- Dependencies: 205
-- Name: mnt_cuentacontable_id_seq; Type: SEQUENCE SET; Schema: public; Owner: -
--

SELECT pg_catalog.setval('mnt_cuentacontable_id_seq', 23, true);


--
-- TOC entry 2051 (class 2606 OID 39812)
-- Name: acl_classes_pkey; Type: CONSTRAINT; Schema: public; Owner: -; Tablespace: 
--

ALTER TABLE ONLY acl_classes
    ADD CONSTRAINT acl_classes_pkey PRIMARY KEY (id);


--
-- TOC entry 2065 (class 2606 OID 39848)
-- Name: acl_entries_pkey; Type: CONSTRAINT; Schema: public; Owner: -; Tablespace: 
--

ALTER TABLE ONLY acl_entries
    ADD CONSTRAINT acl_entries_pkey PRIMARY KEY (id);


--
-- TOC entry 2057 (class 2606 OID 39830)
-- Name: acl_object_identities_pkey; Type: CONSTRAINT; Schema: public; Owner: -; Tablespace: 
--

ALTER TABLE ONLY acl_object_identities
    ADD CONSTRAINT acl_object_identities_pkey PRIMARY KEY (id);


--
-- TOC entry 2061 (class 2606 OID 39837)
-- Name: acl_object_identity_ancestors_pkey; Type: CONSTRAINT; Schema: public; Owner: -; Tablespace: 
--

ALTER TABLE ONLY acl_object_identity_ancestors
    ADD CONSTRAINT acl_object_identity_ancestors_pkey PRIMARY KEY (object_identity_id, ancestor_id);


--
-- TOC entry 2054 (class 2606 OID 39821)
-- Name: acl_security_identities_pkey; Type: CONSTRAINT; Schema: public; Owner: -; Tablespace: 
--

ALTER TABLE ONLY acl_security_identities
    ADD CONSTRAINT acl_security_identities_pkey PRIMARY KEY (id);


--
-- TOC entry 2125 (class 2606 OID 82144)
-- Name: con_partidacontable_detalle_pkey; Type: CONSTRAINT; Schema: public; Owner: -; Tablespace: 
--

ALTER TABLE ONLY con_partidacontable_detalle
    ADD CONSTRAINT con_partidacontable_detalle_pkey PRIMARY KEY (id);


--
-- TOC entry 2123 (class 2606 OID 82116)
-- Name: con_partidacontable_pkey; Type: CONSTRAINT; Schema: public; Owner: -; Tablespace: 
--

ALTER TABLE ONLY con_partidacontable
    ADD CONSTRAINT con_partidacontable_pkey PRIMARY KEY (id);


--
-- TOC entry 2083 (class 2606 OID 39986)
-- Name: ctl_anio_pkey; Type: CONSTRAINT; Schema: public; Owner: -; Tablespace: 
--

ALTER TABLE ONLY ctl_anio
    ADD CONSTRAINT ctl_anio_pkey PRIMARY KEY (id);


--
-- TOC entry 2093 (class 2606 OID 40041)
-- Name: ctl_departamento_pkey; Type: CONSTRAINT; Schema: public; Owner: -; Tablespace: 
--

ALTER TABLE ONLY ctl_departamento
    ADD CONSTRAINT ctl_departamento_pkey PRIMARY KEY (id);


--
-- TOC entry 2087 (class 2606 OID 40033)
-- Name: ctl_empresa_pkey; Type: CONSTRAINT; Schema: public; Owner: -; Tablespace: 
--

ALTER TABLE ONLY ctl_empresa
    ADD CONSTRAINT ctl_empresa_pkey PRIMARY KEY (id);


--
-- TOC entry 2119 (class 2606 OID 82079)
-- Name: ctl_forma_partida_pkey; Type: CONSTRAINT; Schema: public; Owner: -; Tablespace: 
--

ALTER TABLE ONLY ctl_forma_partida
    ADD CONSTRAINT ctl_forma_partida_pkey PRIMARY KEY (id);


--
-- TOC entry 2099 (class 2606 OID 40146)
-- Name: ctl_mes_pkey; Type: CONSTRAINT; Schema: public; Owner: -; Tablespace: 
--

ALTER TABLE ONLY ctl_mes
    ADD CONSTRAINT ctl_mes_pkey PRIMARY KEY (id);


--
-- TOC entry 2095 (class 2606 OID 40049)
-- Name: ctl_municipio_pkey; Type: CONSTRAINT; Schema: public; Owner: -; Tablespace: 
--

ALTER TABLE ONLY ctl_municipio
    ADD CONSTRAINT ctl_municipio_pkey PRIMARY KEY (id);


--
-- TOC entry 2109 (class 2606 OID 81997)
-- Name: ctl_nivel_cuentacontable_nombre_key; Type: CONSTRAINT; Schema: public; Owner: -; Tablespace: 
--

ALTER TABLE ONLY ctl_nivel_cuentacontable
    ADD CONSTRAINT ctl_nivel_cuentacontable_nombre_key UNIQUE (nombre);


--
-- TOC entry 2111 (class 2606 OID 81995)
-- Name: ctl_nivel_cuentacontable_pkey; Type: CONSTRAINT; Schema: public; Owner: -; Tablespace: 
--

ALTER TABLE ONLY ctl_nivel_cuentacontable
    ADD CONSTRAINT ctl_nivel_cuentacontable_pkey PRIMARY KEY (id);


--
-- TOC entry 2097 (class 2606 OID 40131)
-- Name: ctl_pais_pkey; Type: CONSTRAINT; Schema: public; Owner: -; Tablespace: 
--

ALTER TABLE ONLY ctl_pais
    ADD CONSTRAINT ctl_pais_pkey PRIMARY KEY (id);


--
-- TOC entry 2101 (class 2606 OID 40154)
-- Name: ctl_periodocontable_pkey; Type: CONSTRAINT; Schema: public; Owner: -; Tablespace: 
--

ALTER TABLE ONLY ctl_periodocontable
    ADD CONSTRAINT ctl_periodocontable_pkey PRIMARY KEY (id);


--
-- TOC entry 2105 (class 2606 OID 81977)
-- Name: ctl_tipo_cuentacontable_pkey; Type: CONSTRAINT; Schema: public; Owner: -; Tablespace: 
--

ALTER TABLE ONLY ctl_tipo_cuentacontable
    ADD CONSTRAINT ctl_tipo_cuentacontable_pkey PRIMARY KEY (id);


--
-- TOC entry 2117 (class 2606 OID 82040)
-- Name: ctl_tipo_partida_pkey; Type: CONSTRAINT; Schema: public; Owner: -; Tablespace: 
--

ALTER TABLE ONLY ctl_tipo_partida
    ADD CONSTRAINT ctl_tipo_partida_pkey PRIMARY KEY (id);


--
-- TOC entry 2080 (class 2606 OID 39934)
-- Name: fos_user_group_pkey; Type: CONSTRAINT; Schema: public; Owner: -; Tablespace: 
--

ALTER TABLE ONLY fos_user_group
    ADD CONSTRAINT fos_user_group_pkey PRIMARY KEY (id);


--
-- TOC entry 2076 (class 2606 OID 39924)
-- Name: fos_user_user_group_pkey; Type: CONSTRAINT; Schema: public; Owner: -; Tablespace: 
--

ALTER TABLE ONLY fos_user_user_group
    ADD CONSTRAINT fos_user_user_group_pkey PRIMARY KEY (user_id, group_id);


--
-- TOC entry 2072 (class 2606 OID 39917)
-- Name: fos_user_user_pkey; Type: CONSTRAINT; Schema: public; Owner: -; Tablespace: 
--

ALTER TABLE ONLY fos_user_user
    ADD CONSTRAINT fos_user_user_pkey PRIMARY KEY (id);


--
-- TOC entry 2113 (class 2606 OID 82005)
-- Name: mnt_cuentacontable_pkey; Type: CONSTRAINT; Schema: public; Owner: -; Tablespace: 
--

ALTER TABLE ONLY mnt_cuentacontable
    ADD CONSTRAINT mnt_cuentacontable_pkey PRIMARY KEY (id);


--
-- TOC entry 2107 (class 2606 OID 81979)
-- Name: pk_tipo_cuentacontable; Type: CONSTRAINT; Schema: public; Owner: -; Tablespace: 
--

ALTER TABLE ONLY ctl_tipo_cuentacontable
    ADD CONSTRAINT pk_tipo_cuentacontable UNIQUE (codigo);


--
-- TOC entry 2085 (class 2606 OID 73850)
-- Name: uk_anio; Type: CONSTRAINT; Schema: public; Owner: -; Tablespace: 
--

ALTER TABLE ONLY ctl_anio
    ADD CONSTRAINT uk_anio UNIQUE (nombre);


--
-- TOC entry 2115 (class 2606 OID 82007)
-- Name: uk_cuentacontable; Type: CONSTRAINT; Schema: public; Owner: -; Tablespace: 
--

ALTER TABLE ONLY mnt_cuentacontable
    ADD CONSTRAINT uk_cuentacontable UNIQUE (id_empresa, id_anio, cuenta);


--
-- TOC entry 2089 (class 2606 OID 73854)
-- Name: uk_empresa_consolidadora; Type: CONSTRAINT; Schema: public; Owner: -; Tablespace: 
--

ALTER TABLE ONLY ctl_empresa
    ADD CONSTRAINT uk_empresa_consolidadora UNIQUE (consolidadora);


--
-- TOC entry 2091 (class 2606 OID 73852)
-- Name: uk_empresa_nombre; Type: CONSTRAINT; Schema: public; Owner: -; Tablespace: 
--

ALTER TABLE ONLY ctl_empresa
    ADD CONSTRAINT uk_empresa_nombre UNIQUE (nombre);


--
-- TOC entry 2121 (class 2606 OID 82171)
-- Name: uk_forma_partia; Type: CONSTRAINT; Schema: public; Owner: -; Tablespace: 
--

ALTER TABLE ONLY ctl_forma_partida
    ADD CONSTRAINT uk_forma_partia UNIQUE (nombre);


--
-- TOC entry 2103 (class 2606 OID 73773)
-- Name: uk_periodocontable; Type: CONSTRAINT; Schema: public; Owner: -; Tablespace: 
--

ALTER TABLE ONLY ctl_periodocontable
    ADD CONSTRAINT uk_periodocontable UNIQUE (id_anio, id_empresa, id_mes);


--
-- TOC entry 2066 (class 1259 OID 39852)
-- Name: idx_46c8b8063d9ab4a6; Type: INDEX; Schema: public; Owner: -; Tablespace: 
--

CREATE INDEX idx_46c8b8063d9ab4a6 ON acl_entries USING btree (object_identity_id);


--
-- TOC entry 2067 (class 1259 OID 39853)
-- Name: idx_46c8b806df9183c9; Type: INDEX; Schema: public; Owner: -; Tablespace: 
--

CREATE INDEX idx_46c8b806df9183c9 ON acl_entries USING btree (security_identity_id);


--
-- TOC entry 2068 (class 1259 OID 39851)
-- Name: idx_46c8b806ea000b10; Type: INDEX; Schema: public; Owner: -; Tablespace: 
--

CREATE INDEX idx_46c8b806ea000b10 ON acl_entries USING btree (class_id);


--
-- TOC entry 2069 (class 1259 OID 39850)
-- Name: idx_46c8b806ea000b103d9ab4a6df9183c9; Type: INDEX; Schema: public; Owner: -; Tablespace: 
--

CREATE INDEX idx_46c8b806ea000b103d9ab4a6df9183c9 ON acl_entries USING btree (class_id, object_identity_id, security_identity_id);


--
-- TOC entry 2062 (class 1259 OID 39838)
-- Name: idx_825de2993d9ab4a6; Type: INDEX; Schema: public; Owner: -; Tablespace: 
--

CREATE INDEX idx_825de2993d9ab4a6 ON acl_object_identity_ancestors USING btree (object_identity_id);


--
-- TOC entry 2063 (class 1259 OID 39839)
-- Name: idx_825de299c671cea1; Type: INDEX; Schema: public; Owner: -; Tablespace: 
--

CREATE INDEX idx_825de299c671cea1 ON acl_object_identity_ancestors USING btree (ancestor_id);


--
-- TOC entry 2058 (class 1259 OID 39832)
-- Name: idx_9407e54977fa751a; Type: INDEX; Schema: public; Owner: -; Tablespace: 
--

CREATE INDEX idx_9407e54977fa751a ON acl_object_identities USING btree (parent_object_identity_id);


--
-- TOC entry 2077 (class 1259 OID 39925)
-- Name: idx_b3c77447a76ed395; Type: INDEX; Schema: public; Owner: -; Tablespace: 
--

CREATE INDEX idx_b3c77447a76ed395 ON fos_user_user_group USING btree (user_id);


--
-- TOC entry 2078 (class 1259 OID 39926)
-- Name: idx_b3c77447fe54d947; Type: INDEX; Schema: public; Owner: -; Tablespace: 
--

CREATE INDEX idx_b3c77447fe54d947 ON fos_user_user_group USING btree (group_id);


--
-- TOC entry 2070 (class 1259 OID 39849)
-- Name: uniq_46c8b806ea000b103d9ab4a64def17bce4289bf4; Type: INDEX; Schema: public; Owner: -; Tablespace: 
--

CREATE UNIQUE INDEX uniq_46c8b806ea000b103d9ab4a64def17bce4289bf4 ON acl_entries USING btree (class_id, object_identity_id, field_name, ace_order);


--
-- TOC entry 2081 (class 1259 OID 39935)
-- Name: uniq_583d1f3e5e237e06; Type: INDEX; Schema: public; Owner: -; Tablespace: 
--

CREATE UNIQUE INDEX uniq_583d1f3e5e237e06 ON fos_user_group USING btree (name);


--
-- TOC entry 2052 (class 1259 OID 39813)
-- Name: uniq_69dd750638a36066; Type: INDEX; Schema: public; Owner: -; Tablespace: 
--

CREATE UNIQUE INDEX uniq_69dd750638a36066 ON acl_classes USING btree (class_type);


--
-- TOC entry 2055 (class 1259 OID 39822)
-- Name: uniq_8835ee78772e836af85e0677; Type: INDEX; Schema: public; Owner: -; Tablespace: 
--

CREATE UNIQUE INDEX uniq_8835ee78772e836af85e0677 ON acl_security_identities USING btree (identifier, username);


--
-- TOC entry 2059 (class 1259 OID 39831)
-- Name: uniq_9407e5494b12ad6ea000b10; Type: INDEX; Schema: public; Owner: -; Tablespace: 
--

CREATE UNIQUE INDEX uniq_9407e5494b12ad6ea000b10 ON acl_object_identities USING btree (object_identifier, class_id);


--
-- TOC entry 2073 (class 1259 OID 39918)
-- Name: uniq_c560d76192fc23a8; Type: INDEX; Schema: public; Owner: -; Tablespace: 
--

CREATE UNIQUE INDEX uniq_c560d76192fc23a8 ON fos_user_user USING btree (username_canonical);


--
-- TOC entry 2074 (class 1259 OID 39919)
-- Name: uniq_c560d761a0d96fbf; Type: INDEX; Schema: public; Owner: -; Tablespace: 
--

CREATE UNIQUE INDEX uniq_c560d761a0d96fbf ON fos_user_user USING btree (email_canonical);


--
-- TOC entry 2130 (class 2606 OID 39874)
-- Name: fk_46c8b8063d9ab4a6; Type: FK CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY acl_entries
    ADD CONSTRAINT fk_46c8b8063d9ab4a6 FOREIGN KEY (object_identity_id) REFERENCES acl_object_identities(id) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- TOC entry 2131 (class 2606 OID 39879)
-- Name: fk_46c8b806df9183c9; Type: FK CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY acl_entries
    ADD CONSTRAINT fk_46c8b806df9183c9 FOREIGN KEY (security_identity_id) REFERENCES acl_security_identities(id) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- TOC entry 2129 (class 2606 OID 39869)
-- Name: fk_46c8b806ea000b10; Type: FK CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY acl_entries
    ADD CONSTRAINT fk_46c8b806ea000b10 FOREIGN KEY (class_id) REFERENCES acl_classes(id) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- TOC entry 2127 (class 2606 OID 39859)
-- Name: fk_825de2993d9ab4a6; Type: FK CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY acl_object_identity_ancestors
    ADD CONSTRAINT fk_825de2993d9ab4a6 FOREIGN KEY (object_identity_id) REFERENCES acl_object_identities(id) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- TOC entry 2128 (class 2606 OID 39864)
-- Name: fk_825de299c671cea1; Type: FK CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY acl_object_identity_ancestors
    ADD CONSTRAINT fk_825de299c671cea1 FOREIGN KEY (ancestor_id) REFERENCES acl_object_identities(id) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- TOC entry 2126 (class 2606 OID 39854)
-- Name: fk_9407e54977fa751a; Type: FK CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY acl_object_identities
    ADD CONSTRAINT fk_9407e54977fa751a FOREIGN KEY (parent_object_identity_id) REFERENCES acl_object_identities(id);


--
-- TOC entry 2140 (class 2606 OID 82008)
-- Name: fk_anio_cuentacontable; Type: FK CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY mnt_cuentacontable
    ADD CONSTRAINT fk_anio_cuentacontable FOREIGN KEY (id_anio) REFERENCES ctl_anio(id);


--
-- TOC entry 2132 (class 2606 OID 39936)
-- Name: fk_b3c77447a76ed395; Type: FK CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY fos_user_user_group
    ADD CONSTRAINT fk_b3c77447a76ed395 FOREIGN KEY (user_id) REFERENCES fos_user_user(id) ON DELETE CASCADE;


--
-- TOC entry 2133 (class 2606 OID 39941)
-- Name: fk_b3c77447fe54d947; Type: FK CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY fos_user_user_group
    ADD CONSTRAINT fk_b3c77447fe54d947 FOREIGN KEY (group_id) REFERENCES fos_user_group(id) ON DELETE CASCADE;


--
-- TOC entry 2141 (class 2606 OID 82013)
-- Name: fk_cuentacontable_depende; Type: FK CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY mnt_cuentacontable
    ADD CONSTRAINT fk_cuentacontable_depende FOREIGN KEY (id_cuentacontable_depende) REFERENCES mnt_cuentacontable(id);


--
-- TOC entry 2145 (class 2606 OID 82165)
-- Name: fk_forma_partida_tipo_partida; Type: FK CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY ctl_tipo_partida
    ADD CONSTRAINT fk_forma_partida_tipo_partida FOREIGN KEY (id_forma_partida) REFERENCES ctl_forma_partida(id);


--
-- TOC entry 2147 (class 2606 OID 82127)
-- Name: fk_id_anio_partidacontable; Type: FK CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY con_partidacontable
    ADD CONSTRAINT fk_id_anio_partidacontable FOREIGN KEY (id_anio) REFERENCES ctl_anio(id);


--
-- TOC entry 2149 (class 2606 OID 82145)
-- Name: fk_id_anio_partidacontable_detalle; Type: FK CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY con_partidacontable_detalle
    ADD CONSTRAINT fk_id_anio_partidacontable_detalle FOREIGN KEY (id_anio) REFERENCES ctl_anio(id);


--
-- TOC entry 2137 (class 2606 OID 40155)
-- Name: fk_id_anio_periodocontable; Type: FK CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY ctl_periodocontable
    ADD CONSTRAINT fk_id_anio_periodocontable FOREIGN KEY (id_anio) REFERENCES ctl_anio(id);


--
-- TOC entry 2134 (class 2606 OID 40170)
-- Name: fk_id_anioinicio_empresa; Type: FK CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY ctl_empresa
    ADD CONSTRAINT fk_id_anioinicio_empresa FOREIGN KEY (id_anioinicio) REFERENCES ctl_anio(id);


--
-- TOC entry 2150 (class 2606 OID 82150)
-- Name: fk_id_cuentacontable_partidacontable_detalle; Type: FK CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY con_partidacontable_detalle
    ADD CONSTRAINT fk_id_cuentacontable_partidacontable_detalle FOREIGN KEY (id_cuentacontable) REFERENCES mnt_cuentacontable(id);


--
-- TOC entry 2136 (class 2606 OID 40063)
-- Name: fk_id_departamento_municipio; Type: FK CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY ctl_municipio
    ADD CONSTRAINT fk_id_departamento_municipio FOREIGN KEY (id_departamento) REFERENCES ctl_departamento(id);


--
-- TOC entry 2142 (class 2606 OID 82018)
-- Name: fk_id_empresa_cuentacontable; Type: FK CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY mnt_cuentacontable
    ADD CONSTRAINT fk_id_empresa_cuentacontable FOREIGN KEY (id_empresa) REFERENCES ctl_empresa(id);


--
-- TOC entry 2151 (class 2606 OID 82155)
-- Name: fk_id_empresa_partidacontable_detalle; Type: FK CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY con_partidacontable_detalle
    ADD CONSTRAINT fk_id_empresa_partidacontable_detalle FOREIGN KEY (id_empresa) REFERENCES ctl_empresa(id);


--
-- TOC entry 2139 (class 2606 OID 40165)
-- Name: fk_id_empresa_periodocontable; Type: FK CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY ctl_periodocontable
    ADD CONSTRAINT fk_id_empresa_periodocontable FOREIGN KEY (id_empresa) REFERENCES ctl_empresa(id);


--
-- TOC entry 2138 (class 2606 OID 40160)
-- Name: fk_id_mes_periodocontable; Type: FK CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY ctl_periodocontable
    ADD CONSTRAINT fk_id_mes_periodocontable FOREIGN KEY (id_mes) REFERENCES ctl_mes(id);


--
-- TOC entry 2143 (class 2606 OID 82023)
-- Name: fk_id_nivel_cuentacontable; Type: FK CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY mnt_cuentacontable
    ADD CONSTRAINT fk_id_nivel_cuentacontable FOREIGN KEY (id_nivel_cuentacontable) REFERENCES ctl_nivel_cuentacontable(id);


--
-- TOC entry 2135 (class 2606 OID 40132)
-- Name: fk_id_pasi_departamento; Type: FK CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY ctl_departamento
    ADD CONSTRAINT fk_id_pasi_departamento FOREIGN KEY (id_pais) REFERENCES ctl_pais(id);


--
-- TOC entry 2144 (class 2606 OID 82028)
-- Name: fk_id_tipo_cuentacontable; Type: FK CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY mnt_cuentacontable
    ADD CONSTRAINT fk_id_tipo_cuentacontable FOREIGN KEY (id_tipo_cuentacontable) REFERENCES ctl_tipo_cuentacontable(id);


--
-- TOC entry 2152 (class 2606 OID 82160)
-- Name: fk_partidacontable_cuentacontable_detalle; Type: FK CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY con_partidacontable_detalle
    ADD CONSTRAINT fk_partidacontable_cuentacontable_detalle FOREIGN KEY (id_partidacontable) REFERENCES con_partidacontable(id);


--
-- TOC entry 2148 (class 2606 OID 82132)
-- Name: fk_tipo_partida_partidacontable; Type: FK CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY con_partidacontable
    ADD CONSTRAINT fk_tipo_partida_partidacontable FOREIGN KEY (id_tipo_partida) REFERENCES ctl_tipo_partida(id);


--
-- TOC entry 2146 (class 2606 OID 82117)
-- Name: fkcon_partid874903; Type: FK CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY con_partidacontable
    ADD CONSTRAINT fkcon_partid874903 FOREIGN KEY (id_empresa) REFERENCES ctl_empresa(id);


--
-- TOC entry 2310 (class 0 OID 0)
-- Dependencies: 6
-- Name: public; Type: ACL; Schema: -; Owner: -
--

REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM postgres;
GRANT ALL ON SCHEMA public TO postgres;
GRANT ALL ON SCHEMA public TO PUBLIC;


-- Completed on 2018-10-22 15:17:02 CST

--
-- PostgreSQL database dump complete
--

