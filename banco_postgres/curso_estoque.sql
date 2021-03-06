toc.dat                                                                                             0000600 0004000 0002000 00000005376 14224424626 0014460 0                                                                                                    ustar 00postgres                        postgres                        0000000 0000000                                                                                                                                                                        PGDMP           1        	        z            curso_estoque    14.1    14.1     ?           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false         ?           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false         ?           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false         ?           1262    16397    curso_estoque    DATABASE     m   CREATE DATABASE curso_estoque WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE = 'Portuguese_Brazil.1252';
    DROP DATABASE curso_estoque;
                postgres    false         ?            1259    16399    estoque    TABLE       CREATE TABLE public.estoque (
    id integer NOT NULL,
    nroproduto integer NOT NULL,
    nomeproduto character varying(200) NOT NULL,
    categoria character varying(100) NOT NULL,
    quantidade integer NOT NULL,
    fornecedor character varying(100) NOT NULL
);
    DROP TABLE public.estoque;
       public         heap    postgres    false         ?            1259    16398    estoque_id_seq    SEQUENCE     ?   CREATE SEQUENCE public.estoque_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 %   DROP SEQUENCE public.estoque_id_seq;
       public          postgres    false    210         ?           0    0    estoque_id_seq    SEQUENCE OWNED BY     A   ALTER SEQUENCE public.estoque_id_seq OWNED BY public.estoque.id;
          public          postgres    false    209         \           2604    16402 
   estoque id    DEFAULT     h   ALTER TABLE ONLY public.estoque ALTER COLUMN id SET DEFAULT nextval('public.estoque_id_seq'::regclass);
 9   ALTER TABLE public.estoque ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    209    210    210         ?          0    16399    estoque 
   TABLE DATA           a   COPY public.estoque (id, nroproduto, nomeproduto, categoria, quantidade, fornecedor) FROM stdin;
    public          postgres    false    210       3307.dat ?           0    0    estoque_id_seq    SEQUENCE SET     =   SELECT pg_catalog.setval('public.estoque_id_seq', 10, true);
          public          postgres    false    209         ^           2606    16404    estoque estoque_pkey 
   CONSTRAINT     R   ALTER TABLE ONLY public.estoque
    ADD CONSTRAINT estoque_pkey PRIMARY KEY (id);
 >   ALTER TABLE ONLY public.estoque DROP CONSTRAINT estoque_pkey;
       public            postgres    false    210                                                                                                                                                                                                                                                                          3307.dat                                                                                            0000600 0004000 0002000 00000000447 14224424626 0014261 0                                                                                                    ustar 00postgres                        postgres                        0000000 0000000                                                                                                                                                                        5	2650	Fone	Periféricos	123	Forcedor A
6	2650	Fone	Periféricos	123	Forcedor A
7	2650	Fone	Periféricos	123	Forcedor A
8	2650	Fone	Periféricos	123	Forcedor A
9	2650	Fone	Periféricos	123	Forcedor A
10	2581	teste1235456	Periféricos	23	Forcedor A
2	123	123d456tu	Periféricos	1	Forcedor A
\.


                                                                                                                                                                                                                         restore.sql                                                                                         0000600 0004000 0002000 00000005611 14224424626 0015375 0                                                                                                    ustar 00postgres                        postgres                        0000000 0000000                                                                                                                                                                        --
-- NOTE:
--
-- File paths need to be edited. Search for $$PATH$$ and
-- replace it with the path to the directory containing
-- the extracted data files.
--
--
-- PostgreSQL database dump
--

-- Dumped from database version 14.1
-- Dumped by pg_dump version 14.1

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

DROP DATABASE curso_estoque;
--
-- Name: curso_estoque; Type: DATABASE; Schema: -; Owner: postgres
--

CREATE DATABASE curso_estoque WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE = 'Portuguese_Brazil.1252';


ALTER DATABASE curso_estoque OWNER TO postgres;

\connect curso_estoque

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

SET default_tablespace = '';

SET default_table_access_method = heap;

--
-- Name: estoque; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.estoque (
    id integer NOT NULL,
    nroproduto integer NOT NULL,
    nomeproduto character varying(200) NOT NULL,
    categoria character varying(100) NOT NULL,
    quantidade integer NOT NULL,
    fornecedor character varying(100) NOT NULL
);


ALTER TABLE public.estoque OWNER TO postgres;

--
-- Name: estoque_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.estoque_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.estoque_id_seq OWNER TO postgres;

--
-- Name: estoque_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.estoque_id_seq OWNED BY public.estoque.id;


--
-- Name: estoque id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.estoque ALTER COLUMN id SET DEFAULT nextval('public.estoque_id_seq'::regclass);


--
-- Data for Name: estoque; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.estoque (id, nroproduto, nomeproduto, categoria, quantidade, fornecedor) FROM stdin;
\.
COPY public.estoque (id, nroproduto, nomeproduto, categoria, quantidade, fornecedor) FROM '$$PATH$$/3307.dat';

--
-- Name: estoque_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.estoque_id_seq', 10, true);


--
-- Name: estoque estoque_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.estoque
    ADD CONSTRAINT estoque_pkey PRIMARY KEY (id);


--
-- PostgreSQL database dump complete
--

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       