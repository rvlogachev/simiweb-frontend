--
-- PostgreSQL database dump
--

-- Dumped from database version 14.4 (Debian 14.4-1.pgdg110+1)
-- Dumped by pg_dump version 14.5 (Ubuntu 14.5-1.pgdg20.04+1)

-- Started on 2022-10-18 16:10:41 MSK

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
-- TOC entry 3654 (class 0 OID 22917)
-- Dependencies: 238
-- Data for Name: business_orgs_spr; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.business_orgs_spr (id, business_org_code, short_name, node_name, created_at, updated_at, deleted_at) VALUES (1, '0101', 'ЗФ', 'ПАО ГМК НН филиал ЗФ', '2022-10-18 12:51:31', '2022-10-18 12:51:31', NULL);
INSERT INTO public.business_orgs_spr (id, business_org_code, short_name, node_name, created_at, updated_at, deleted_at) VALUES (2, '0200', 'КГМК', 'АО Кольская ГМК', '2022-10-18 12:51:31', '2022-10-18 12:51:31', NULL);
INSERT INTO public.business_orgs_spr (id, business_org_code, short_name, node_name, created_at, updated_at, deleted_at) VALUES (3, '4900', 'МР', 'ООО "Медвежий ручей"', '2022-10-18 12:51:31', '2022-10-18 12:51:31', NULL);
INSERT INTO public.business_orgs_spr (id, business_org_code, short_name, node_name, created_at, updated_at, deleted_at) VALUES (4, '0102', 'ЗТФ', 'Заполярный транспортный филиал', '2022-10-18 12:51:31', '2022-10-18 12:51:31', NULL);
INSERT INTO public.business_orgs_spr (id, business_org_code, short_name, node_name, created_at, updated_at, deleted_at) VALUES (5, '0000', 'СтП ЗФ', 'Сторонние поставщики ЗФ', '2022-10-18 12:51:31', '2022-10-18 12:51:31', NULL);
INSERT INTO public.business_orgs_spr (id, business_org_code, short_name, node_name, created_at, updated_at, deleted_at) VALUES (6, '0001', 'СтП КГМК', 'Сторонние поставщики КГМК', '2022-10-18 12:51:31', '2022-10-18 12:51:31', NULL);


--
-- TOC entry 3660 (class 0 OID 0)
-- Dependencies: 237
-- Name: business_orgs_spr_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.business_orgs_spr_id_seq', 6, true);


-- Completed on 2022-10-18 16:10:41 MSK

--
-- PostgreSQL database dump complete
--

