--
-- PostgreSQL database dump
--

-- Dumped from database version 14.4 (Debian 14.4-1.pgdg110+1)
-- Dumped by pg_dump version 14.5 (Ubuntu 14.5-1.pgdg20.04+1)

-- Started on 2022-10-03 19:11:43 MSK

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
-- TOC entry 3654 (class 0 OID 16725)
-- Dependencies: 260
-- Data for Name: transport_type_spr; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.transport_type_spr (id, code, name, color, hex_color, created_at, updated_at, deleted_at) VALUES (1, 'Ri', 'Ж/д транспорт', 'синий', '#0066ff', '2022-09-30 09:59:08', '2022-09-30 09:59:08', NULL);
INSERT INTO public.transport_type_spr (id, code, name, color, hex_color, created_at, updated_at, deleted_at) VALUES (2, 'Av', 'Автотранспорт', 'красный', '#ff8080', '2022-09-30 09:59:08', '2022-09-30 09:59:08', NULL);
INSERT INTO public.transport_type_spr (id, code, name, color, hex_color, created_at, updated_at, deleted_at) VALUES (3, 'Ct', 'Конвейерный транспорт', 'зеленый', '#00cc00', '2022-09-30 09:59:08', '2022-09-30 09:59:08', NULL);
INSERT INTO public.transport_type_spr (id, code, name, color, hex_color, created_at, updated_at, deleted_at) VALUES (4, 'Ht', 'Гидротранспорт', 'оранжевый', '#ffcc66', '2022-09-30 09:59:08', '2022-09-30 09:59:08', NULL);
INSERT INTO public.transport_type_spr (id, code, name, color, hex_color, created_at, updated_at, deleted_at) VALUES (5, 'Sh ', 'Суда (морские, речные)', 'голубой', '#66ccff', '2022-09-30 09:59:08', '2022-09-30 09:59:08', NULL);
INSERT INTO public.transport_type_spr (id, code, name, color, hex_color, created_at, updated_at, deleted_at) VALUES (6, 'Ai', 'Авиа транспорт', 'фиолетовый', '#cc99ff', '2022-09-30 09:59:08', '2022-09-30 09:59:08', NULL);
INSERT INTO public.transport_type_spr (id, code, name, color, hex_color, created_at, updated_at, deleted_at) VALUES (7, 'In', 'Транспортировка внутри ПЕ между переделами', 'белый', '#ffffff', '2022-09-30 09:59:08', '2022-09-30 09:59:08', NULL);


--
-- TOC entry 3660 (class 0 OID 0)
-- Dependencies: 259
-- Name: transport_type_spr_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.transport_type_spr_id_seq', 7, true);


-- Completed on 2022-10-03 19:11:43 MSK

--
-- PostgreSQL database dump complete
--

