--
-- PostgreSQL database dump
--

-- Dumped from database version 14.4 (Debian 14.4-1.pgdg110+1)
-- Dumped by pg_dump version 14.5 (Ubuntu 14.5-1.pgdg20.04+1)

-- Started on 2022-10-03 19:23:02 MSK

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

--
-- TOC entry 3654 (class 0 OID 17278)
-- Dependencies: 350
-- Data for Name: cost_types_spr; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.cost_types_spr (id, code, short_name, name, created_at, updated_at, deleted_at) VALUES (1, 'СAPEX', 'СAPEX', 'Инвестиции', '2022-09-30 10:14:33', '2022-09-30 10:14:33', NULL);
INSERT INTO public.cost_types_spr (id, code, short_name, name, created_at, updated_at, deleted_at) VALUES (2, 'OPEX', 'OPEX', 'Операционные затраты', '2022-09-30 10:14:33', '2022-09-30 10:14:33', NULL);


--
-- TOC entry 3660 (class 0 OID 0)
-- Dependencies: 349
-- Name: cost_types_spr_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.cost_types_spr_id_seq', 2, true);


-- Completed on 2022-10-03 19:23:02 MSK

--
-- PostgreSQL database dump complete
--

