--
-- PostgreSQL database dump
--

-- Dumped from database version 14.4 (Debian 14.4-1.pgdg110+1)
-- Dumped by pg_dump version 14.5 (Ubuntu 14.5-1.pgdg20.04+1)

-- Started on 2022-10-03 22:39:47 MSK

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
-- TOC entry 3650 (class 0 OID 16500)
-- Dependencies: 236
-- Data for Name: business_algorythms_spr; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.business_algorythms_spr (id, short_name, name, code, params, created_at, updated_at, deleted_at) VALUES (1, 'РУЧНОЕУПРПРОСТОЕМ', 'Ручное управление простоем переделов', 'MANUAL', '{"params": {"visual": "on", "text": {"data": "Click Here", "size": 36, "style": "bold", "name": "text1", "hOffset": 250, "vOffset": 100, "alignment": "center", "onMouseUp": "sun1.opacity = (sun1.opacity / 100) * 90;"}}}', '2022-10-03 19:39:00', '2022-10-03 19:39:00', NULL);
INSERT INTO public.business_algorythms_spr (id, short_name, name, code, params, created_at, updated_at, deleted_at) VALUES (2, 'ПРОСТОИПОСПИСКУ', 'Простои переделов по списку событий', 'LISTEVENT', NULL, '2022-10-03 19:39:00', '2022-10-03 19:39:00', NULL);
INSERT INTO public.business_algorythms_spr (id, short_name, name, code, params, created_at, updated_at, deleted_at) VALUES (3, 'РАНЖИНВЕСТ', 'Ранжирование инвестиционных мероприятий', 'RANGINVEST', NULL, '2022-10-03 19:39:00', '2022-10-03 19:39:00', NULL);
INSERT INTO public.business_algorythms_spr (id, short_name, name, code, params, created_at, updated_at, deleted_at) VALUES (4, 'ОПЕРАЦЗАТРАТЫ', 'Операционные затраты (оптимизация и прогноз)', 'OPERATCOST', NULL, '2022-10-03 19:39:00', '2022-10-03 19:39:00', NULL);
INSERT INTO public.business_algorythms_spr (id, short_name, name, code, params, created_at, updated_at, deleted_at) VALUES (5, 'РАСЧЕТСТОИМДНЯ', 'Расчет стоимости дня простоя передела', 'COSTDAY', NULL, '2022-10-03 19:39:00', '2022-10-03 19:39:00', NULL);
INSERT INTO public.business_algorythms_spr (id, short_name, name, code, params, created_at, updated_at, deleted_at) VALUES (6, 'РАСЧЕТСТОИМЧАСА', 'Расчет стоимости часа простоя оборудования', 'COSTHOUR', NULL, '2022-10-03 19:39:00', '2022-10-03 19:39:00', NULL);
INSERT INTO public.business_algorythms_spr (id, short_name, name, code, params, created_at, updated_at, deleted_at) VALUES (7, 'ВЕРИФТПР', 'Верификация реестра ТПР', 'REESTRTPR', NULL, '2022-10-03 19:39:00', '2022-10-03 19:39:00', NULL);


--
-- TOC entry 3656 (class 0 OID 0)
-- Dependencies: 235
-- Name: business_algorythms_spr_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.business_algorythms_spr_id_seq', 7, true);


-- Completed on 2022-10-03 22:39:47 MSK

--
-- PostgreSQL database dump complete
--

