--
-- PostgreSQL database dump
--

-- Dumped from database version 14.4 (Debian 14.4-1.pgdg110+1)
-- Dumped by pg_dump version 14.5 (Ubuntu 14.5-1.pgdg20.04+1)

-- Started on 2022-10-03 19:21:18 MSK

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
-- TOC entry 3654 (class 0 OID 17112)
-- Dependencies: 328
-- Data for Name: equipment_types_spr; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.equipment_types_spr (id, code, name, created_at, updated_at, deleted_at) VALUES (1, 'B', 'Сооружения', '2022-09-30 10:11:01', '2022-09-30 10:11:01', NULL);
INSERT INTO public.equipment_types_spr (id, code, name, created_at, updated_at, deleted_at) VALUES (2, 'D', 'Второстепенный ПА', '2022-09-30 10:11:01', '2022-09-30 10:11:01', NULL);
INSERT INTO public.equipment_types_spr (id, code, name, created_at, updated_at, deleted_at) VALUES (3, 'I', 'Важ.обеспеч. ПА', '2022-09-30 10:11:01', '2022-09-30 10:11:01', NULL);
INSERT INTO public.equipment_types_spr (id, code, name, created_at, updated_at, deleted_at) VALUES (4, 'M', 'Узел', '2022-09-30 10:11:01', '2022-09-30 10:11:01', NULL);
INSERT INTO public.equipment_types_spr (id, code, name, created_at, updated_at, deleted_at) VALUES (5, 'N', 'Искл.из ранжирования', '2022-09-30 10:11:01', '2022-09-30 10:11:01', NULL);
INSERT INTO public.equipment_types_spr (id, code, name, created_at, updated_at, deleted_at) VALUES (6, 'O', 'Основной ПА', '2022-09-30 10:11:01', '2022-09-30 10:11:01', NULL);
INSERT INTO public.equipment_types_spr (id, code, name, created_at, updated_at, deleted_at) VALUES (7, 'V', 'Вспомогательный ПА', '2022-09-30 10:11:01', '2022-09-30 10:11:01', NULL);
INSERT INTO public.equipment_types_spr (id, code, name, created_at, updated_at, deleted_at) VALUES (8, 'W', 'ОВСС Непром актив вне УПА', '2022-09-30 10:11:01', '2022-09-30 10:11:01', NULL);
INSERT INTO public.equipment_types_spr (id, code, name, created_at, updated_at, deleted_at) VALUES (9, 'X', 'Актив сторонней организации', '2022-09-30 10:11:01', '2022-09-30 10:11:01', NULL);
INSERT INTO public.equipment_types_spr (id, code, name, created_at, updated_at, deleted_at) VALUES (10, 'Y', 'Непром актив ФЦО УПА', '2022-09-30 10:11:01', '2022-09-30 10:11:01', NULL);
INSERT INTO public.equipment_types_spr (id, code, name, created_at, updated_at, deleted_at) VALUES (11, 'Z', 'Здания', '2022-09-30 10:11:01', '2022-09-30 10:11:01', NULL);


--
-- TOC entry 3660 (class 0 OID 0)
-- Dependencies: 327
-- Name: equipment_types_spr_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.equipment_types_spr_id_seq', 11, true);


-- Completed on 2022-10-03 19:21:18 MSK

--
-- PostgreSQL database dump complete
--

