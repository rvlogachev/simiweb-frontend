--
-- PostgreSQL database dump
--

-- Dumped from database version 14.4 (Debian 14.4-1.pgdg110+1)
-- Dumped by pg_dump version 14.5 (Ubuntu 14.5-1.pgdg20.04+1)

-- Started on 2022-10-18 16:11:00 MSK

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
-- TOC entry 3656 (class 0 OID 22932)
-- Dependencies: 240
-- Data for Name: production_units_spr; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.production_units_spr (id, production_unit_code, node_type, business_org_code, short_name, node_name, created_at, updated_at, deleted_at) VALUES (1, '0200-RSEV', 'E', '0200', 'РС', 'Рудник Северный', '2022-10-18 12:51:40', '2022-10-18 12:51:40', NULL);
INSERT INTO public.production_units_spr (id, production_unit_code, node_type, business_org_code, short_name, node_name, created_at, updated_at, deleted_at) VALUES (2, '0200-VSPC', 'E', '0200', 'ВСПЦ', 'Вспомогательные цеха', '2022-10-18 12:51:40', '2022-10-18 12:51:40', NULL);
INSERT INTO public.production_units_spr (id, production_unit_code, node_type, business_org_code, short_name, node_name, created_at, updated_at, deleted_at) VALUES (3, '0200-ENGC', 'E', '0200', 'ЦЭО', 'Центр энергообеспечения', '2022-10-18 12:51:40', '2022-10-18 12:51:40', NULL);
INSERT INTO public.production_units_spr (id, production_unit_code, node_type, business_org_code, short_name, node_name, created_at, updated_at, deleted_at) VALUES (4, '0200-MECO', 'E', '0200', 'МК', 'Металлургический комплекс', '2022-10-18 12:51:40', '2022-10-18 12:51:40', NULL);
INSERT INTO public.production_units_spr (id, production_unit_code, node_type, business_org_code, short_name, node_name, created_at, updated_at, deleted_at) VALUES (5, '0200-NPCH', 'E', '0200', 'НПЦ', 'Непроизводственные цеха', '2022-10-18 12:51:40', '2022-10-18 12:51:40', NULL);
INSERT INTO public.production_units_spr (id, production_unit_code, node_type, business_org_code, short_name, node_name, created_at, updated_at, deleted_at) VALUES (6, '0200-OBCO', 'E', '0200', 'ОФ', 'Обогатительный комплекс', '2022-10-18 12:51:40', '2022-10-18 12:51:40', NULL);
INSERT INTO public.production_units_spr (id, production_unit_code, node_type, business_org_code, short_name, node_name, created_at, updated_at, deleted_at) VALUES (7, '4900-NOBF', 'E', '4900', 'НОФ', 'НОФ', '2022-10-18 12:51:40', '2022-10-18 12:51:40', NULL);
INSERT INTO public.production_units_spr (id, production_unit_code, node_type, business_org_code, short_name, node_name, created_at, updated_at, deleted_at) VALUES (8, '4900-RZAP', 'E', '4900', 'РЗ', 'Рудник "Заполярный"', '2022-10-18 12:51:40', '2022-10-18 12:51:40', NULL);
INSERT INTO public.production_units_spr (id, production_unit_code, node_type, business_org_code, short_name, node_name, created_at, updated_at, deleted_at) VALUES (9, '0101-138S', 'E', '0101', 'НПТ', 'АТО "Норильскпромтранспорт"', '2022-10-18 12:51:40', '2022-10-18 12:51:40', NULL);
INSERT INTO public.production_units_spr (id, production_unit_code, node_type, business_org_code, short_name, node_name, created_at, updated_at, deleted_at) VALUES (10, '0101-CATK', 'E', '0101', 'ЦАТК', 'ЦАТК', '2022-10-18 12:51:40', '2022-10-18 12:51:40', NULL);
INSERT INTO public.production_units_spr (id, production_unit_code, node_type, business_org_code, short_name, node_name, created_at, updated_at, deleted_at) VALUES (11, '0101-CNGS', 'E', '0101', 'ЦНГТС', 'ЦНГТС', '2022-10-18 12:51:40', '2022-10-18 12:51:40', NULL);
INSERT INTO public.production_units_spr (id, production_unit_code, node_type, business_org_code, short_name, node_name, created_at, updated_at, deleted_at) VALUES (12, '0101-MEDN', 'E', '0101', 'МЗ', 'Медный завод', '2022-10-18 12:51:40', '2022-10-18 12:51:40', NULL);
INSERT INTO public.production_units_spr (id, production_unit_code, node_type, business_org_code, short_name, node_name, created_at, updated_at, deleted_at) VALUES (13, '0101-NMZK', 'E', '0101', 'НМЗ', 'НМЗ', '2022-10-18 12:51:40', '2022-10-18 12:51:40', NULL);
INSERT INTO public.production_units_spr (id, production_unit_code, node_type, business_org_code, short_name, node_name, created_at, updated_at, deleted_at) VALUES (14, '0101-PTZT', 'E', '0101', 'ПТЖТ', 'ПТЖТ', '2022-10-18 12:51:40', '2022-10-18 12:51:40', NULL);
INSERT INTO public.production_units_spr (id, production_unit_code, node_type, business_org_code, short_name, node_name, created_at, updated_at, deleted_at) VALUES (15, '0101-RKOM', 'E', '0101', 'РК', 'Рудник "Комсомольский"', '2022-10-18 12:51:40', '2022-10-18 12:51:40', NULL);
INSERT INTO public.production_units_spr (id, production_unit_code, node_type, business_org_code, short_name, node_name, created_at, updated_at, deleted_at) VALUES (16, '0101-RMAY', 'E', '0101', 'РМ', 'Рудник "Маяк"', '2022-10-18 12:51:40', '2022-10-18 12:51:40', NULL);
INSERT INTO public.production_units_spr (id, production_unit_code, node_type, business_org_code, short_name, node_name, created_at, updated_at, deleted_at) VALUES (17, '0101-ROKT', 'E', '0101', 'РО', 'Рудник "Октябрьский"', '2022-10-18 12:51:40', '2022-10-18 12:51:40', NULL);
INSERT INTO public.production_units_spr (id, production_unit_code, node_type, business_org_code, short_name, node_name, created_at, updated_at, deleted_at) VALUES (18, '0101-RSKL', 'E', '0101', 'РС', 'Рудник "Скалистый"', '2022-10-18 12:51:40', '2022-10-18 12:51:40', NULL);
INSERT INTO public.production_units_spr (id, production_unit_code, node_type, business_org_code, short_name, node_name, created_at, updated_at, deleted_at) VALUES (19, '0101-RTAI', 'E', '0101', 'РТ', 'Рудник "Таймырский"', '2022-10-18 12:51:40', '2022-10-18 12:51:40', NULL);
INSERT INTO public.production_units_spr (id, production_unit_code, node_type, business_org_code, short_name, node_name, created_at, updated_at, deleted_at) VALUES (20, '0101-SPGT', 'E', '0101', 'СПГТ', 'СПГТ', '2022-10-18 12:51:40', '2022-10-18 12:51:40', NULL);
INSERT INTO public.production_units_spr (id, production_unit_code, node_type, business_org_code, short_name, node_name, created_at, updated_at, deleted_at) VALUES (21, '0101-TOF0', 'E', '0101', 'ТОФ', 'ТОФ', '2022-10-18 12:51:40', '2022-10-18 12:51:40', NULL);
INSERT INTO public.production_units_spr (id, production_unit_code, node_type, business_org_code, short_name, node_name, created_at, updated_at, deleted_at) VALUES (22, '0102-2000', 'E', '0102', 'ЗТФ', 'ЗТФ', '2022-10-18 12:51:40', '2022-10-18 12:51:40', NULL);
INSERT INTO public.production_units_spr (id, production_unit_code, node_type, business_org_code, short_name, node_name, created_at, updated_at, deleted_at) VALUES (23, '0000-0000', 'E', '0000', 'СтП ЗФ', 'Сторонние поставщики ЗФ', '2022-10-18 12:51:40', '2022-10-18 12:51:40', NULL);
INSERT INTO public.production_units_spr (id, production_unit_code, node_type, business_org_code, short_name, node_name, created_at, updated_at, deleted_at) VALUES (24, '0001-0001', 'E', '0001', 'СтП КГМК', 'Сторонние поставщики КГМК', '2022-10-18 12:51:40', '2022-10-18 12:51:40', NULL);


--
-- TOC entry 3662 (class 0 OID 0)
-- Dependencies: 239
-- Name: production_units_spr_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.production_units_spr_id_seq', 24, true);


-- Completed on 2022-10-18 16:11:00 MSK

--
-- PostgreSQL database dump complete
--

