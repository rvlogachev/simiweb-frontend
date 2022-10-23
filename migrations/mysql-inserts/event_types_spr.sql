--
-- PostgreSQL database dump
--

-- Dumped from database version 14.4 (Debian 14.4-1.pgdg110+1)
-- Dumped by pg_dump version 14.5 (Ubuntu 14.5-1.pgdg20.04+1)

-- Started on 2022-10-03 19:22:00 MSK

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
-- TOC entry 3654 (class 0 OID 17126)
-- Dependencies: 330
-- Data for Name: event_types_spr; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.event_types_spr (id, code, invest_types_code, name, created_at, updated_at, deleted_at) VALUES (1, '2ГН', NULL, 'Двухгодичная наладка', '2022-09-30 10:11:32', '2022-09-30 10:11:32', NULL);
INSERT INTO public.event_types_spr (id, code, invest_types_code, name, created_at, updated_at, deleted_at) VALUES (2, 'АВР', NULL, 'Аварийно-восстановител. работы', '2022-09-30 10:11:32', '2022-09-30 10:11:32', NULL);
INSERT INTO public.event_types_spr (id, code, invest_types_code, name, created_at, updated_at, deleted_at) VALUES (3, 'БНП', NULL, 'Быт на производстве', '2022-09-30 10:11:32', '2022-09-30 10:11:32', NULL);
INSERT INTO public.event_types_spr (id, code, invest_types_code, name, created_at, updated_at, deleted_at) VALUES (4, 'БТО', NULL, 'Базовое ТО ВС', '2022-09-30 10:11:32', '2022-09-30 10:11:32', NULL);
INSERT INTO public.event_types_spr (id, code, invest_types_code, name, created_at, updated_at, deleted_at) VALUES (5, 'ВПП', NULL, 'Восстановление после паводка', '2022-09-30 10:11:32', '2022-09-30 10:11:32', NULL);
INSERT INTO public.event_types_spr (id, code, invest_types_code, name, created_at, updated_at, deleted_at) VALUES (6, 'ВУ', NULL, 'Восстановление узлов', '2022-09-30 10:11:32', '2022-09-30 10:11:32', NULL);
INSERT INTO public.event_types_spr (id, code, invest_types_code, name, created_at, updated_at, deleted_at) VALUES (7, 'ГН', NULL, 'Годовая наладка', '2022-09-30 10:11:32', '2022-09-30 10:11:32', NULL);
INSERT INTO public.event_types_spr (id, code, invest_types_code, name, created_at, updated_at, deleted_at) VALUES (8, 'ГРД', NULL, 'Градуировка', '2022-09-30 10:11:32', '2022-09-30 10:11:32', NULL);
INSERT INTO public.event_types_spr (id, code, invest_types_code, name, created_at, updated_at, deleted_at) VALUES (9, 'ДЖ', NULL, 'Демонтаж с последующим испол.', '2022-09-30 10:11:32', '2022-09-30 10:11:32', NULL);
INSERT INTO public.event_types_spr (id, code, invest_types_code, name, created_at, updated_at, deleted_at) VALUES (10, 'ДМ', NULL, 'Демонтаж', '2022-09-30 10:11:32', '2022-09-30 10:11:32', NULL);
INSERT INTO public.event_types_spr (id, code, invest_types_code, name, created_at, updated_at, deleted_at) VALUES (11, 'ДО', NULL, 'Диагностика оборудования', '2022-09-30 10:11:32', '2022-09-30 10:11:32', NULL);
INSERT INTO public.event_types_spr (id, code, invest_types_code, name, created_at, updated_at, deleted_at) VALUES (12, 'ДР', 'КР', 'Деповской ремонт', '2022-09-30 10:11:32', '2022-09-30 10:11:32', NULL);
INSERT INTO public.event_types_spr (id, code, invest_types_code, name, created_at, updated_at, deleted_at) VALUES (13, 'ДУ', NULL, 'Диагностика узла', '2022-09-30 10:11:32', '2022-09-30 10:11:32', NULL);
INSERT INTO public.event_types_spr (id, code, invest_types_code, name, created_at, updated_at, deleted_at) VALUES (14, 'ЕО', NULL, 'Ежесменный осмотр', '2022-09-30 10:11:32', '2022-09-30 10:11:32', NULL);
INSERT INTO public.event_types_spr (id, code, invest_types_code, name, created_at, updated_at, deleted_at) VALUES (15, 'ЕТО', NULL, 'Ежесменное тех. обслуживание', '2022-09-30 10:11:32', '2022-09-30 10:11:32', NULL);
INSERT INTO public.event_types_spr (id, code, invest_types_code, name, created_at, updated_at, deleted_at) VALUES (16, 'ЗРМ', NULL, 'Запчасти РМЦ', '2022-09-30 10:11:32', '2022-09-30 10:11:32', NULL);
INSERT INTO public.event_types_spr (id, code, invest_types_code, name, created_at, updated_at, deleted_at) VALUES (17, 'ИЗ', NULL, 'Измерение', '2022-09-30 10:11:32', '2022-09-30 10:11:32', NULL);
INSERT INTO public.event_types_spr (id, code, invest_types_code, name, created_at, updated_at, deleted_at) VALUES (18, 'ИС', NULL, 'Испытание', '2022-09-30 10:11:32', '2022-09-30 10:11:32', NULL);
INSERT INTO public.event_types_spr (id, code, invest_types_code, name, created_at, updated_at, deleted_at) VALUES (19, 'ККР', 'ККР', 'ККР', '2022-09-30 10:11:32', '2022-09-30 10:11:32', NULL);
INSERT INTO public.event_types_spr (id, code, invest_types_code, name, created_at, updated_at, deleted_at) VALUES (20, 'КО', NULL, 'Консервация', '2022-09-30 10:11:32', '2022-09-30 10:11:32', NULL);
INSERT INTO public.event_types_spr (id, code, invest_types_code, name, created_at, updated_at, deleted_at) VALUES (21, 'КОМ', NULL, 'Комплексное обслуживание', '2022-09-30 10:11:32', '2022-09-30 10:11:32', NULL);
INSERT INTO public.event_types_spr (id, code, invest_types_code, name, created_at, updated_at, deleted_at) VALUES (22, 'КПР', NULL, 'Калибровка, поверка и ремонт', '2022-09-30 10:11:32', '2022-09-30 10:11:32', NULL);
INSERT INTO public.event_types_spr (id, code, invest_types_code, name, created_at, updated_at, deleted_at) VALUES (23, 'КР', 'КР', 'Капитальный ремонт', '2022-09-30 10:11:32', '2022-09-30 10:11:32', NULL);
INSERT INTO public.event_types_spr (id, code, invest_types_code, name, created_at, updated_at, deleted_at) VALUES (24, 'КР1', 'КР', 'Капитальный ремонт - 1', '2022-09-30 10:11:32', '2022-09-30 10:11:32', NULL);
INSERT INTO public.event_types_spr (id, code, invest_types_code, name, created_at, updated_at, deleted_at) VALUES (25, 'КР2', 'КР', 'Капитальный ремонт - 2', '2022-09-30 10:11:32', '2022-09-30 10:11:32', NULL);
INSERT INTO public.event_types_spr (id, code, invest_types_code, name, created_at, updated_at, deleted_at) VALUES (26, 'КР3', 'КР', 'Капитальный ремонт - 3', '2022-09-30 10:11:32', '2022-09-30 10:11:32', NULL);
INSERT INTO public.event_types_spr (id, code, invest_types_code, name, created_at, updated_at, deleted_at) VALUES (27, 'КР4', 'КР', 'Капитальный ремонт - 4', '2022-09-30 10:11:32', '2022-09-30 10:11:32', NULL);
INSERT INTO public.event_types_spr (id, code, invest_types_code, name, created_at, updated_at, deleted_at) VALUES (28, 'КРЛ', 'ККР', 'Кап.ремонт линейных объектов', '2022-09-30 10:11:32', '2022-09-30 10:11:32', NULL);
INSERT INTO public.event_types_spr (id, code, invest_types_code, name, created_at, updated_at, deleted_at) VALUES (29, 'КРР', 'ККР', 'КРР', '2022-09-30 10:11:32', '2022-09-30 10:11:32', NULL);
INSERT INTO public.event_types_spr (id, code, invest_types_code, name, created_at, updated_at, deleted_at) VALUES (30, 'КТГ', NULL, 'КТГ', '2022-09-30 10:11:32', '2022-09-30 10:11:32', NULL);
INSERT INTO public.event_types_spr (id, code, invest_types_code, name, created_at, updated_at, deleted_at) VALUES (31, 'МЕО', NULL, 'Метрологическое обеспечение', '2022-09-30 10:11:32', '2022-09-30 10:11:32', NULL);
INSERT INTO public.event_types_spr (id, code, invest_types_code, name, created_at, updated_at, deleted_at) VALUES (32, 'МКК', NULL, 'Мат-лы для ККР', '2022-09-30 10:11:32', '2022-09-30 10:11:32', NULL);
INSERT INTO public.event_types_spr (id, code, invest_types_code, name, created_at, updated_at, deleted_at) VALUES (33, 'МКЛ', NULL, 'Мат-лы для КРЛО', '2022-09-30 10:11:32', '2022-09-30 10:11:32', NULL);
INSERT INTO public.event_types_spr (id, code, invest_types_code, name, created_at, updated_at, deleted_at) VALUES (34, 'МКР', NULL, 'Мат-лы для КРР', '2022-09-30 10:11:32', '2022-09-30 10:11:32', NULL);
INSERT INTO public.event_types_spr (id, code, invest_types_code, name, created_at, updated_at, deleted_at) VALUES (35, 'МО', 'ОВИЗ', 'Монтаж', '2022-09-30 10:11:32', '2022-09-30 10:11:32', NULL);
INSERT INTO public.event_types_spr (id, code, invest_types_code, name, created_at, updated_at, deleted_at) VALUES (36, 'МС', NULL, 'Метрология с остановом', '2022-09-30 10:11:32', '2022-09-30 10:11:32', NULL);
INSERT INTO public.event_types_spr (id, code, invest_types_code, name, created_at, updated_at, deleted_at) VALUES (37, 'МТР', NULL, 'МТР', '2022-09-30 10:11:32', '2022-09-30 10:11:32', NULL);
INSERT INTO public.event_types_spr (id, code, invest_types_code, name, created_at, updated_at, deleted_at) VALUES (38, 'НАР', NULL, 'Наработка', '2022-09-30 10:11:32', '2022-09-30 10:11:32', NULL);
INSERT INTO public.event_types_spr (id, code, invest_types_code, name, created_at, updated_at, deleted_at) VALUES (39, 'НД', NULL, 'Наладка', '2022-09-30 10:11:32', '2022-09-30 10:11:32', NULL);
INSERT INTO public.event_types_spr (id, code, invest_types_code, name, created_at, updated_at, deleted_at) VALUES (40, 'НК', NULL, 'Неразрушающий контроль', '2022-09-30 10:11:32', '2022-09-30 10:11:32', NULL);
INSERT INTO public.event_types_spr (id, code, invest_types_code, name, created_at, updated_at, deleted_at) VALUES (41, 'О1', NULL, 'Технический осмотр - 1', '2022-09-30 10:11:32', '2022-09-30 10:11:32', NULL);
INSERT INTO public.event_types_spr (id, code, invest_types_code, name, created_at, updated_at, deleted_at) VALUES (42, 'О2', NULL, 'Технический осмотр - 2', '2022-09-30 10:11:32', '2022-09-30 10:11:32', NULL);
INSERT INTO public.event_types_spr (id, code, invest_types_code, name, created_at, updated_at, deleted_at) VALUES (43, 'О3', NULL, 'Технический осмотр - 3', '2022-09-30 10:11:32', '2022-09-30 10:11:32', NULL);
INSERT INTO public.event_types_spr (id, code, invest_types_code, name, created_at, updated_at, deleted_at) VALUES (44, 'О4', NULL, 'Технический осмотр - 4', '2022-09-30 10:11:32', '2022-09-30 10:11:32', NULL);
INSERT INTO public.event_types_spr (id, code, invest_types_code, name, created_at, updated_at, deleted_at) VALUES (45, 'ОБ', NULL, 'Обследование', '2022-09-30 10:11:32', '2022-09-30 10:11:32', NULL);
INSERT INTO public.event_types_spr (id, code, invest_types_code, name, created_at, updated_at, deleted_at) VALUES (46, 'ОВ', 'ОВИЗ', 'ОВИЗ', '2022-09-30 10:11:32', '2022-09-30 10:11:32', NULL);
INSERT INTO public.event_types_spr (id, code, invest_types_code, name, created_at, updated_at, deleted_at) VALUES (47, 'ОДО', NULL, 'Очередное доковое освидет-ие', '2022-09-30 10:11:32', '2022-09-30 10:11:32', NULL);
INSERT INTO public.event_types_spr (id, code, invest_types_code, name, created_at, updated_at, deleted_at) VALUES (48, 'ОЗ', NULL, 'Осмотр ЗиС', '2022-09-30 10:11:32', '2022-09-30 10:11:32', NULL);
INSERT INTO public.event_types_spr (id, code, invest_types_code, name, created_at, updated_at, deleted_at) VALUES (49, 'ОПД', NULL, 'Опер.обслуж. и дежурство', '2022-09-30 10:11:32', '2022-09-30 10:11:32', NULL);
INSERT INTO public.event_types_spr (id, code, invest_types_code, name, created_at, updated_at, deleted_at) VALUES (50, 'ОР', NULL, 'ОРЭП', '2022-09-30 10:11:32', '2022-09-30 10:11:32', NULL);
INSERT INTO public.event_types_spr (id, code, invest_types_code, name, created_at, updated_at, deleted_at) VALUES (51, 'ОС', NULL, 'Осмотр', '2022-09-30 10:11:32', '2022-09-30 10:11:32', NULL);
INSERT INTO public.event_types_spr (id, code, invest_types_code, name, created_at, updated_at, deleted_at) VALUES (52, 'ОСВ', NULL, 'Техническое освидетельствован.', '2022-09-30 10:11:32', '2022-09-30 10:11:32', NULL);
INSERT INTO public.event_types_spr (id, code, invest_types_code, name, created_at, updated_at, deleted_at) VALUES (53, 'ПВ', NULL, 'Профвосстановление', '2022-09-30 10:11:32', '2022-09-30 10:11:32', NULL);
INSERT INTO public.event_types_spr (id, code, invest_types_code, name, created_at, updated_at, deleted_at) VALUES (54, 'ПГН', NULL, 'Полугодовая наладка', '2022-09-30 10:11:32', '2022-09-30 10:11:32', NULL);
INSERT INTO public.event_types_spr (id, code, invest_types_code, name, created_at, updated_at, deleted_at) VALUES (55, 'ПДО', NULL, 'Промежуточное доковое освидет.', '2022-09-30 10:11:32', '2022-09-30 10:11:32', NULL);
INSERT INTO public.event_types_spr (id, code, invest_types_code, name, created_at, updated_at, deleted_at) VALUES (56, 'ПИР', NULL, 'Проектно-изыскательные работы', '2022-09-30 10:11:32', '2022-09-30 10:11:32', NULL);
INSERT INTO public.event_types_spr (id, code, invest_types_code, name, created_at, updated_at, deleted_at) VALUES (57, 'ПК', NULL, 'ПиК', '2022-09-30 10:11:32', '2022-09-30 10:11:32', NULL);
INSERT INTO public.event_types_spr (id, code, invest_types_code, name, created_at, updated_at, deleted_at) VALUES (58, 'ПЛ', NULL, 'Прокладка', '2022-09-30 10:11:32', '2022-09-30 10:11:32', NULL);
INSERT INTO public.event_types_spr (id, code, invest_types_code, name, created_at, updated_at, deleted_at) VALUES (59, 'ПН', NULL, 'Полная наладка', '2022-09-30 10:11:32', '2022-09-30 10:11:32', NULL);
INSERT INTO public.event_types_spr (id, code, invest_types_code, name, created_at, updated_at, deleted_at) VALUES (60, 'ПНР', 'ОВИЗ', 'Пуско-наладочные работы', '2022-09-30 10:11:32', '2022-09-30 10:11:32', NULL);
INSERT INTO public.event_types_spr (id, code, invest_types_code, name, created_at, updated_at, deleted_at) VALUES (61, 'ПП', NULL, 'Опробование', '2022-09-30 10:11:32', '2022-09-30 10:11:32', NULL);
INSERT INTO public.event_types_spr (id, code, invest_types_code, name, created_at, updated_at, deleted_at) VALUES (62, 'ППЗ', NULL, 'Полная проверка защит', '2022-09-30 10:11:32', '2022-09-30 10:11:32', NULL);
INSERT INTO public.event_types_spr (id, code, invest_types_code, name, created_at, updated_at, deleted_at) VALUES (63, 'ППК', NULL, 'Измер.показ.кач.электр.энергии', '2022-09-30 10:11:32', '2022-09-30 10:11:32', NULL);
INSERT INTO public.event_types_spr (id, code, invest_types_code, name, created_at, updated_at, deleted_at) VALUES (64, 'ППН', NULL, 'Предпусковая наладка', '2022-09-30 10:11:32', '2022-09-30 10:11:32', NULL);
INSERT INTO public.event_types_spr (id, code, invest_types_code, name, created_at, updated_at, deleted_at) VALUES (65, 'ПР', NULL, 'Присоединение', '2022-09-30 10:11:32', '2022-09-30 10:11:32', NULL);
INSERT INTO public.event_types_spr (id, code, invest_types_code, name, created_at, updated_at, deleted_at) VALUES (66, 'ПРВ', NULL, 'Проверка', '2022-09-30 10:11:32', '2022-09-30 10:11:32', NULL);
INSERT INTO public.event_types_spr (id, code, invest_types_code, name, created_at, updated_at, deleted_at) VALUES (67, 'ПРЧ', NULL, 'Прочее', '2022-09-30 10:11:32', '2022-09-30 10:11:32', NULL);
INSERT INTO public.event_types_spr (id, code, invest_types_code, name, created_at, updated_at, deleted_at) VALUES (68, 'ПСД', 'ОВИЗ', 'Проектно-сметная документация', '2022-09-30 10:11:32', '2022-09-30 10:11:32', NULL);
INSERT INTO public.event_types_spr (id, code, invest_types_code, name, created_at, updated_at, deleted_at) VALUES (69, 'ПФ', NULL, 'Профилактический контроль', '2022-09-30 10:11:32', '2022-09-30 10:11:32', NULL);
INSERT INTO public.event_types_spr (id, code, invest_types_code, name, created_at, updated_at, deleted_at) VALUES (70, 'ПШЛ', NULL, 'Пошлина', '2022-09-30 10:11:32', '2022-09-30 10:11:32', NULL);
INSERT INTO public.event_types_spr (id, code, invest_types_code, name, created_at, updated_at, deleted_at) VALUES (71, 'РАД', NULL, 'Радиационный контроль', '2022-09-30 10:11:32', '2022-09-30 10:11:32', NULL);
INSERT INTO public.event_types_spr (id, code, invest_types_code, name, created_at, updated_at, deleted_at) VALUES (72, 'РВ', NULL, 'Ревизия', '2022-09-30 10:11:32', '2022-09-30 10:11:32', NULL);
INSERT INTO public.event_types_spr (id, code, invest_types_code, name, created_at, updated_at, deleted_at) VALUES (73, 'РЕМ', 'ТР', 'Ремонт', '2022-09-30 10:11:32', '2022-09-30 10:11:32', NULL);
INSERT INTO public.event_types_spr (id, code, invest_types_code, name, created_at, updated_at, deleted_at) VALUES (74, 'РЗ', NULL, 'Ремонт ЗиС', '2022-09-30 10:11:32', '2022-09-30 10:11:32', NULL);
INSERT INTO public.event_types_spr (id, code, invest_types_code, name, created_at, updated_at, deleted_at) VALUES (75, 'РК', NULL, 'Расконсервация', '2022-09-30 10:11:32', '2022-09-30 10:11:32', NULL);
INSERT INTO public.event_types_spr (id, code, invest_types_code, name, created_at, updated_at, deleted_at) VALUES (76, 'РО1', NULL, 'Регламент.ремонтн.обслуживание', '2022-09-30 10:11:32', '2022-09-30 10:11:32', NULL);
INSERT INTO public.event_types_spr (id, code, invest_types_code, name, created_at, updated_at, deleted_at) VALUES (77, 'РЭН', NULL, 'Режимно-эксплуатац.наладка', '2022-09-30 10:11:32', '2022-09-30 10:11:32', NULL);
INSERT INTO public.event_types_spr (id, code, invest_types_code, name, created_at, updated_at, deleted_at) VALUES (78, 'СЗ', NULL, 'Сезонное обслуживание', '2022-09-30 10:11:32', '2022-09-30 10:11:32', NULL);
INSERT INTO public.event_types_spr (id, code, invest_types_code, name, created_at, updated_at, deleted_at) VALUES (79, 'СИ', NULL, 'Ремонт СИ', '2022-09-30 10:11:32', '2022-09-30 10:11:32', NULL);
INSERT INTO public.event_types_spr (id, code, invest_types_code, name, created_at, updated_at, deleted_at) VALUES (80, 'СЛА', NULL, 'SLA', '2022-09-30 10:11:32', '2022-09-30 10:11:32', NULL);
INSERT INTO public.event_types_spr (id, code, invest_types_code, name, created_at, updated_at, deleted_at) VALUES (81, 'СР', 'ТР', 'Средний ремонт', '2022-09-30 10:11:32', '2022-09-30 10:11:32', NULL);
INSERT INTO public.event_types_spr (id, code, invest_types_code, name, created_at, updated_at, deleted_at) VALUES (82, 'СРБ', 'ТР', 'Средний ремонт без осв.', '2022-09-30 10:11:32', '2022-09-30 10:11:32', NULL);
INSERT INTO public.event_types_spr (id, code, invest_types_code, name, created_at, updated_at, deleted_at) VALUES (83, 'СРВ', NULL, 'Сервисное обслуживание', '2022-09-30 10:11:32', '2022-09-30 10:11:32', NULL);
INSERT INTO public.event_types_spr (id, code, invest_types_code, name, created_at, updated_at, deleted_at) VALUES (84, 'СРП', 'ТР', 'Средний ремонт с покраской', '2022-09-30 10:11:32', '2022-09-30 10:11:32', NULL);
INSERT INTO public.event_types_spr (id, code, invest_types_code, name, created_at, updated_at, deleted_at) VALUES (85, 'Т1', NULL, 'Техническое обслуживание 1', '2022-09-30 10:11:32', '2022-09-30 10:11:32', NULL);
INSERT INTO public.event_types_spr (id, code, invest_types_code, name, created_at, updated_at, deleted_at) VALUES (86, 'Т2', NULL, 'Техническое обслуживание 2', '2022-09-30 10:11:32', '2022-09-30 10:11:32', NULL);
INSERT INTO public.event_types_spr (id, code, invest_types_code, name, created_at, updated_at, deleted_at) VALUES (87, 'ТН', NULL, 'Внеплановый текущий ремонт', '2022-09-30 10:11:32', '2022-09-30 10:11:32', NULL);
INSERT INTO public.event_types_spr (id, code, invest_types_code, name, created_at, updated_at, deleted_at) VALUES (88, 'ТО', NULL, 'Техническое обслуживание', '2022-09-30 10:11:32', '2022-09-30 10:11:32', NULL);
INSERT INTO public.event_types_spr (id, code, invest_types_code, name, created_at, updated_at, deleted_at) VALUES (89, 'ТО1', NULL, 'Техническое обслуживание - 1', '2022-09-30 10:11:32', '2022-09-30 10:11:32', NULL);
INSERT INTO public.event_types_spr (id, code, invest_types_code, name, created_at, updated_at, deleted_at) VALUES (90, 'ТО2', NULL, 'Техническое обслуживание - 2', '2022-09-30 10:11:32', '2022-09-30 10:11:32', NULL);
INSERT INTO public.event_types_spr (id, code, invest_types_code, name, created_at, updated_at, deleted_at) VALUES (91, 'ТО3', NULL, 'Техническое обслуживание - 3', '2022-09-30 10:11:32', '2022-09-30 10:11:32', NULL);
INSERT INTO public.event_types_spr (id, code, invest_types_code, name, created_at, updated_at, deleted_at) VALUES (92, 'ТО4', NULL, 'Техническое обслуживание - 4', '2022-09-30 10:11:32', '2022-09-30 10:11:32', NULL);
INSERT INTO public.event_types_spr (id, code, invest_types_code, name, created_at, updated_at, deleted_at) VALUES (93, 'ТО5', NULL, 'Техническое обслуживание - 5', '2022-09-30 10:11:32', '2022-09-30 10:11:32', NULL);
INSERT INTO public.event_types_spr (id, code, invest_types_code, name, created_at, updated_at, deleted_at) VALUES (94, 'ТО6', NULL, 'Техническое обслуживание - 6', '2022-09-30 10:11:32', '2022-09-30 10:11:32', NULL);
INSERT INTO public.event_types_spr (id, code, invest_types_code, name, created_at, updated_at, deleted_at) VALUES (95, 'ТОР', 'ТР', 'Текущий отцепочный ремонт', '2022-09-30 10:11:32', '2022-09-30 10:11:32', NULL);
INSERT INTO public.event_types_spr (id, code, invest_types_code, name, created_at, updated_at, deleted_at) VALUES (96, 'ТОС', NULL, 'Техническое обслуживание серв.', '2022-09-30 10:11:32', '2022-09-30 10:11:32', NULL);
INSERT INTO public.event_types_spr (id, code, invest_types_code, name, created_at, updated_at, deleted_at) VALUES (97, 'ТР', 'ТР', 'Текущий ремонт', '2022-09-30 10:11:32', '2022-09-30 10:11:32', NULL);
INSERT INTO public.event_types_spr (id, code, invest_types_code, name, created_at, updated_at, deleted_at) VALUES (98, 'ТР1', 'ТР', 'Текущий ремонт - 1', '2022-09-30 10:11:32', '2022-09-30 10:11:32', NULL);
INSERT INTO public.event_types_spr (id, code, invest_types_code, name, created_at, updated_at, deleted_at) VALUES (99, 'ТР2', 'ТР', 'Текущий ремонт - 2', '2022-09-30 10:11:32', '2022-09-30 10:11:32', NULL);
INSERT INTO public.event_types_spr (id, code, invest_types_code, name, created_at, updated_at, deleted_at) VALUES (100, 'ТР3', 'ТР', 'Текущий ремонт - 3', '2022-09-30 10:11:32', '2022-09-30 10:11:32', NULL);
INSERT INTO public.event_types_spr (id, code, invest_types_code, name, created_at, updated_at, deleted_at) VALUES (101, 'ТР4', 'ТР', 'Текущий ремонт - 4', '2022-09-30 10:11:32', '2022-09-30 10:11:32', NULL);
INSERT INTO public.event_types_spr (id, code, invest_types_code, name, created_at, updated_at, deleted_at) VALUES (102, 'ТР5', 'ТР', 'Текущий ремонт - 5', '2022-09-30 10:11:32', '2022-09-30 10:11:32', NULL);
INSERT INTO public.event_types_spr (id, code, invest_types_code, name, created_at, updated_at, deleted_at) VALUES (103, 'ТР6', 'ТР', 'Текущий ремонт - 6', '2022-09-30 10:11:32', '2022-09-30 10:11:32', NULL);
INSERT INTO public.event_types_spr (id, code, invest_types_code, name, created_at, updated_at, deleted_at) VALUES (104, 'ТР7', 'ТР', 'Текущий ремонт - 7', '2022-09-30 10:11:32', '2022-09-30 10:11:32', NULL);
INSERT INTO public.event_types_spr (id, code, invest_types_code, name, created_at, updated_at, deleted_at) VALUES (105, 'ТР8', 'ТР', 'Текущий ремонт - 8', '2022-09-30 10:11:32', '2022-09-30 10:11:32', NULL);
INSERT INTO public.event_types_spr (id, code, invest_types_code, name, created_at, updated_at, deleted_at) VALUES (106, 'ТР9', 'ТР', 'Текущий ремонт - 9', '2022-09-30 10:11:32', '2022-09-30 10:11:32', NULL);
INSERT INTO public.event_types_spr (id, code, invest_types_code, name, created_at, updated_at, deleted_at) VALUES (107, 'УРМ', NULL, 'Услуги РМЦ', '2022-09-30 10:11:32', '2022-09-30 10:11:32', NULL);
INSERT INTO public.event_types_spr (id, code, invest_types_code, name, created_at, updated_at, deleted_at) VALUES (108, 'УС', NULL, 'Установка', '2022-09-30 10:11:32', '2022-09-30 10:11:32', NULL);
INSERT INTO public.event_types_spr (id, code, invest_types_code, name, created_at, updated_at, deleted_at) VALUES (109, 'Х1', NULL, 'Техническое обслуживание - 50', '2022-09-30 10:11:32', '2022-09-30 10:11:32', NULL);
INSERT INTO public.event_types_spr (id, code, invest_types_code, name, created_at, updated_at, deleted_at) VALUES (110, 'Х10', 'КР', 'Техническое обслуживание-6000', '2022-09-30 10:11:32', '2022-09-30 10:11:32', NULL);
INSERT INTO public.event_types_spr (id, code, invest_types_code, name, created_at, updated_at, deleted_at) VALUES (111, 'Х11', 'КР', 'Техническое обслуживание-7000', '2022-09-30 10:11:32', '2022-09-30 10:11:32', NULL);
INSERT INTO public.event_types_spr (id, code, invest_types_code, name, created_at, updated_at, deleted_at) VALUES (112, 'Х12', 'КР', 'Техническое обслуживание-8000', '2022-09-30 10:11:32', '2022-09-30 10:11:32', NULL);
INSERT INTO public.event_types_spr (id, code, invest_types_code, name, created_at, updated_at, deleted_at) VALUES (113, 'Х13', 'КР', 'Техническое обслуживание-9000', '2022-09-30 10:11:32', '2022-09-30 10:11:32', NULL);
INSERT INTO public.event_types_spr (id, code, invest_types_code, name, created_at, updated_at, deleted_at) VALUES (114, 'Х14', 'КР', 'Техническое обслуживание-10000', '2022-09-30 10:11:32', '2022-09-30 10:11:32', NULL);
INSERT INTO public.event_types_spr (id, code, invest_types_code, name, created_at, updated_at, deleted_at) VALUES (115, 'Х15', 'КР', 'Техническое обслуживание-11000', '2022-09-30 10:11:32', '2022-09-30 10:11:32', NULL);
INSERT INTO public.event_types_spr (id, code, invest_types_code, name, created_at, updated_at, deleted_at) VALUES (116, 'Х16', 'КР', 'Техническое обслуживание 12000', '2022-09-30 10:11:32', '2022-09-30 10:11:32', NULL);
INSERT INTO public.event_types_spr (id, code, invest_types_code, name, created_at, updated_at, deleted_at) VALUES (117, 'Х2', NULL, 'Техническое обслуживание - 250', '2022-09-30 10:11:32', '2022-09-30 10:11:32', NULL);
INSERT INTO public.event_types_spr (id, code, invest_types_code, name, created_at, updated_at, deleted_at) VALUES (118, 'Х3', NULL, 'Техническое обслуживание - 500', '2022-09-30 10:11:32', '2022-09-30 10:11:32', NULL);
INSERT INTO public.event_types_spr (id, code, invest_types_code, name, created_at, updated_at, deleted_at) VALUES (119, 'Х4', NULL, 'Техническое обслуживание-500-1', '2022-09-30 10:11:32', '2022-09-30 10:11:32', NULL);
INSERT INTO public.event_types_spr (id, code, invest_types_code, name, created_at, updated_at, deleted_at) VALUES (120, 'Х5', NULL, 'Техническое обслуживание-1000', '2022-09-30 10:11:32', '2022-09-30 10:11:32', NULL);
INSERT INTO public.event_types_spr (id, code, invest_types_code, name, created_at, updated_at, deleted_at) VALUES (121, 'Х6', NULL, 'Техническое обслуживание-2000', '2022-09-30 10:11:32', '2022-09-30 10:11:32', NULL);
INSERT INTO public.event_types_spr (id, code, invest_types_code, name, created_at, updated_at, deleted_at) VALUES (122, 'Х7', 'ТР', 'Техническое обслуживание-3000', '2022-09-30 10:11:32', '2022-09-30 10:11:32', NULL);
INSERT INTO public.event_types_spr (id, code, invest_types_code, name, created_at, updated_at, deleted_at) VALUES (123, 'Х8', 'ТР', 'Техническое обслуживание-4000', '2022-09-30 10:11:32', '2022-09-30 10:11:32', NULL);
INSERT INTO public.event_types_spr (id, code, invest_types_code, name, created_at, updated_at, deleted_at) VALUES (124, 'Х9', 'ТР', 'Техническое обслуживание-5000', '2022-09-30 10:11:32', '2022-09-30 10:11:32', NULL);
INSERT INTO public.event_types_spr (id, code, invest_types_code, name, created_at, updated_at, deleted_at) VALUES (125, 'ЦПС', NULL, 'Сервис.обслужив. ЦПСиШ НМЗ', '2022-09-30 10:11:32', '2022-09-30 10:11:32', NULL);
INSERT INTO public.event_types_spr (id, code, invest_types_code, name, created_at, updated_at, deleted_at) VALUES (126, 'ЧН', NULL, 'Частичная наладка', '2022-09-30 10:11:32', '2022-09-30 10:11:32', NULL);
INSERT INTO public.event_types_spr (id, code, invest_types_code, name, created_at, updated_at, deleted_at) VALUES (127, 'ЧПЗ', NULL, 'Частичная проверка защит', '2022-09-30 10:11:32', '2022-09-30 10:11:32', NULL);
INSERT INTO public.event_types_spr (id, code, invest_types_code, name, created_at, updated_at, deleted_at) VALUES (128, 'ЭКС', NULL, 'Эксплуатация', '2022-09-30 10:11:32', '2022-09-30 10:11:32', NULL);
INSERT INTO public.event_types_spr (id, code, invest_types_code, name, created_at, updated_at, deleted_at) VALUES (129, 'ЭПБ', NULL, 'Экспертиза промышленной безопа', '2022-09-30 10:11:32', '2022-09-30 10:11:32', NULL);
INSERT INTO public.event_types_spr (id, code, invest_types_code, name, created_at, updated_at, deleted_at) VALUES (130, 'ЭПУ', NULL, 'Устранение замечаний ЭПБ', '2022-09-30 10:11:32', '2022-09-30 10:11:32', NULL);


--
-- TOC entry 3660 (class 0 OID 0)
-- Dependencies: 329
-- Name: event_types_spr_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.event_types_spr_id_seq', 130, true);


-- Completed on 2022-10-03 19:22:00 MSK

--
-- PostgreSQL database dump complete
--

