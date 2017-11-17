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


SET search_path = public, pg_catalog;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: registration1; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE registration1 (
    name character varying(30) NOT NULL,
    username character varying(10) NOT NULL,
    password character varying(250) NOT NULL
);


ALTER TABLE registration1 OWNER TO postgres;

--
-- Data for Name: registration1; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY registration1 (name, username, password) FROM stdin;
ph	ph	ph
ph	ph	7a94dac91510447c24fd0aece2e2473ae6424c12e9078cc5e88038c766675f8c0e4ccfdaf1019c1b96199e7011acf3debe8b06895db4890d1b46df5e146b9e0c
ubii	uwase	f56f0c50eb5ba103004bb0afdbb06fc299e9ae0afb1c0a629f81a99ab819f126a08823b1fc1e1ffe813ff964e0317d72f39504e9f427b289d07c146caaddfed8
ubii	uwase	f56f0c50eb5ba103004bb0afdbb06fc299e9ae0afb1c0a629f81a99ab819f126a08823b1fc1e1ffe813ff964e0317d72f39504e9f427b289d07c146caaddfed8
ubii	polo	f56f0c50eb5ba103004bb0afdbb06fc299e9ae0afb1c0a629f81a99ab819f126a08823b1fc1e1ffe813ff964e0317d72f39504e9f427b289d07c146caaddfed8
\.


--
-- PostgreSQL database dump complete
--

