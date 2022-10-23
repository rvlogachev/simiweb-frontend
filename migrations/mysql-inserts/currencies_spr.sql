--
-- PostgreSQL database dump
--

-- Dumped from database version 14.4 (Debian 14.4-1.pgdg110+1)
-- Dumped by pg_dump version 14.5 (Ubuntu 14.5-1.pgdg20.04+1)

-- Started on 2022-10-18 16:09:30 MSK

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
-- TOC entry 3654 (class 0 OID 23086)
-- Dependencies: 254
-- Data for Name: currencies_spr; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.currencies_spr (id, code, en_code, units, base_currency, name, created_at, updated_at, deleted_at) VALUES (1, '840', 'USD', 1, 0, 'Доллар США', '2022-10-18 12:51:15', '2022-10-18 12:51:15', NULL);
INSERT INTO public.currencies_spr (id, code, en_code, units, base_currency, name, created_at, updated_at, deleted_at) VALUES (2, '978', 'EUR', 1, 0, 'Евро', '2022-10-18 12:51:15', '2022-10-18 12:51:15', NULL);
INSERT INTO public.currencies_spr (id, code, en_code, units, base_currency, name, created_at, updated_at, deleted_at) VALUES (3, '156', 'CNY', 10, 0, 'Китайский юань', '2022-10-18 12:51:15', '2022-10-18 12:51:15', NULL);
INSERT INTO public.currencies_spr (id, code, en_code, units, base_currency, name, created_at, updated_at, deleted_at) VALUES (4, '643', 'RUB', 1, 1, 'Российский рубль', '2022-10-18 12:51:15', '2022-10-18 12:51:15', NULL);


--
-- TOC entry 3660 (class 0 OID 0)
-- Dependencies: 253
-- Name: currencies_spr_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.currencies_spr_id_seq', 4, true);


-- Completed on 2022-10-18 16:09:30 MSK

--
-- PostgreSQL database dump complete
--

