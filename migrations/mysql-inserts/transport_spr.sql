--
-- PostgreSQL database dump
--

-- Dumped from database version 14.4 (Debian 14.4-1.pgdg110+1)
-- Dumped by pg_dump version 14.5 (Ubuntu 14.5-1.pgdg20.04+1)

-- Started on 2022-10-18 16:13:11 MSK

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
-- TOC entry 3662 (class 0 OID 23140)
-- Dependencies: 262
-- Data for Name: transport_spr; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.transport_spr (id, node_code, node_type, business_org_code, production_unit_code, redev_code, transport_type_code, sap_code, node_name, tag_alternative, period, delay_time, max_power, created_at, updated_at, deleted_at) VALUES (1, 'DR-109W_TO-104W_Ct_1', 'T', '0101', '0101-TOF0', 'DR-109W', 'Ct', NULL, 'Транспортировка руды р.Таймырский', NULL, NULL, NULL, NULL, '2022-10-18 12:52:21', '2022-10-18 12:52:21', NULL);
INSERT INTO public.transport_spr (id, node_code, node_type, business_org_code, production_unit_code, redev_code, transport_type_code, sap_code, node_name, tag_alternative, period, delay_time, max_power, created_at, updated_at, deleted_at) VALUES (2, 'DR-109W_TO-104W_Av_2', 'T', '0101', '0101-CATK', 'DR-109W', 'Av', NULL, 'Транспортировка руды р.Таймырский', 'DR-109W_TO-104W_Ct_1', NULL, NULL, NULL, '2022-10-18 12:52:21', '2022-10-18 12:52:21', NULL);
INSERT INTO public.transport_spr (id, node_code, node_type, business_org_code, production_unit_code, redev_code, transport_type_code, sap_code, node_name, tag_alternative, period, delay_time, max_power, created_at, updated_at, deleted_at) VALUES (3, 'DR-109W_PS-105W_Ri_1', 'T', '0101', '0101-PTZT', NULL, 'Ri', NULL, 'Транспортировка руды р.Таймырский', NULL, NULL, NULL, NULL, '2022-10-18 12:52:21', '2022-10-18 12:52:21', NULL);
INSERT INTO public.transport_spr (id, node_code, node_type, business_org_code, production_unit_code, redev_code, transport_type_code, sap_code, node_name, tag_alternative, period, delay_time, max_power, created_at, updated_at, deleted_at) VALUES (4, 'DR-110W_TO-104W_Ct_1', 'T', '0101', '0101-TOF0', 'DR-110W', 'Ct', NULL, 'Транспортировка руды р.Октябрьский', NULL, NULL, NULL, NULL, '2022-10-18 12:52:21', '2022-10-18 12:52:21', NULL);
INSERT INTO public.transport_spr (id, node_code, node_type, business_org_code, production_unit_code, redev_code, transport_type_code, sap_code, node_name, tag_alternative, period, delay_time, max_power, created_at, updated_at, deleted_at) VALUES (5, 'DR-110W_TO-104W_Av_2', 'T', '0101', '0101-CATK', 'DR-110W', 'Av', NULL, 'Транспортировка руды р.Октябрьский', 'DR-110W_TO-104W_Ct_1', NULL, NULL, NULL, '2022-10-18 12:52:21', '2022-10-18 12:52:21', NULL);
INSERT INTO public.transport_spr (id, node_code, node_type, business_org_code, production_unit_code, redev_code, transport_type_code, sap_code, node_name, tag_alternative, period, delay_time, max_power, created_at, updated_at, deleted_at) VALUES (6, 'DR-114W_PM-102W_Ri_1', 'T', '0101', '0101-PTZT', NULL, 'Ri', NULL, 'Транспортировка руды р.Маяк', NULL, NULL, NULL, NULL, '2022-10-18 12:52:21', '2022-10-18 12:52:21', NULL);
INSERT INTO public.transport_spr (id, node_code, node_type, business_org_code, production_unit_code, redev_code, transport_type_code, sap_code, node_name, tag_alternative, period, delay_time, max_power, created_at, updated_at, deleted_at) VALUES (7, 'DR-133W_TO-104W_Av_1', 'T', '0101', '0101-CATK', 'DR-133W', 'Av', NULL, 'Транспортировка руды р.Скалистый', NULL, NULL, NULL, NULL, '2022-10-18 12:52:21', '2022-10-18 12:52:21', NULL);
INSERT INTO public.transport_spr (id, node_code, node_type, business_org_code, production_unit_code, redev_code, transport_type_code, sap_code, node_name, tag_alternative, period, delay_time, max_power, created_at, updated_at, deleted_at) VALUES (8, 'TO-104W_TF-102W_Ht_1', 'T', '0101', '0101-TOF0', 'TO-104W', 'Ht', NULL, 'Транспортировка концентрата', NULL, NULL, NULL, NULL, '2022-10-18 12:52:21', '2022-10-18 12:52:21', NULL);
INSERT INTO public.transport_spr (id, node_code, node_type, business_org_code, production_unit_code, redev_code, transport_type_code, sap_code, node_name, tag_alternative, period, delay_time, max_power, created_at, updated_at, deleted_at) VALUES (9, 'TO-104W_SN-105W_Ht_1', 'T', '0101', '0101-TOF0', 'TO-104W', 'Ht', NULL, 'Транспортировка концентрата', NULL, NULL, NULL, NULL, '2022-10-18 12:52:21', '2022-10-18 12:52:21', NULL);
INSERT INTO public.transport_spr (id, node_code, node_type, business_org_code, production_unit_code, redev_code, transport_type_code, sap_code, node_name, tag_alternative, period, delay_time, max_power, created_at, updated_at, deleted_at) VALUES (10, 'TO-104W_GN-105W_Ht_1', 'T', '0101', '0101-TOF0', 'TO-104W', 'Ht', NULL, 'Транспортировка металлосодержащего продукта', NULL, NULL, NULL, NULL, '2022-10-18 12:52:21', '2022-10-18 12:52:21', NULL);
INSERT INTO public.transport_spr (id, node_code, node_type, business_org_code, production_unit_code, redev_code, transport_type_code, sap_code, node_name, tag_alternative, period, delay_time, max_power, created_at, updated_at, deleted_at) VALUES (11, 'BN-102W_TO-104W_Av_1', 'T', '0101', '0101-CATK', 'BN-102W', 'Av', NULL, 'Транспортировка бисульфита', NULL, NULL, NULL, NULL, '2022-10-18 12:52:21', '2022-10-18 12:52:21', NULL);
INSERT INTO public.transport_spr (id, node_code, node_type, business_org_code, production_unit_code, redev_code, transport_type_code, sap_code, node_name, tag_alternative, period, delay_time, max_power, created_at, updated_at, deleted_at) VALUES (12, 'BN-102W_IF-301W_Av_1', 'T', '0101', '0101-CATK', 'BN-102W', 'Av', NULL, 'Транспортировка бисульфита', NULL, NULL, NULL, NULL, '2022-10-18 12:52:21', '2022-10-18 12:52:21', NULL);
INSERT INTO public.transport_spr (id, node_code, node_type, business_org_code, production_unit_code, redev_code, transport_type_code, sap_code, node_name, tag_alternative, period, delay_time, max_power, created_at, updated_at, deleted_at) VALUES (13, 'KM-102W_PS-105W_Ri_1', 'T', '0101', '0101-PTZT', NULL, 'Ri', NULL, 'Транспортировка шлака никелевого', NULL, NULL, NULL, NULL, '2022-10-18 12:52:21', '2022-10-18 12:52:21', NULL);
INSERT INTO public.transport_spr (id, node_code, node_type, business_org_code, production_unit_code, redev_code, transport_type_code, sap_code, node_name, tag_alternative, period, delay_time, max_power, created_at, updated_at, deleted_at) VALUES (14, 'RM-102W_GN-105W_Av_1', 'T', '0101', '0101-CATK', 'RM-102W', 'Av', NULL, 'Транспортировка растворов', NULL, NULL, NULL, NULL, '2022-10-18 12:52:21', '2022-10-18 12:52:21', NULL);
INSERT INTO public.transport_spr (id, node_code, node_type, business_org_code, production_unit_code, redev_code, transport_type_code, sap_code, node_name, tag_alternative, period, delay_time, max_power, created_at, updated_at, deleted_at) VALUES (15, 'KA-102W_GN-105W_Av_1', 'T', '0101', '0101-CATK', 'KA-102W', 'Av', NULL, 'Транспортировка растворов', NULL, NULL, NULL, NULL, '2022-10-18 12:52:21', '2022-10-18 12:52:21', NULL);
INSERT INTO public.transport_spr (id, node_code, node_type, business_org_code, production_unit_code, redev_code, transport_type_code, sap_code, node_name, tag_alternative, period, delay_time, max_power, created_at, updated_at, deleted_at) VALUES (16, 'KP-102W_GN-105W_Av_1', 'T', '0101', '0101-CATK', 'KP-102W', 'Av', NULL, 'Транспортировка растворов', NULL, NULL, NULL, NULL, '2022-10-18 12:52:21', '2022-10-18 12:52:21', NULL);
INSERT INTO public.transport_spr (id, node_code, node_type, business_org_code, production_unit_code, redev_code, transport_type_code, sap_code, node_name, tag_alternative, period, delay_time, max_power, created_at, updated_at, deleted_at) VALUES (17, 'SB-102W_GN-105W_Av_1', 'T', '0101', '0101-CATK', 'SB-102W', 'Av', NULL, 'Транспортировка серы', NULL, NULL, NULL, NULL, '2022-10-18 12:52:21', '2022-10-18 12:52:21', NULL);
INSERT INTO public.transport_spr (id, node_code, node_type, business_org_code, production_unit_code, redev_code, transport_type_code, sap_code, node_name, tag_alternative, period, delay_time, max_power, created_at, updated_at, deleted_at) VALUES (18, 'CN-105W_MP-600U_Ri_1', 'T', '0101', '0101-PTZT', NULL, 'Ri', NULL, 'Транспортировка файнштейна', NULL, NULL, NULL, NULL, '2022-10-18 12:52:21', '2022-10-18 12:52:21', NULL);
INSERT INTO public.transport_spr (id, node_code, node_type, business_org_code, production_unit_code, redev_code, transport_type_code, sap_code, node_name, tag_alternative, period, delay_time, max_power, created_at, updated_at, deleted_at) VALUES (19, 'CN-105W_KM-102W_Ri_1', 'T', '0101', '0101-PTZT', NULL, 'Ri', NULL, 'Транспортировка оборотов НМЗ', NULL, NULL, NULL, NULL, '2022-10-18 12:52:21', '2022-10-18 12:52:21', NULL);
INSERT INTO public.transport_spr (id, node_code, node_type, business_org_code, production_unit_code, redev_code, transport_type_code, sap_code, node_name, tag_alternative, period, delay_time, max_power, created_at, updated_at, deleted_at) VALUES (20, 'GN-105W_TF-102W_Ht_1', 'T', '0101', '0101-TOF0', 'GN-105W', 'Ht', NULL, 'Транспортировка концентрата', NULL, NULL, NULL, NULL, '2022-10-18 12:52:21', '2022-10-18 12:52:21', NULL);
INSERT INTO public.transport_spr (id, node_code, node_type, business_org_code, production_unit_code, redev_code, transport_type_code, sap_code, node_name, tag_alternative, period, delay_time, max_power, created_at, updated_at, deleted_at) VALUES (21, 'DR-302W_IF-301W_Ri_1', 'T', '4900', '0101-PTZT', NULL, 'Ri', NULL, 'Транспортировка руды ш.Заполярная', NULL, NULL, NULL, NULL, '2022-10-18 12:52:21', '2022-10-18 12:52:21', NULL);
INSERT INTO public.transport_spr (id, node_code, node_type, business_org_code, production_unit_code, redev_code, transport_type_code, sap_code, node_name, tag_alternative, period, delay_time, max_power, created_at, updated_at, deleted_at) VALUES (22, 'D1-302W_IF-301W_Av_1', 'T', '4900', '0101-CATK', 'D1-302W', 'Av', NULL, 'Транспортировка руды к.Заполярный', NULL, NULL, NULL, NULL, '2022-10-18 12:52:21', '2022-10-18 12:52:21', NULL);
INSERT INTO public.transport_spr (id, node_code, node_type, business_org_code, production_unit_code, redev_code, transport_type_code, sap_code, node_name, tag_alternative, period, delay_time, max_power, created_at, updated_at, deleted_at) VALUES (23, 'IF-301W_TF-102W_Ht_1', 'T', '4900', '4900-NOBF', 'IF-301W', 'Ht', NULL, 'Транспортировка концентрата', NULL, NULL, NULL, NULL, '2022-10-18 12:52:21', '2022-10-18 12:52:21', NULL);
INSERT INTO public.transport_spr (id, node_code, node_type, business_org_code, production_unit_code, redev_code, transport_type_code, sap_code, node_name, tag_alternative, period, delay_time, max_power, created_at, updated_at, deleted_at) VALUES (24, 'IF-301W_SN-105W_Ht_1', 'T', '4900', '4900-NOBF', 'IF-301W', 'Ht', NULL, 'Транспортировка концентрата', NULL, NULL, NULL, NULL, '2022-10-18 12:52:21', '2022-10-18 12:52:21', NULL);
INSERT INTO public.transport_spr (id, node_code, node_type, business_org_code, production_unit_code, redev_code, transport_type_code, sap_code, node_name, tag_alternative, period, delay_time, max_power, created_at, updated_at, deleted_at) VALUES (25, 'MP-600U_PM-102W_Ri_1', 'T', '0102', '0101-PTZT', NULL, 'Ri', NULL, 'Транспортировка оборотов КГМК', NULL, NULL, NULL, NULL, '2022-10-18 12:52:21', '2022-10-18 12:52:21', NULL);
INSERT INTO public.transport_spr (id, node_code, node_type, business_org_code, production_unit_code, redev_code, transport_type_code, sap_code, node_name, tag_alternative, period, delay_time, max_power, created_at, updated_at, deleted_at) VALUES (26, 'MP-600U_ON-105W_Ri_1', 'T', '0102', '0101-PTZT', NULL, 'Ri', NULL, 'Транспортировка оборотов КГМК', NULL, NULL, NULL, NULL, '2022-10-18 12:52:21', '2022-10-18 12:52:21', NULL);
INSERT INTO public.transport_spr (id, node_code, node_type, business_org_code, production_unit_code, redev_code, transport_type_code, sap_code, node_name, tag_alternative, period, delay_time, max_power, created_at, updated_at, deleted_at) VALUES (27, 'MP-600U_CN-105W_Ri_1', 'T', '0102', '0101-PTZT', NULL, 'Ri', NULL, 'Транспортировка оборотов КГМК', NULL, NULL, NULL, NULL, '2022-10-18 12:52:21', '2022-10-18 12:52:21', NULL);
INSERT INTO public.transport_spr (id, node_code, node_type, business_org_code, production_unit_code, redev_code, transport_type_code, sap_code, node_name, tag_alternative, period, delay_time, max_power, created_at, updated_at, deleted_at) VALUES (28, 'TO-104W_НН-104W_Ht_1', 'T', '0101', '0101-TOF0', 'TO-104W', 'Ht', NULL, 'Транспортировка хвостов ТОФ', NULL, NULL, NULL, NULL, '2022-10-18 12:52:21', '2022-10-18 12:52:21', NULL);
INSERT INTO public.transport_spr (id, node_code, node_type, business_org_code, production_unit_code, redev_code, transport_type_code, sap_code, node_name, tag_alternative, period, delay_time, max_power, created_at, updated_at, deleted_at) VALUES (29, '1013049_IF-301W_Ri_1', 'T', '0101', '0101-PTZT', NULL, 'Ri', NULL, 'Транспортировка руды р.Октябрьский-НОФ', NULL, NULL, NULL, NULL, '2022-10-18 12:52:21', '2022-10-18 12:52:21', NULL);
INSERT INTO public.transport_spr (id, node_code, node_type, business_org_code, production_unit_code, redev_code, transport_type_code, sap_code, node_name, tag_alternative, period, delay_time, max_power, created_at, updated_at, deleted_at) VALUES (30, '1013050_IF-301W_Ri_1', 'T', '0101', '0101-PTZT', NULL, 'Ri', NULL, 'Транспортировка руды р.Комсомольский-НОФ', NULL, NULL, NULL, NULL, '2022-10-18 12:52:21', '2022-10-18 12:52:21', NULL);
INSERT INTO public.transport_spr (id, node_code, node_type, business_org_code, production_unit_code, redev_code, transport_type_code, sap_code, node_name, tag_alternative, period, delay_time, max_power, created_at, updated_at, deleted_at) VALUES (31, '1013047_IF-301W_Ri_1', 'T', '0101', '0101-PTZT', NULL, 'Ri', NULL, 'Транспортировка руды р.Маяк-НОФ', NULL, NULL, NULL, NULL, '2022-10-18 12:52:21', '2022-10-18 12:52:21', NULL);
INSERT INTO public.transport_spr (id, node_code, node_type, business_org_code, production_unit_code, redev_code, transport_type_code, sap_code, node_name, tag_alternative, period, delay_time, max_power, created_at, updated_at, deleted_at) VALUES (32, '0200-600U_Sh_1', 'T', NULL, NULL, NULL, 'Sh ', NULL, 'Морская транспортировка', NULL, NULL, NULL, NULL, '2022-10-18 12:52:21', '2022-10-18 12:52:21', NULL);


--
-- TOC entry 3668 (class 0 OID 0)
-- Dependencies: 261
-- Name: transport_spr_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.transport_spr_id_seq', 32, true);


-- Completed on 2022-10-18 16:13:11 MSK

--
-- PostgreSQL database dump complete
--

