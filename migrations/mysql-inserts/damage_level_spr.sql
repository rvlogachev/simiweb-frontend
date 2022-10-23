--
-- PostgreSQL database dump
--

-- Dumped from database version 14.4 (Debian 14.4-1.pgdg110+1)
-- Dumped by pg_dump version 14.5 (Ubuntu 14.5-1.pgdg20.04+1)

-- Started on 2022-10-03 21:19:25 MSK

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
-- TOC entry 3648 (class 0 OID 17099)
-- Dependencies: 326
-- Data for Name: damage_level_spr; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.damage_level_spr (id, code, name, min_damage_level, max_damage_level, created_at, updated_at, deleted_at) VALUES (1, '1', 'Потери отсутствуют', 0, 0, '2022-10-03 17:59:17', '2022-10-03 17:59:17', NULL);
INSERT INTO public.damage_level_spr (id, code, name, min_damage_level, max_damage_level, created_at, updated_at, deleted_at) VALUES (2, '2', 'Крайне низкий', 0, 0.1, '2022-10-03 17:59:17', '2022-10-03 17:59:17', NULL);
INSERT INTO public.damage_level_spr (id, code, name, min_damage_level, max_damage_level, created_at, updated_at, deleted_at) VALUES (3, '3', 'Низкий', 0.1, 0.5, '2022-10-03 17:59:17', '2022-10-03 17:59:17', NULL);
INSERT INTO public.damage_level_spr (id, code, name, min_damage_level, max_damage_level, created_at, updated_at, deleted_at) VALUES (4, '4', 'Средний', 0.5, 2, '2022-10-03 17:59:17', '2022-10-03 17:59:17', NULL);
INSERT INTO public.damage_level_spr (id, code, name, min_damage_level, max_damage_level, created_at, updated_at, deleted_at) VALUES (5, '5', 'Высокий', 2, 5, '2022-10-03 17:59:17', '2022-10-03 17:59:17', NULL);
INSERT INTO public.damage_level_spr (id, code, name, min_damage_level, max_damage_level, created_at, updated_at, deleted_at) VALUES (6, '6', 'Критический', 5, 100, '2022-10-03 17:59:17', '2022-10-03 17:59:17', NULL);


--
-- TOC entry 3654 (class 0 OID 0)
-- Dependencies: 325
-- Name: damage_level_spr_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.damage_level_spr_id_seq', 6, true);


-- Completed on 2022-10-03 21:19:25 MSK

--
-- PostgreSQL database dump complete
--

