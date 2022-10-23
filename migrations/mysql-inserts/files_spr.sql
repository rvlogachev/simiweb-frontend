--
-- PostgreSQL database dump
--

-- Dumped from database version 14.4 (Debian 14.4-1.pgdg110+1)
-- Dumped by pg_dump version 14.5 (Ubuntu 14.5-1.pgdg20.04+1)

-- Started on 2022-10-03 19:18:48 MSK

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
-- TOC entry 3654 (class 0 OID 16670)
-- Dependencies: 252
-- Data for Name: files_spr; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.files_spr (id, code, name, filename, en_name, type, created_at, updated_at, deleted_at) VALUES (1, 'production_graph', 'Производственный граф', 'production_graph.xlsx', 'production_graph', 'Excel', '2022-09-12 13:58:22', '2022-09-12 13:58:22', NULL);
INSERT INTO public.files_spr (id, code, name, filename, en_name, type, created_at, updated_at, deleted_at) VALUES (2, 'production_plan', 'План производства', 'production_plan.xlsx', 'production_plan', 'Excel', '2022-09-12 13:58:22', '2022-09-12 13:58:22', NULL);
INSERT INTO public.files_spr (id, code, name, filename, en_name, type, created_at, updated_at, deleted_at) VALUES (3, 'macroeconomics', 'Макроэкономика', 'macroeconomics.xlsx', 'macroeconomics', 'Excel', '2022-09-12 13:58:22', '2022-09-12 13:58:22', NULL);
INSERT INTO public.files_spr (id, code, name, filename, en_name, type, created_at, updated_at, deleted_at) VALUES (4, 'cost', 'Себестоимость', 'cost.xlsx', 'cost', 'Excel', '2022-09-12 13:58:22', '2022-09-12 13:58:22', NULL);
INSERT INTO public.files_spr (id, code, name, filename, en_name, type, created_at, updated_at, deleted_at) VALUES (5, 'invest_event', 'Инвестиционная программа', 'invest_event.xlsx', 'invest_event', 'Excel', '2022-09-12 13:58:22', '2022-09-12 13:58:22', NULL);
INSERT INTO public.files_spr (id, code, name, filename, en_name, type, created_at, updated_at, deleted_at) VALUES (6, 'operational_event', 'Операционная программа', 'operational_event.xlsx', 'operational_event', 'Excel', '2022-09-12 13:58:22', '2022-09-12 13:58:22', NULL);
INSERT INTO public.files_spr (id, code, name, filename, en_name, type, created_at, updated_at, deleted_at) VALUES (7, 'reestr_tpr', 'Реестр технико-производственных рисков', 'reestr_tpr.xlsx', 'reestr_tpr', 'Excel', '2022-09-12 13:58:22', '2022-09-12 13:58:22', NULL);
INSERT INTO public.files_spr (id, code, name, filename, en_name, type, created_at, updated_at, deleted_at) VALUES (8, 'failure_shedule', 'Запланированные вручную события', 'failure_shedule.xlsx', 'failure_shedule', 'Excel', '2022-09-12 13:58:22', '2022-09-12 13:58:22', NULL);
INSERT INTO public.files_spr (id, code, name, filename, en_name, type, created_at, updated_at, deleted_at) VALUES (9, 'pnd', 'План непрерывности деятельности', 'pnd.xlsx', 'pnd', 'Excel', '2022-09-12 13:58:22', '2022-09-12 13:58:22', NULL);
INSERT INTO public.files_spr (id, code, name, filename, en_name, type, created_at, updated_at, deleted_at) VALUES (10, 'spravochnik_business_orgs_spr', 'Справочник Бизнес-единицы', 'spravochnik_business_orgs_spr.xlsx', 'business_orgs', 'Excel', '2022-09-12 13:58:22', '2022-09-12 13:58:22', NULL);
INSERT INTO public.files_spr (id, code, name, filename, en_name, type, created_at, updated_at, deleted_at) VALUES (11, 'spravochnik_production_units_spr', 'Справочник Производственные единицы', 'spravochnik_production_units_spr.xlsx', 'production_units', 'Excel', '2022-09-12 13:58:22', '2022-09-12 13:58:22', NULL);
INSERT INTO public.files_spr (id, code, name, filename, en_name, type, created_at, updated_at, deleted_at) VALUES (12, 'spravochnik_redevs_spr', 'Справочник Переделы ', 'spravochnik_redevs_spr.xlsx', 'redevs', 'Excel', '2022-09-12 13:58:22', '2022-09-12 13:58:22', NULL);
INSERT INTO public.files_spr (id, code, name, filename, en_name, type, created_at, updated_at, deleted_at) VALUES (13, 'spravochnik_products_spr', 'Справочник Продукты', 'spravochnik_products_spr.xlsx', 'products', 'Excel', '2022-09-12 13:58:22', '2022-09-12 13:58:22', NULL);
INSERT INTO public.files_spr (id, code, name, filename, en_name, type, created_at, updated_at, deleted_at) VALUES (14, 'spravochnik_logical_nodes_spr', 'Справочник Логические узлы', 'spravochnik_logical_nodes_spr.xlsx', 'logical_nodes', 'Excel', '2022-09-12 13:58:22', '2022-09-12 13:58:22', NULL);
INSERT INTO public.files_spr (id, code, name, filename, en_name, type, created_at, updated_at, deleted_at) VALUES (15, 'spravochnik_transport_spr', 'Справочник Транспорт', 'spravochnik_transport_spr.xlsx', 'transport', 'Excel', '2022-09-12 13:58:22', '2022-09-12 13:58:22', NULL);
INSERT INTO public.files_spr (id, code, name, filename, en_name, type, created_at, updated_at, deleted_at) VALUES (16, 'spravochnik_warehouse_spr', 'Справочник Склады', 'spravochnik_warehouse_spr.xlsx
', 'warehouse
', 'Excel', '2022-09-12 13:58:22', '2022-09-12 13:58:22', NULL);
INSERT INTO public.files_spr (id, code, name, filename, en_name, type, created_at, updated_at, deleted_at) VALUES (17, 'spravochnik_departments_spr', 'Справочник Цеха', 'spravochnik_departments_spr.xlsx', 'departments', 'Excel', '2022-09-12 13:58:22', '2022-09-12 13:58:22', NULL);
INSERT INTO public.files_spr (id, code, name, filename, en_name, type, created_at, updated_at, deleted_at) VALUES (18, 'spravochnik_transport_type_spr', 'Справочник Типы транспорта', 'spravochnik_transport_type_spr.xlsx', 'transport_type', 'Excel', '2022-09-12 13:58:22', '2022-09-12 13:58:22', NULL);
INSERT INTO public.files_spr (id, code, name, filename, en_name, type, created_at, updated_at, deleted_at) VALUES (19, 'spravochnik_units_spr', 'Справочник Единицы измерения', 'spravochnik_units_spr.xlsx', 'units', 'Excel', '2022-09-12 13:58:22', '2022-09-12 13:58:22', NULL);
INSERT INTO public.files_spr (id, code, name, filename, en_name, type, created_at, updated_at, deleted_at) VALUES (20, 'spravochnik_damage_level_spr', 'Справочник Уровень ущерба', 'spravochnik_damage_level_spr.xlsx', 'damage_level', 'Excel', '2022-09-12 13:58:22', '2022-09-12 13:58:22', NULL);
INSERT INTO public.files_spr (id, code, name, filename, en_name, type, created_at, updated_at, deleted_at) VALUES (21, 'spravochnik_fcos_spr', 'Справочник ФЦО', 'spravochnik_fcos_spr.xlsx', 'fcos', 'Excel', '2022-09-12 13:58:22', '2022-09-12 13:58:22', NULL);
INSERT INTO public.files_spr (id, code, name, filename, en_name, type, created_at, updated_at, deleted_at) VALUES (22, 'spravochnik_files_spr', 'Справочник Файлы', 'spravochnik_files_spr.xlsx', 'files', 'Excel', '2022-09-12 13:58:22', '2022-09-12 13:58:22', NULL);
INSERT INTO public.files_spr (id, code, name, filename, en_name, type, created_at, updated_at, deleted_at) VALUES (23, 'spravochnik_components_spr', 'Справочник Компоненты', 'spravochnik_components_spr.xlsx', 'components', 'Excel', '2022-09-12 13:58:22', '2022-09-12 13:58:22', NULL);
INSERT INTO public.files_spr (id, code, name, filename, en_name, type, created_at, updated_at, deleted_at) VALUES (24, 'spravochnik_currencies_spr', 'Справочник Валюты', 'spravochnik_currencies_spr.xlsx', 'currencies', 'Excel', '2022-09-12 13:58:22', '2022-09-12 13:58:22', NULL);
INSERT INTO public.files_spr (id, code, name, filename, en_name, type, created_at, updated_at, deleted_at) VALUES (25, 'spravochnik_equipment_types_spr', 'Справочник Типы ЕО', 'spravochnik_equipment_types_spr.xlsx', 'equipment_types', 'Excel', '2022-09-12 13:58:22', '2022-09-12 13:58:22', NULL);
INSERT INTO public.files_spr (id, code, name, filename, en_name, type, created_at, updated_at, deleted_at) VALUES (26, 'spravochnik_event_types_spr', 'Справочник Типы мероприятий', 'spravochnik_event_types_spr.xlsx', 'event_types', 'Excel', '2022-09-12 13:58:22', '2022-09-12 13:58:22', NULL);
INSERT INTO public.files_spr (id, code, name, filename, en_name, type, created_at, updated_at, deleted_at) VALUES (27, 'spravochnik_invest_types_spr', 'Справочник Вид инвестиций', 'spravochnik_invest_types_spr.xlsx', 'invest_types', 'Excel', '2022-09-12 13:58:22', '2022-09-12 13:58:22', NULL);
INSERT INTO public.files_spr (id, code, name, filename, en_name, type, created_at, updated_at, deleted_at) VALUES (28, 'spravochnik_cost_types_spr', 'Справочник Типы затрат', 'spravochnik_cost_types_spr.xlsx', 'cost_types', 'Excel', '2022-09-12 13:58:22', '2022-09-12 13:58:22', NULL);
INSERT INTO public.files_spr (id, code, name, filename, en_name, type, created_at, updated_at, deleted_at) VALUES (29, 'spravochnik_criticals_spr', 'Справочник Индекс критичности АВС ЕО', 'spravochnik_criticals_spr.xlsx', 'criticals', 'Excel', '2022-09-12 13:58:22', '2022-09-12 13:58:22', NULL);
INSERT INTO public.files_spr (id, code, name, filename, en_name, type, created_at, updated_at, deleted_at) VALUES (30, 'spravochnik_index_score_level_spr', 'Справочник "Границы показателей"', 'spravochnik_index_score_level_spr.xlsx', 'index_score_level', 'Excel', '2022-09-12 13:58:22', '2022-09-12 13:58:22', NULL);
INSERT INTO public.files_spr (id, code, name, filename, en_name, type, created_at, updated_at, deleted_at) VALUES (31, 'spravochnik_reports_spr', 'Справочник Отчеты', 'spravochnik_reports_spr.xlsx', 'reports', 'Excel', '2022-09-12 13:58:22', '2022-09-12 13:58:22', NULL);
INSERT INTO public.files_spr (id, code, name, filename, en_name, type, created_at, updated_at, deleted_at) VALUES (32, 'spravochnik_business_algorythms_spr', 'Справочник Бизнес-алгоритмы', 'spravochnik_business_algorythms_spr.xlsx', 'business_algorythms', 'Excel', '2022-09-12 13:58:22', '2022-09-12 13:58:22', NULL);


--
-- TOC entry 3660 (class 0 OID 0)
-- Dependencies: 251
-- Name: files_spr_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.files_spr_id_seq', 32, true);


-- Completed on 2022-10-03 19:18:48 MSK

--
-- PostgreSQL database dump complete
--

