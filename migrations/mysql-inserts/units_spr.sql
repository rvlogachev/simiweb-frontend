--
-- PostgreSQL database dump
--

-- Dumped from database version 14.4 (Debian 14.4-1.pgdg110+1)
-- Dumped by pg_dump version 14.5 (Ubuntu 14.5-1.pgdg20.04+1)

-- Started on 2022-10-18 16:09:54 MSK

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
-- TOC entry 3654 (class 0 OID 23034)
-- Dependencies: 248
-- Data for Name: units_spr; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.units_spr (id, unit_code, k_kg, base_mass, short_name, unit_name, created_at, updated_at, deleted_at) VALUES (1, '%', 1, 0, 'PR', 'Процент', '2022-10-18 12:51:21', '2022-10-18 12:51:21', NULL);
INSERT INTO public.units_spr (id, unit_code, k_kg, base_mass, short_name, unit_name, created_at, updated_at, deleted_at) VALUES (2, 'Г', 0.001, 0, 'GR', 'Грамм', '2022-10-18 12:51:21', '2022-10-18 12:51:21', NULL);
INSERT INTO public.units_spr (id, unit_code, k_kg, base_mass, short_name, unit_name, created_at, updated_at, deleted_at) VALUES (3, 'Г/T', 1000, 1, 'GT', 'Грамм на тонну', '2022-10-18 12:51:21', '2022-10-18 12:51:21', NULL);
INSERT INTO public.units_spr (id, unit_code, k_kg, base_mass, short_name, unit_name, created_at, updated_at, deleted_at) VALUES (4, 'КГ', 0.031103476799999998, 0, 'KG', 'Килограмм', '2022-10-18 12:51:21', '2022-10-18 12:51:21', NULL);
INSERT INTO public.units_spr (id, unit_code, k_kg, base_mass, short_name, unit_name, created_at, updated_at, deleted_at) VALUES (5, 'М3', NULL, 0, 'M3', 'Кубический метр', '2022-10-18 12:51:21', '2022-10-18 12:51:21', NULL);
INSERT INTO public.units_spr (id, unit_code, k_kg, base_mass, short_name, unit_name, created_at, updated_at, deleted_at) VALUES (6, 'Т', NULL, 0, 'TON', 'Тонна', '2022-10-18 12:51:21', '2022-10-18 12:51:21', NULL);
INSERT INTO public.units_spr (id, unit_code, k_kg, base_mass, short_name, unit_name, created_at, updated_at, deleted_at) VALUES (7, 'ТУЦ', NULL, 0, 'TRO', 'Тройская унция', '2022-10-18 12:51:21', '2022-10-18 12:51:21', NULL);
INSERT INTO public.units_spr (id, unit_code, k_kg, base_mass, short_name, unit_name, created_at, updated_at, deleted_at) VALUES (8, 'ФНТ', NULL, 0, 'LB', 'Фунт', '2022-10-18 12:51:21', '2022-10-18 12:51:21', NULL);
INSERT INTO public.units_spr (id, unit_code, k_kg, base_mass, short_name, unit_name, created_at, updated_at, deleted_at) VALUES (9, 'УНЦ', NULL, 0, 'O', 'Унция', '2022-10-18 12:51:21', '2022-10-18 12:51:21', NULL);


--
-- TOC entry 3660 (class 0 OID 0)
-- Dependencies: 247
-- Name: units_spr_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.units_spr_id_seq', 9, true);


-- Completed on 2022-10-18 16:09:54 MSK

--
-- PostgreSQL database dump complete
--

