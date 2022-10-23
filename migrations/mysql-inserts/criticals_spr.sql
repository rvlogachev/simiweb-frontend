--
-- PostgreSQL database dump
--

-- Dumped from database version 14.4 (Debian 14.4-1.pgdg110+1)
-- Dumped by pg_dump version 14.5 (Ubuntu 14.5-1.pgdg20.04+1)

-- Started on 2022-10-03 19:23:41 MSK

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
-- TOC entry 3654 (class 0 OID 17140)
-- Dependencies: 332
-- Data for Name: criticals_spr; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.criticals_spr (id, code, name, created_at, updated_at, deleted_at) VALUES (1, '1', 'Очень высокий', '2022-09-30 10:14:53', '2022-09-30 10:14:53', NULL);
INSERT INTO public.criticals_spr (id, code, name, created_at, updated_at, deleted_at) VALUES (2, '2', 'Высокий', '2022-09-30 10:14:53', '2022-09-30 10:14:53', NULL);
INSERT INTO public.criticals_spr (id, code, name, created_at, updated_at, deleted_at) VALUES (3, '3', 'Средний', '2022-09-30 10:14:53', '2022-09-30 10:14:53', NULL);
INSERT INTO public.criticals_spr (id, code, name, created_at, updated_at, deleted_at) VALUES (4, '4', 'Низкий', '2022-09-30 10:14:53', '2022-09-30 10:14:53', NULL);


--
-- TOC entry 3660 (class 0 OID 0)
-- Dependencies: 331
-- Name: criticals_spr_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.criticals_spr_id_seq', 4, true);


-- Completed on 2022-10-03 19:23:41 MSK

--
-- PostgreSQL database dump complete
--

