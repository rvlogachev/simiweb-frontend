--
-- PostgreSQL database dump
--

-- Dumped from database version 14.4 (Debian 14.4-1.pgdg110+1)
-- Dumped by pg_dump version 14.5 (Ubuntu 14.5-1.pgdg20.04+1)

-- Started on 2022-10-18 16:10:20 MSK

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
-- TOC entry 3656 (class 0 OID 23048)
-- Dependencies: 250
-- Data for Name: components_spr; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.components_spr (id, component_code, en_code, component_name, unit_code, group_code, priznak_graph, content_unit_code, extract_unit_code, created_at, updated_at, deleted_at) VALUES (1, 'NI', 'Ni', 'Никель', 'Т', 'ЦМ', 'Ni', '%', '%', '2022-10-18 12:51:26', '2022-10-18 12:51:26', NULL);
INSERT INTO public.components_spr (id, component_code, en_code, component_name, unit_code, group_code, priznak_graph, content_unit_code, extract_unit_code, created_at, updated_at, deleted_at) VALUES (2, 'CU', 'Cu', 'Медь', 'Т', 'ЦМ', 'Cu', '%', '%', '2022-10-18 12:51:26', '2022-10-18 12:51:26', NULL);
INSERT INTO public.components_spr (id, component_code, en_code, component_name, unit_code, group_code, priznak_graph, content_unit_code, extract_unit_code, created_at, updated_at, deleted_at) VALUES (3, 'CO', 'Co', 'Кобальт', 'Т', 'ЦМ', 'N/A', '%', '%', '2022-10-18 12:51:26', '2022-10-18 12:51:26', NULL);
INSERT INTO public.components_spr (id, component_code, en_code, component_name, unit_code, group_code, priznak_graph, content_unit_code, extract_unit_code, created_at, updated_at, deleted_at) VALUES (4, 'AU', 'Au', 'Золото', 'КГ', 'ДМ', 'N/A', 'Г/T', '%', '2022-10-18 12:51:26', '2022-10-18 12:51:26', NULL);
INSERT INTO public.components_spr (id, component_code, en_code, component_name, unit_code, group_code, priznak_graph, content_unit_code, extract_unit_code, created_at, updated_at, deleted_at) VALUES (5, 'AG', 'Ag', 'Серебро', 'КГ', 'ДМ', 'N/A', 'Г/T', '%', '2022-10-18 12:51:26', '2022-10-18 12:51:26', NULL);
INSERT INTO public.components_spr (id, component_code, en_code, component_name, unit_code, group_code, priznak_graph, content_unit_code, extract_unit_code, created_at, updated_at, deleted_at) VALUES (6, 'S', 'S', 'Сера', 'Т', 'ЦМ', 'N/A', '%', '%', '2022-10-18 12:51:26', '2022-10-18 12:51:26', NULL);
INSERT INTO public.components_spr (id, component_code, en_code, component_name, unit_code, group_code, priznak_graph, content_unit_code, extract_unit_code, created_at, updated_at, deleted_at) VALUES (7, 'SE', 'Se', 'Селен', 'Т', 'N/A', 'N/A', '%', '%', '2022-10-18 12:51:26', '2022-10-18 12:51:26', NULL);
INSERT INTO public.components_spr (id, component_code, en_code, component_name, unit_code, group_code, priznak_graph, content_unit_code, extract_unit_code, created_at, updated_at, deleted_at) VALUES (8, 'TE', 'Te', 'Теллур', 'Т', 'N/A', 'N/A', '%', '%', '2022-10-18 12:51:26', '2022-10-18 12:51:26', NULL);
INSERT INTO public.components_spr (id, component_code, en_code, component_name, unit_code, group_code, priznak_graph, content_unit_code, extract_unit_code, created_at, updated_at, deleted_at) VALUES (9, 'LI', 'Li', 'Литий', 'Т', 'N/A', 'N/A', '%', '%', '2022-10-18 12:51:26', '2022-10-18 12:51:26', NULL);
INSERT INTO public.components_spr (id, component_code, en_code, component_name, unit_code, group_code, priznak_graph, content_unit_code, extract_unit_code, created_at, updated_at, deleted_at) VALUES (10, 'S_MPG', 'S_mpg', 'МПГ', 'КГ', 'ДМ', 'N/A', 'Г/T', '%', '2022-10-18 12:51:26', '2022-10-18 12:51:26', NULL);
INSERT INTO public.components_spr (id, component_code, en_code, component_name, unit_code, group_code, priznak_graph, content_unit_code, extract_unit_code, created_at, updated_at, deleted_at) VALUES (11, 'RU', 'Ru', 'Рутений', 'КГ', 'ДМ', 'МПГ', 'Г/T', '%', '2022-10-18 12:51:26', '2022-10-18 12:51:26', NULL);
INSERT INTO public.components_spr (id, component_code, en_code, component_name, unit_code, group_code, priznak_graph, content_unit_code, extract_unit_code, created_at, updated_at, deleted_at) VALUES (12, 'RH', 'Rh', 'Родий', 'КГ', 'ДМ', 'МПГ', 'Г/T', '%', '2022-10-18 12:51:26', '2022-10-18 12:51:26', NULL);
INSERT INTO public.components_spr (id, component_code, en_code, component_name, unit_code, group_code, priznak_graph, content_unit_code, extract_unit_code, created_at, updated_at, deleted_at) VALUES (13, 'PD', 'Pd', 'Палладий', 'КГ', 'ДМ', 'МПГ', 'Г/T', '%', '2022-10-18 12:51:26', '2022-10-18 12:51:26', NULL);
INSERT INTO public.components_spr (id, component_code, en_code, component_name, unit_code, group_code, priznak_graph, content_unit_code, extract_unit_code, created_at, updated_at, deleted_at) VALUES (14, 'IR', 'Ir', 'Иридий', 'КГ', 'ДМ', 'МПГ', 'Г/T', '%', '2022-10-18 12:51:26', '2022-10-18 12:51:26', NULL);
INSERT INTO public.components_spr (id, component_code, en_code, component_name, unit_code, group_code, priznak_graph, content_unit_code, extract_unit_code, created_at, updated_at, deleted_at) VALUES (15, 'PT', 'Pt', 'Платина', 'КГ', 'ДМ', 'МПГ', 'Г/T', '%', '2022-10-18 12:51:26', '2022-10-18 12:51:26', NULL);


--
-- TOC entry 3662 (class 0 OID 0)
-- Dependencies: 249
-- Name: components_spr_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.components_spr_id_seq', 15, true);


-- Completed on 2022-10-18 16:10:20 MSK

--
-- PostgreSQL database dump complete
--

