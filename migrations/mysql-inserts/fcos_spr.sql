--
-- PostgreSQL database dump
--

-- Dumped from database version 14.4 (Debian 14.4-1.pgdg110+1)
-- Dumped by pg_dump version 14.5 (Ubuntu 14.5-1.pgdg20.04+1)

-- Started on 2022-10-03 19:18:24 MSK

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
-- TOC entry 3656 (class 0 OID 16552)
-- Dependencies: 242
-- Data for Name: fcos_spr; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.fcos_spr (id, business_org_code, plan_fabric, code, name, short_name, created_at, updated_at, deleted_at) VALUES (1, '0200', '0210', 'B01', 'ДПБ', 'ДПБ', '2022-09-30 10:09:32', '2022-09-30 10:09:32', NULL);
INSERT INTO public.fcos_spr (id, business_org_code, plan_fabric, code, name, short_name, created_at, updated_at, deleted_at) VALUES (2, '0200', '0210', 'B02', 'ДПБ УпрПожБез', 'УПБ', '2022-09-30 10:09:32', '2022-09-30 10:09:32', NULL);
INSERT INTO public.fcos_spr (id, business_org_code, plan_fabric, code, name, short_name, created_at, updated_at, deleted_at) VALUES (3, '0200', '0210', 'D01', 'ДИТ', 'ДИТ', '2022-09-30 10:09:32', '2022-09-30 10:09:32', NULL);
INSERT INTO public.fcos_spr (id, business_org_code, plan_fabric, code, name, short_name, created_at, updated_at, deleted_at) VALUES (4, '0200', '0210', 'D02', 'УпрА', 'УпрА', '2022-09-30 10:09:32', '2022-09-30 10:09:32', NULL);
INSERT INTO public.fcos_spr (id, business_org_code, plan_fabric, code, name, short_name, created_at, updated_at, deleted_at) VALUES (5, '0200', '0210', 'D03', 'УЗИТ', 'УЗИТ', '2022-09-30 10:09:32', '2022-09-30 10:09:32', NULL);
INSERT INTO public.fcos_spr (id, business_org_code, plan_fabric, code, name, short_name, created_at, updated_at, deleted_at) VALUES (6, '0200', '0210', 'E01', 'УГЭ', 'УГЭ', '2022-09-30 10:09:32', '2022-09-30 10:09:32', NULL);
INSERT INTO public.fcos_spr (id, business_org_code, plan_fabric, code, name, short_name, created_at, updated_at, deleted_at) VALUES (7, '0200', '0210', 'F01', 'ТехУ', 'ТехУ', '2022-09-30 10:09:32', '2022-09-30 10:09:32', NULL);
INSERT INTO public.fcos_spr (id, business_org_code, plan_fabric, code, name, short_name, created_at, updated_at, deleted_at) VALUES (8, '0200', '0210', 'K01', 'БКС ПН', 'БКС ПН', '2022-09-30 10:09:32', '2022-09-30 10:09:32', NULL);
INSERT INTO public.fcos_spr (id, business_org_code, plan_fabric, code, name, short_name, created_at, updated_at, deleted_at) VALUES (9, '0200', '0210', 'M01', 'УГМ', 'УГМ', '2022-09-30 10:09:32', '2022-09-30 10:09:32', NULL);
INSERT INTO public.fcos_spr (id, business_org_code, plan_fabric, code, name, short_name, created_at, updated_at, deleted_at) VALUES (10, '0200', '0210', 'N01', 'ДТН', 'ДТН', '2022-09-30 10:09:32', '2022-09-30 10:09:32', NULL);
INSERT INTO public.fcos_spr (id, business_org_code, plan_fabric, code, name, short_name, created_at, updated_at, deleted_at) VALUES (11, '0200', '0210', 'P01', 'ДБ', 'ДБ', '2022-09-30 10:09:32', '2022-09-30 10:09:32', NULL);
INSERT INTO public.fcos_spr (id, business_org_code, plan_fabric, code, name, short_name, created_at, updated_at, deleted_at) VALUES (12, '0200', '0210', 'S01', 'ЦСО', 'ЦСО', '2022-09-30 10:09:32', '2022-09-30 10:09:32', NULL);
INSERT INTO public.fcos_spr (id, business_org_code, plan_fabric, code, name, short_name, created_at, updated_at, deleted_at) VALUES (13, '0200', '0210', 'T01', 'ТУ', 'ТУ', '2022-09-30 10:09:32', '2022-09-30 10:09:32', NULL);
INSERT INTO public.fcos_spr (id, business_org_code, plan_fabric, code, name, short_name, created_at, updated_at, deleted_at) VALUES (14, '0200', '0210', 'U01', 'УЭБ', 'УЭБ', '2022-09-30 10:09:32', '2022-09-30 10:09:32', NULL);
INSERT INTO public.fcos_spr (id, business_org_code, plan_fabric, code, name, short_name, created_at, updated_at, deleted_at) VALUES (15, '0200', '0210', 'W01', 'ГУ', 'ГУ', '2022-09-30 10:09:32', '2022-09-30 10:09:32', NULL);
INSERT INTO public.fcos_spr (id, business_org_code, plan_fabric, code, name, short_name, created_at, updated_at, deleted_at) VALUES (16, '4900', '300U', 'A30', 'УА', 'УА', '2022-09-30 10:09:32', '2022-09-30 10:09:32', NULL);
INSERT INTO public.fcos_spr (id, business_org_code, plan_fabric, code, name, short_name, created_at, updated_at, deleted_at) VALUES (17, '4900', '300U', 'A31', 'УА ИВТ', 'УА', '2022-09-30 10:09:32', '2022-09-30 10:09:32', NULL);
INSERT INTO public.fcos_spr (id, business_org_code, plan_fabric, code, name, short_name, created_at, updated_at, deleted_at) VALUES (18, '4900', '300U', 'A32', 'УА ППА', 'УА', '2022-09-30 10:09:32', '2022-09-30 10:09:32', NULL);
INSERT INTO public.fcos_spr (id, business_org_code, plan_fabric, code, name, short_name, created_at, updated_at, deleted_at) VALUES (19, '4900', '300U', 'A33', 'УА КИП', 'УА', '2022-09-30 10:09:32', '2022-09-30 10:09:32', NULL);
INSERT INTO public.fcos_spr (id, business_org_code, plan_fabric, code, name, short_name, created_at, updated_at, deleted_at) VALUES (20, '4900', '300U', 'A34', 'УА СиСА', 'УА', '2022-09-30 10:09:32', '2022-09-30 10:09:32', NULL);
INSERT INTO public.fcos_spr (id, business_org_code, plan_fabric, code, name, short_name, created_at, updated_at, deleted_at) VALUES (21, '4900', '300U', 'A35', 'УА СиСС', 'УА', '2022-09-30 10:09:32', '2022-09-30 10:09:32', NULL);
INSERT INTO public.fcos_spr (id, business_org_code, plan_fabric, code, name, short_name, created_at, updated_at, deleted_at) VALUES (22, '4900', '300U', 'E30', 'УГЭ', 'УГЭ', '2022-09-30 10:09:32', '2022-09-30 10:09:32', NULL);
INSERT INTO public.fcos_spr (id, business_org_code, plan_fabric, code, name, short_name, created_at, updated_at, deleted_at) VALUES (23, '4900', '300U', 'E31', 'УГЭ ЭН', 'УГЭ', '2022-09-30 10:09:32', '2022-09-30 10:09:32', NULL);
INSERT INTO public.fcos_spr (id, business_org_code, plan_fabric, code, name, short_name, created_at, updated_at, deleted_at) VALUES (24, '4900', '300U', 'E32', 'УГЭ ЭО', 'УГЭ', '2022-09-30 10:09:32', '2022-09-30 10:09:32', NULL);
INSERT INTO public.fcos_spr (id, business_org_code, plan_fabric, code, name, short_name, created_at, updated_at, deleted_at) VALUES (25, '4900', '300U', 'G30', 'ГГ', 'ГГ', '2022-09-30 10:09:32', '2022-09-30 10:09:32', NULL);
INSERT INTO public.fcos_spr (id, business_org_code, plan_fabric, code, name, short_name, created_at, updated_at, deleted_at) VALUES (26, '4900', '300U', 'M30', 'УГМ', 'УГМ', '2022-09-30 10:09:32', '2022-09-30 10:09:32', NULL);
INSERT INTO public.fcos_spr (id, business_org_code, plan_fabric, code, name, short_name, created_at, updated_at, deleted_at) VALUES (27, '4900', '300U', 'M31', 'УГМ ЗиС', 'УГМ', '2022-09-30 10:09:32', '2022-09-30 10:09:32', NULL);
INSERT INTO public.fcos_spr (id, business_org_code, plan_fabric, code, name, short_name, created_at, updated_at, deleted_at) VALUES (28, '4900', '300U', 'M32', 'УГМ ОБ', 'УГМ', '2022-09-30 10:09:32', '2022-09-30 10:09:32', NULL);
INSERT INTO public.fcos_spr (id, business_org_code, plan_fabric, code, name, short_name, created_at, updated_at, deleted_at) VALUES (29, '4900', '300U', 'M33', 'УГМ ДМиО', 'УГМ', '2022-09-30 10:09:32', '2022-09-30 10:09:32', NULL);
INSERT INTO public.fcos_spr (id, business_org_code, plan_fabric, code, name, short_name, created_at, updated_at, deleted_at) VALUES (30, '4900', '300U', 'M34', 'УГМ ПВС', 'УГМ', '2022-09-30 10:09:32', '2022-09-30 10:09:32', NULL);
INSERT INTO public.fcos_spr (id, business_org_code, plan_fabric, code, name, short_name, created_at, updated_at, deleted_at) VALUES (31, '4900', '300U', 'T30', 'ТУ', 'ТУ', '2022-09-30 10:09:32', '2022-09-30 10:09:32', NULL);
INSERT INTO public.fcos_spr (id, business_org_code, plan_fabric, code, name, short_name, created_at, updated_at, deleted_at) VALUES (32, '0101', '100U', 'A10', 'ДАиЦП', 'ДАиЦП', '2022-09-30 10:09:32', '2022-09-30 10:09:32', NULL);
INSERT INTO public.fcos_spr (id, business_org_code, plan_fabric, code, name, short_name, created_at, updated_at, deleted_at) VALUES (33, '0101', '100U', 'A11', 'ДАиЦППодряд', 'ДАиЦП', '2022-09-30 10:09:32', '2022-09-30 10:09:32', NULL);
INSERT INTO public.fcos_spr (id, business_org_code, plan_fabric, code, name, short_name, created_at, updated_at, deleted_at) VALUES (34, '0101', '100U', 'A12', 'ДАиЦПППА', 'ДАиЦП', '2022-09-30 10:09:32', '2022-09-30 10:09:32', NULL);
INSERT INTO public.fcos_spr (id, business_org_code, plan_fabric, code, name, short_name, created_at, updated_at, deleted_at) VALUES (35, '0101', '100U', 'A13', 'СМСПМетрология', 'ДАиЦП', '2022-09-30 10:09:32', '2022-09-30 10:09:32', NULL);
INSERT INTO public.fcos_spr (id, business_org_code, plan_fabric, code, name, short_name, created_at, updated_at, deleted_at) VALUES (36, '0101', '100U', 'E10', 'ДГЭ', 'ДГЭ', '2022-09-30 10:09:32', '2022-09-30 10:09:32', NULL);
INSERT INTO public.fcos_spr (id, business_org_code, plan_fabric, code, name, short_name, created_at, updated_at, deleted_at) VALUES (37, '0101', '100U', 'E11', 'ДГЭЭН', 'ДГЭ', '2022-09-30 10:09:32', '2022-09-30 10:09:32', NULL);
INSERT INTO public.fcos_spr (id, business_org_code, plan_fabric, code, name, short_name, created_at, updated_at, deleted_at) VALUES (38, '0101', '100U', 'E12', 'ДГЭЭО', 'ДГЭ', '2022-09-30 10:09:32', '2022-09-30 10:09:32', NULL);
INSERT INTO public.fcos_spr (id, business_org_code, plan_fabric, code, name, short_name, created_at, updated_at, deleted_at) VALUES (39, '0101', '100U', 'F10', 'ПОРПРО', 'ПОРПРО', '2022-09-30 10:09:32', '2022-09-30 10:09:32', NULL);
INSERT INTO public.fcos_spr (id, business_org_code, plan_fabric, code, name, short_name, created_at, updated_at, deleted_at) VALUES (40, '0101', '100U', 'G10', 'ЦУГТ', 'ЦУГТ', '2022-09-30 10:09:32', '2022-09-30 10:09:32', NULL);
INSERT INTO public.fcos_spr (id, business_org_code, plan_fabric, code, name, short_name, created_at, updated_at, deleted_at) VALUES (41, '0101', '100U', 'M10', 'ДГМ', 'ДГМ', '2022-09-30 10:09:32', '2022-09-30 10:09:32', NULL);
INSERT INTO public.fcos_spr (id, business_org_code, plan_fabric, code, name, short_name, created_at, updated_at, deleted_at) VALUES (42, '0101', '100U', 'M11', 'ДГМЗиС', 'ДГМ', '2022-09-30 10:09:32', '2022-09-30 10:09:32', NULL);
INSERT INTO public.fcos_spr (id, business_org_code, plan_fabric, code, name, short_name, created_at, updated_at, deleted_at) VALUES (43, '0101', '100U', 'M12', 'ДГМОБ', 'ДГМ', '2022-09-30 10:09:32', '2022-09-30 10:09:32', NULL);
INSERT INTO public.fcos_spr (id, business_org_code, plan_fabric, code, name, short_name, created_at, updated_at, deleted_at) VALUES (44, '0101', '100U', 'M13', 'ДГМОБГО', 'ДГМ', '2022-09-30 10:09:32', '2022-09-30 10:09:32', NULL);
INSERT INTO public.fcos_spr (id, business_org_code, plan_fabric, code, name, short_name, created_at, updated_at, deleted_at) VALUES (45, '0101', '100U', 'M14', 'ДГМПВС', 'ДГМ', '2022-09-30 10:09:32', '2022-09-30 10:09:32', NULL);
INSERT INTO public.fcos_spr (id, business_org_code, plan_fabric, code, name, short_name, created_at, updated_at, deleted_at) VALUES (46, '0101', '100U', 'M16', 'ДГМТО', 'ДГМ', '2022-09-30 10:09:32', '2022-09-30 10:09:32', NULL);
INSERT INTO public.fcos_spr (id, business_org_code, plan_fabric, code, name, short_name, created_at, updated_at, deleted_at) VALUES (47, '0101', '100U', 'M17', 'ДГММТР', 'ДГМ', '2022-09-30 10:09:32', '2022-09-30 10:09:32', NULL);
INSERT INTO public.fcos_spr (id, business_org_code, plan_fabric, code, name, short_name, created_at, updated_at, deleted_at) VALUES (48, '0101', '100U', 'T10', 'ТД', 'ТД', '2022-09-30 10:09:32', '2022-09-30 10:09:32', NULL);
INSERT INTO public.fcos_spr (id, business_org_code, plan_fabric, code, name, short_name, created_at, updated_at, deleted_at) VALUES (49, '0101', '100U', 'T11', 'ТДОтдж/дтран', 'ТД', '2022-09-30 10:09:32', '2022-09-30 10:09:32', NULL);
INSERT INTO public.fcos_spr (id, business_org_code, plan_fabric, code, name, short_name, created_at, updated_at, deleted_at) VALUES (50, '0101', '100U', 'T12', 'ТДОтдремтехн', 'ТД', '2022-09-30 10:09:32', '2022-09-30 10:09:32', NULL);
INSERT INTO public.fcos_spr (id, business_org_code, plan_fabric, code, name, short_name, created_at, updated_at, deleted_at) VALUES (51, '0101', '100U', 'T13', 'ТДУКРЖДТ', 'ТД', '2022-09-30 10:09:32', '2022-09-30 10:09:32', NULL);
INSERT INTO public.fcos_spr (id, business_org_code, plan_fabric, code, name, short_name, created_at, updated_at, deleted_at) VALUES (52, '0101', '100U', 'T14', 'ТДОтдУчМонАвто', 'ТД', '2022-09-30 10:09:32', '2022-09-30 10:09:32', NULL);
INSERT INTO public.fcos_spr (id, business_org_code, plan_fabric, code, name, short_name, created_at, updated_at, deleted_at) VALUES (53, '0101', '100U', 'Z10', 'ЦГТС', 'ЦГТС', '2022-09-30 10:09:32', '2022-09-30 10:09:32', NULL);


--
-- TOC entry 3662 (class 0 OID 0)
-- Dependencies: 241
-- Name: fcos_spr_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.fcos_spr_id_seq', 53, true);


-- Completed on 2022-10-03 19:18:24 MSK

--
-- PostgreSQL database dump complete
--

