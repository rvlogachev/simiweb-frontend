--
-- PostgreSQL database dump
--

-- Dumped from database version 14.4 (Debian 14.4-1.pgdg110+1)
-- Dumped by pg_dump version 14.5 (Ubuntu 14.5-1.pgdg20.04+1)

-- Started on 2022-10-03 22:45:55 MSK

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
-- TOC entry 3648 (class 0 OID 17159)
-- Dependencies: 334
-- Data for Name: index_score_level_spr; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.index_score_level_spr (id, set_id, score, index_level_depreciation, index_level_ebitda_loss, created_at, updated_at, deleted_at) VALUES (1, 1, 1000, 80, 5, '2022-10-03 19:45:05', '2022-10-03 19:45:05', NULL);
INSERT INTO public.index_score_level_spr (id, set_id, score, index_level_depreciation, index_level_ebitda_loss, created_at, updated_at, deleted_at) VALUES (2, 1, 100, 60, 2, '2022-10-03 19:45:05', '2022-10-03 19:45:05', NULL);
INSERT INTO public.index_score_level_spr (id, set_id, score, index_level_depreciation, index_level_ebitda_loss, created_at, updated_at, deleted_at) VALUES (3, 1, 10, 40, 0.5, '2022-10-03 19:45:05', '2022-10-03 19:45:05', NULL);
INSERT INTO public.index_score_level_spr (id, set_id, score, index_level_depreciation, index_level_ebitda_loss, created_at, updated_at, deleted_at) VALUES (4, 1, 1, 20, 0.1, '2022-10-03 19:45:05', '2022-10-03 19:45:05', NULL);
INSERT INTO public.index_score_level_spr (id, set_id, score, index_level_depreciation, index_level_ebitda_loss, created_at, updated_at, deleted_at) VALUES (5, 1, 0, 0, 0, '2022-10-03 19:45:05', '2022-10-03 19:45:05', NULL);


--
-- TOC entry 3654 (class 0 OID 0)
-- Dependencies: 333
-- Name: index_score_level_spr_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.index_score_level_spr_id_seq', 5, true);


-- Completed on 2022-10-03 22:45:56 MSK

--
-- PostgreSQL database dump complete
--

