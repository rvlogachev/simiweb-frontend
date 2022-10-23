--
-- PostgreSQL database dump
--

-- Dumped from database version 14.4 (Debian 14.4-1.pgdg110+1)
-- Dumped by pg_dump version 14.5 (Ubuntu 14.5-1.pgdg20.04+1)

-- Started on 2022-10-03 22:31:28 MSK

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
-- TOC entry 3650 (class 0 OID 16710)
-- Dependencies: 258
-- Data for Name: reports_spr; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.reports_spr (id, code, name, created_at, updated_at, deleted_at) VALUES (1, '1', 'Отчет «Статистика о выполненных расчетах пользователями»', '2022-10-03 19:15:41', '2022-10-03 19:15:41', NULL);
INSERT INTO public.reports_spr (id, code, name, created_at, updated_at, deleted_at) VALUES (2, '2', 'Отчет «Журнал регистрации событий в Системе»', '2022-10-03 19:15:41', '2022-10-03 19:15:41', NULL);
INSERT INTO public.reports_spr (id, code, name, created_at, updated_at, deleted_at) VALUES (3, '3', 'Отчет «Лог выполнения эксперимента»', '2022-10-03 19:15:41', '2022-10-03 19:15:41', NULL);
INSERT INTO public.reports_spr (id, code, name, created_at, updated_at, deleted_at) VALUES (4, '4', 'Выгрузка данных по производственному графу', '2022-10-03 19:15:41', '2022-10-03 19:15:41', NULL);
INSERT INTO public.reports_spr (id, code, name, created_at, updated_at, deleted_at) VALUES (5, '5', 'Выгрузка данных по производственным показателям', '2022-10-03 19:15:41', '2022-10-03 19:15:41', NULL);
INSERT INTO public.reports_spr (id, code, name, created_at, updated_at, deleted_at) VALUES (6, '6', 'Выгрузка данных о макроэкономических показателях', '2022-10-03 19:15:41', '2022-10-03 19:15:41', NULL);
INSERT INTO public.reports_spr (id, code, name, created_at, updated_at, deleted_at) VALUES (7, '7', 'Выгрузка данных о себестоимости продуктов', '2022-10-03 19:15:41', '2022-10-03 19:15:41', NULL);
INSERT INTO public.reports_spr (id, code, name, created_at, updated_at, deleted_at) VALUES (8, '8', 'Выгрузка инвестиционных мероприятий', '2022-10-03 19:15:41', '2022-10-03 19:15:41', NULL);
INSERT INTO public.reports_spr (id, code, name, created_at, updated_at, deleted_at) VALUES (9, '9', 'Выгрузка операционных мероприятий', '2022-10-03 19:15:41', '2022-10-03 19:15:41', NULL);
INSERT INTO public.reports_spr (id, code, name, created_at, updated_at, deleted_at) VALUES (10, '10', 'Отчет «Ключевые показатели»', '2022-10-03 19:15:41', '2022-10-03 19:15:41', NULL);
INSERT INTO public.reports_spr (id, code, name, created_at, updated_at, deleted_at) VALUES (11, '11', 'Отчет «Перечень инвестиционных мероприятий (ККР, ОВИЗ, проекты КС), ранжированный по индексу риска»', '2022-10-03 19:15:41', '2022-10-03 19:15:41', NULL);
INSERT INTO public.reports_spr (id, code, name, created_at, updated_at, deleted_at) VALUES (12, '12', 'Отчет «Оценка рисков инвестиционных мероприятий с переносом сроков (ОВИЗ)»', '2022-10-03 19:15:41', '2022-10-03 19:15:41', NULL);
INSERT INTO public.reports_spr (id, code, name, created_at, updated_at, deleted_at) VALUES (13, '13', 'Отчет «Расчет стоимости дня простоя передела»', '2022-10-03 19:15:41', '2022-10-03 19:15:41', NULL);
INSERT INTO public.reports_spr (id, code, name, created_at, updated_at, deleted_at) VALUES (14, '14', 'Отчет «Расчет синергетического эффекта потери EBITDA  при простое нескольких переделов»', '2022-10-03 19:15:41', '2022-10-03 19:15:41', NULL);
INSERT INTO public.reports_spr (id, code, name, created_at, updated_at, deleted_at) VALUES (15, '15', 'Отчет «Верификация реестра ТПР»', '2022-10-03 19:15:41', '2022-10-03 19:15:41', NULL);
INSERT INTO public.reports_spr (id, code, name, created_at, updated_at, deleted_at) VALUES (16, '16', 'Отчет «Расчет синергетического эффекта ТПР»', '2022-10-03 19:15:41', '2022-10-03 19:15:41', NULL);
INSERT INTO public.reports_spr (id, code, name, created_at, updated_at, deleted_at) VALUES (17, '17', 'Отчет «Расчет стоимости часа простоя передела»', '2022-10-03 19:15:41', '2022-10-03 19:15:41', NULL);
INSERT INTO public.reports_spr (id, code, name, created_at, updated_at, deleted_at) VALUES (18, '18', 'Отчет «Оптимизация расходов операционных мероприятий»', '2022-10-03 19:15:41', '2022-10-03 19:15:41', NULL);
INSERT INTO public.reports_spr (id, code, name, created_at, updated_at, deleted_at) VALUES (19, '19', 'Отчет «Прогноз затрат и рисков»', '2022-10-03 19:15:41', '2022-10-03 19:15:41', NULL);


--
-- TOC entry 3656 (class 0 OID 0)
-- Dependencies: 257
-- Name: reports_spr_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.reports_spr_id_seq', 19, true);


-- Completed on 2022-10-03 22:31:28 MSK

--
-- PostgreSQL database dump complete
--

