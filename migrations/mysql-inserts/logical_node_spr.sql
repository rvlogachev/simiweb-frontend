--
-- PostgreSQL database dump
--

-- Dumped from database version 14.4 (Debian 14.4-1.pgdg110+1)
-- Dumped by pg_dump version 14.5 (Ubuntu 14.5-1.pgdg20.04+1)

-- Started on 2022-10-18 16:12:06 MSK

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
-- TOC entry 3658 (class 0 OID 23595)
-- Dependencies: 342
-- Data for Name: logical_nodes_spr; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.logical_nodes_spr (id, node_code, node_type, business_org_code, production_unit_code, redev_code, node_name, target_node_code, influence_coefficient, created_at, updated_at, deleted_at) VALUES (1, 'L1-104W', 'L', '0101', '0101-TOF0', 'TO-104W', 'ПНС-1', 'TO-104W_TF-102W_Ht_1', 100, '2022-10-18 12:52:06', '2022-10-18 12:52:06', NULL);
INSERT INTO public.logical_nodes_spr (id, node_code, node_type, business_org_code, production_unit_code, redev_code, node_name, target_node_code, influence_coefficient, created_at, updated_at, deleted_at) VALUES (2, 'L1-104W', 'L', '0101', '0101-TOF0', 'TO-104W', 'ПНС-1', 'TO-104W_SN-105W_Ht_1', 100, '2022-10-18 12:52:06', '2022-10-18 12:52:06', NULL);
INSERT INTO public.logical_nodes_spr (id, node_code, node_type, business_org_code, production_unit_code, redev_code, node_name, target_node_code, influence_coefficient, created_at, updated_at, deleted_at) VALUES (3, 'L1-104W', 'L', '0101', '0101-TOF0', 'TO-104W', 'ПНС-1', 'TO-104W_GN-105W_Ht_1', 100, '2022-10-18 12:52:06', '2022-10-18 12:52:06', NULL);
INSERT INTO public.logical_nodes_spr (id, node_code, node_type, business_org_code, production_unit_code, redev_code, node_name, target_node_code, influence_coefficient, created_at, updated_at, deleted_at) VALUES (4, 'L2-104W', 'L', '0101', '0101-TOF0', 'TO-104W', 'ПНС-2', 'TO-104W_SN-105W_Ht_1', 100, '2022-10-18 12:52:06', '2022-10-18 12:52:06', NULL);
INSERT INTO public.logical_nodes_spr (id, node_code, node_type, business_org_code, production_unit_code, redev_code, node_name, target_node_code, influence_coefficient, created_at, updated_at, deleted_at) VALUES (5, 'L2-104W', 'L', '0101', '0101-TOF0', 'TO-104W', 'ПНС-2', 'TO-104W_GN-105W_Ht_1', 100, '2022-10-18 12:52:06', '2022-10-18 12:52:06', NULL);
INSERT INTO public.logical_nodes_spr (id, node_code, node_type, business_org_code, production_unit_code, redev_code, node_name, target_node_code, influence_coefficient, created_at, updated_at, deleted_at) VALUES (6, 'L2-104W', 'L', '0101', '0101-TOF0', 'TO-104W', 'ПНС-2', 'IF-301W_SN-105W_Ht_1', 100, '2022-10-18 12:52:06', '2022-10-18 12:52:06', NULL);
INSERT INTO public.logical_nodes_spr (id, node_code, node_type, business_org_code, production_unit_code, redev_code, node_name, target_node_code, influence_coefficient, created_at, updated_at, deleted_at) VALUES (7, 'L3-600U', 'L', '0102', '0102-2000', NULL, 'ЗТФ', 'MP-600U_PM-102W_Ri_1', 100, '2022-10-18 12:52:06', '2022-10-18 12:52:06', NULL);
INSERT INTO public.logical_nodes_spr (id, node_code, node_type, business_org_code, production_unit_code, redev_code, node_name, target_node_code, influence_coefficient, created_at, updated_at, deleted_at) VALUES (8, 'L3-600U', 'L', '0102', '0102-2000', NULL, 'ЗТФ', 'MP-600U_ON-105W_Ri_1', 100, '2022-10-18 12:52:06', '2022-10-18 12:52:06', NULL);
INSERT INTO public.logical_nodes_spr (id, node_code, node_type, business_org_code, production_unit_code, redev_code, node_name, target_node_code, influence_coefficient, created_at, updated_at, deleted_at) VALUES (9, 'L3-600U', 'L', '0102', '0102-2000', NULL, 'ЗТФ', 'MP-600U_CN-105W_Ri_1', 100, '2022-10-18 12:52:06', '2022-10-18 12:52:06', NULL);
INSERT INTO public.logical_nodes_spr (id, node_code, node_type, business_org_code, production_unit_code, redev_code, node_name, target_node_code, influence_coefficient, created_at, updated_at, deleted_at) VALUES (10, 'L3-600U', 'L', '0102', '0102-2000', NULL, 'ЗТФ', 'CN-105W_MP-600U_Ri_1', 100, '2022-10-18 12:52:06', '2022-10-18 12:52:06', NULL);
INSERT INTO public.logical_nodes_spr (id, node_code, node_type, business_org_code, production_unit_code, redev_code, node_name, target_node_code, influence_coefficient, created_at, updated_at, deleted_at) VALUES (11, 'L4-115S', 'L', '0101', '0101-RKOM', NULL, 'Нулевой пикет', '1013049_IF-301W_Ri_1', 100, '2022-10-18 12:52:06', '2022-10-18 12:52:06', NULL);
INSERT INTO public.logical_nodes_spr (id, node_code, node_type, business_org_code, production_unit_code, redev_code, node_name, target_node_code, influence_coefficient, created_at, updated_at, deleted_at) VALUES (12, 'L4-115S', 'L', '0101', '0101-RKOM', NULL, 'Нулевой пикет', '1013050_IF-301W_Ri_1', 100, '2022-10-18 12:52:06', '2022-10-18 12:52:06', NULL);
INSERT INTO public.logical_nodes_spr (id, node_code, node_type, business_org_code, production_unit_code, redev_code, node_name, target_node_code, influence_coefficient, created_at, updated_at, deleted_at) VALUES (13, 'L4-115S', 'L', '0101', '0101-RKOM', NULL, 'Нулевой пикет', '1013047_IF-301W_Ri_1', 100, '2022-10-18 12:52:06', '2022-10-18 12:52:06', NULL);


--
-- TOC entry 3664 (class 0 OID 0)
-- Dependencies: 341
-- Name: logical_nodes_spr_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.logical_nodes_spr_id_seq', 13, true);


-- Completed on 2022-10-18 16:12:07 MSK

--
-- PostgreSQL database dump complete
--

