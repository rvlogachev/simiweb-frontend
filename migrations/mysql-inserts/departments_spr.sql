--
-- PostgreSQL database dump
--

-- Dumped from database version 14.4 (Debian 14.4-1.pgdg110+1)
-- Dumped by pg_dump version 14.5 (Ubuntu 14.5-1.pgdg20.04+1)

-- Started on 2022-10-03 19:11:07 MSK

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
-- TOC entry 3656 (class 0 OID 17246)
-- Dependencies: 346
-- Data for Name: departments_spr; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (1, '0200', '0200-ENGC-PLMO', 'ЦЭО М', 'Центр энергообеспечения пл. Мончегорск', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (2, '0200', '0200-ENGC-PLZN', 'ЦЭО З', 'Центр энергообеспечения пл. Заполярный', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (3, '0200', '0200-MECO-ELZN', 'ЦЭН', 'Цех электролиза никеля', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (4, '0200', '0200-MECO-HIMC', 'ХМЦ', 'Химико-металлургический цех', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (5, '0200', '0200-MECO-METC', 'МЦ', 'Металлургический цех', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (6, '0200', '0200-MECO-RAFC', 'РЦ', 'Рафинировочный цех', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (7, '0200', '0200-NPCH-CTKO', 'ЦТК', 'Центр технического контроля', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (8, '0200', '0200-NPCH-ASPS', 'АСС', 'Аварийно-спасательная служба', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (9, '0200', '0200-NPCH-DBEZ', 'ДБ', 'Департамент безопасности', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (10, '0200', '0200-NPCH-DIT0', 'УЗИТ', 'Управление заказчика по информационным т', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (11, '0200', '0200-NPCH-DPB0', 'ДПБ', 'Департамент промышленной безопасности', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (12, '0200', '0200-NPCH-UD00', 'ДАУ', 'Департамент административного управления', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (13, '0200', '0200-OBCO-OBFB', 'ОФ', 'Обогатительная фабрика', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (14, '0200', '0200-RSEV-CNTR', 'ШЦ', 'Шахта Центральная', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (15, '0200', '0200-RSEV-KAUL', 'ШКК', 'Шахта Каула-Котсельваара', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (16, '0200', '0200-RSEV-OBSH', 'ОШУ', 'Общешахтные участки', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (17, '0200', '0200-RSEV-ZAPD', 'ШЗ', 'Шахта Западная', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (18, '0200', '0200-RSEV-PTO0', 'ПУПТ', 'Подземный участок подъемно-транспортного', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (19, '0200', '0200-RSEV-SIPO', 'СП', 'Системы промышленные', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (20, '0200', '0200-RSEV-UAHU', 'АХУ', 'Административно-хозяйственный участок', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (21, '0200', '0200-RSEV-ZDN0', 'ЗИС', 'Здания и сооружения', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (22, '0200', '0200-VSPC-CAP0', 'ЦАП', 'Центр автоматизации производства', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (23, '0200', '0200-VSPC-KAC0', 'КАЦ', 'Контрольно-аналитический центр', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (24, '0200', '0200-VSPC-MTO0', 'МТО', 'МТО', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (25, '0200', '0200-VSPC-NTCH', 'НТЦ', 'Научно технический центр', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (26, '0200', '0200-VSPC-TRC0', 'ТЦ', 'Транспортный цех', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (27, '4900', '4900-NOBF-DRBZ', 'ДЦ', 'цех ДЦ', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (28, '4900', '4900-NOBF-IFZH', 'ИФЦ', 'цех ИФЦ', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (29, '4900', '4900-NOBF-OBGP', 'Обогащение', 'Обогащение', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (30, '4900', '4900-NOBF-UAHO', 'УХО', 'участок УХО', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (31, '4900', '4900-NOBF-UISP', 'УИСП', 'участок УИСП', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (32, '4900', '4900-NOBF-UIZC', 'УИЗЧ', 'участок УИЗЧ', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (33, '4900', '4900-NOBF-USNK', 'УСНК', 'участок УСНК', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (34, '4900', '4900-NOBF-UVVS', 'УВВСиП', 'участок УВВСиП', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (35, '4900', '4900-NOBF-ZGTS', 'ЦГТСиГТ', 'цех ЦГТСиГТ', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (36, '4900', '4900-RZAP-KARR', 'карьер', 'карьер', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (37, '4900', '4900-RZAP-SHAH', 'шахта', 'шахта', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (38, '4900', '4900-NOBF-SAPR', 'САП', 'служба САП', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (39, '0101', '0101-138S-AUTO', NULL, 'Автоколонны', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (40, '0101', '0101-138S-SIST', NULL, 'Системы обеспечения', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (41, '0101', '0101-138S-ZDIS', 'ЗиС', 'Здания и сооружения', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (42, '0101', '0101-CATK-0PIK', NULL, 'Филиал, район "0" пикета', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (43, '0101', '0101-CATK-ADGR', NULL, 'Автодорога ул.Горная', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (44, '0101', '0101-CATK-ASMD', 'АСМД', 'АСМД', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (45, '0101', '0101-CATK-CNPL', NULL, 'Центральная площадка АТО "ЦАТК"', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (46, '0101', '0101-CATK-DOLG', NULL, 'Центральный район, район озера Долгое', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (47, '0101', '0101-CATK-ENER', NULL, 'ул. Энергетическая', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (48, '0101', '0101-CATK-KN01', 'К №1', 'Колонна №1', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (49, '0101', '0101-CATK-KN02', 'К №2', 'Колонна №2', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (50, '0101', '0101-CATK-KN03', 'К №3', 'Колонна №3', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (51, '0101', '0101-CATK-KN05', 'К №5', 'Колонна №5', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (52, '0101', '0101-CATK-KN06', 'К №6', 'Колонна №6', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (53, '0101', '0101-CATK-KN07', 'К №7', 'Колонна №7', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (54, '0101', '0101-CATK-LAMA', NULL, 'Берег о.Лама', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (55, '0101', '0101-CATK-MDVR', NULL, 'Район рудника "Медвежий ручей"', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (56, '0101', '0101-CATK-NORI', NULL, 'Причал на реке Норильской', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (57, '0101', '0101-CATK-OTV1', NULL, 'Промышленный отвал №1', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (58, '0101', '0101-CATK-OTV2', NULL, 'Промышленный отвал №2', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (59, '0101', '0101-CATK-RKAI', NULL, 'р-он Кайеркана', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (60, '0101', '0101-CATK-RNMZ', NULL, 'Район НМЗ', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (61, '0101', '0101-CATK-RNOR', NULL, 'в районе р. Норильской', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (62, '0101', '0101-CATK-RUZH', NULL, 'Район ул. Железнодорожной', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (63, '0101', '0101-CATK-RXKC', NULL, 'район ХКЦ', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (64, '0101', '0101-CATK-TEC3', NULL, 'район ТЭЦ-3', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (65, '0101', '0101-CATK-UADS', NULL, 'УАДиС', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (66, '0101', '0101-CATK-ZAVE', NULL, 'район пл. Завенягина', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (67, '0101', '0101-CDGN-CAL0', 'ЦАЛ', 'ЦАЛ', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (68, '0101', '0101-CDGN-CLN0', NULL, 'Центральная лаборатория надежности', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (69, '0101', '0101-CDGN-DGOB', NULL, 'Диагностическое оборудование', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (70, '0101', '0101-CDGN-GRST', NULL, 'Гараж-стоянка', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (71, '0101', '0101-CDGN-KOND', NULL, 'Кондиционеры', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (72, '0101', '0101-CDGN-LNRK', NULL, 'Лаборатория неразрушающего контроля', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (73, '0101', '0101-CDGN-LPVS', 'ЦЛПВС', 'ЦЛПВС', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (74, '0101', '0101-CDGN-PSMK', NULL, 'Помещения в зд. цеха металлоконструкций', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (75, '0101', '0101-CDGN-SSP0', 'ССП', 'ССП', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (76, '0101', '0101-CDGN-SVOB', NULL, 'Сварочное оборудование', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (77, '0101', '0101-CDGN-TOOB', NULL, 'Токарное оборудование', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (78, '0101', '0101-CDGN-ZKAU', NULL, 'Здание КАУ (ул. Октябрьская д.2)', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (79, '0101', '0101-CISP-GTL', NULL, 'Гидротехническая лаборатория', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (80, '0101', '0101-CISP-LIMZ', NULL, 'Лаб. инженерного сопровождения МЗ', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (81, '0101', '0101-CISP-LIOA', NULL, 'Лаб. инженерного сопровождения ОФ', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (82, '0101', '0101-CISP-LNMZ', NULL, 'Лаб. инженерного сопровождения НМЗ', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (83, '0101', '0101-CISP-LTSK', NULL, 'Лаб. инженерного сопровождения ТССК', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (84, '0101', '0101-CISP-LVHM', NULL, 'Лаб. вещественного и химического анализа', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (85, '0101', '0101-CISP-ONTI', NULL, 'Отдел научно-технической информации', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (86, '0101', '0101-CISP-OOP', NULL, 'Отдел обеспечения производства', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (87, '0101', '0101-CISP-OOPC', NULL, 'Отдел обеспечения производства', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (88, '0101', '0101-CNGS-GTLB', 'ГТЛ', 'ГТЛ', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (89, '0101', '0101-CNGS-OSND', 'ОСНД', 'ОСНД', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (90, '0101', '0101-GIVC-KAER', NULL, 'Норильск район Кайеркан', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (91, '0101', '0101-GIVC-NORL', NULL, 'Норильск', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (92, '0101', '0101-GIVC-TALN', NULL, 'Норильск район Талнах', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (93, '0101', '0101-GSSL-AVTO', NULL, 'Автомобили', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (94, '0101', '0101-GSSL-ENGS', NULL, 'Электрооборудование', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (95, '0101', '0101-GSSL-PBGS', NULL, 'Производственная база ГСС', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (96, '0101', '0101-GSSL-TSVS', NULL, 'ТЕПЛАЯ СТОЯНКА', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (97, '0101', '0101-KAU0-U001', 'ИАЦ БПиГО', 'ИАЦ БПиГО', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (98, '0101', '0101-KAU0-U002', NULL, 'Отдел учета и контр. кач-ва продуктов ГП', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (99, '0101', '0101-KAU0-U003', 'ИАЦ ФМА', 'ИАЦ ФМА', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (100, '0101', '0101-KAU0-U004', 'ОАСУ', 'ОАСУ', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (101, '0101', '0101-KAU0-U005', 'ОМУМП', 'ОМУМП', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (102, '0101', '0101-KAU0-U006', 'ОУиККГПиТП', 'ОУиККГПиТП', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (103, '0101', '0101-KAU0-U007', 'ООП', 'Отдел обеспечения производства', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (104, '0101', '0101-KAU0-U008', 'СЭВО', 'СЭВО', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (105, '0101', '0101-KAU0-U009', 'СЭЛО', 'СЭЛО', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (106, '0101', '0101-KAU0-U010', NULL, 'Метрологическая служба', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (107, '0101', '0101-KAU0-U011', 'ЦРЭК', 'ЦРЭК', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (108, '0101', '0101-MEDN-CASU', NULL, 'Участок обслуживания АСУ', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (109, '0101', '0101-MEDN-CELM', 'ЦЭМ', 'Цех электролиза меди', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (110, '0101', '0101-MEDN-CMET', 'МЦ', 'Металлургический цех', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (111, '0101', '0101-MEDN-COUG', NULL, 'Цех очистки и утилизации газов', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (112, '0101', '0101-MEDN-CPLA', 'ПЦ', 'Плавильный цех', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (113, '0101', '0101-MEDN-CSUH', 'СЦ', 'Сушильный цех', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (114, '0101', '0101-MEDN-UFMK', 'УФМК', 'УФМК', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (115, '0101', '0101-NMZK-U001', 'КС', 'Кислородная станция', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (116, '0101', '0101-NMZK-U002', 'КС-1', 'Кислородная станция-1', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (117, '0101', '0101-NMZK-U003', 'ПЦ-1', 'Плавильный цех-1', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (118, '0101', '0101-NMZK-U004', 'ЦОСК', 'ЦОСК', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (119, '0101', '0101-NMZK-U005', 'ЦПСиШ', 'ЦПСиШ', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (120, '0101', '0101-NMZK-U006', 'ЦПЭС-1', 'ЦПЭС-1', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (121, '0101', '0101-NMZK-U007', 'ЦХО', 'ЦХО', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (122, '0101', '0101-NMZK-U008', 'ЭЦ', 'Энергоцех', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (123, '0101', '0101-NMZK-U009', 'ЦЕХ КИПиА', 'ЦЕХ КИПиА', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (124, '0101', '0101-PESH-NB77', NULL, 'Норильская нефтебаза', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (125, '0101', '0101-PESH-NB78', NULL, 'Кайерканская нефтебаза', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (126, '0101', '0101-PESH-NB79', NULL, 'Дудинская нефтебаза', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (127, '0101', '0101-PESH-OMTO', 'ОМТО', 'ОМТО', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (128, '0101', '0101-PESH-PMRC', NULL, 'Цех переработки металлолома и возвр. МТР', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (129, '0101', '0101-PESH-PSGS', NULL, 'Цех переработки спецгрузов', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (130, '0101', '0101-PESH-TPC1', NULL, 'Товароперевалочный цех-1', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (131, '0101', '0101-PESH-TPC2', NULL, 'Товароперевалочный цех-2', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (132, '0101', '0101-PESH-TPC3', NULL, 'Товароперевалочный цех-3', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (133, '0101', '0101-PTBU-U001', NULL, 'Бюро промышленной безопасности и охраны', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (134, '0101', '0101-PTBU-U002', NULL, 'Кросс ГФП', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (135, '0101', '0101-PTBU-U003', NULL, 'Мастерская по ремонту Норильскавтоматика', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (136, '0101', '0101-PTBU-U004', 'ОГМ', 'Отдел главного механика', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (137, '0101', '0101-PTBU-U005', 'ПЭО', 'Отдел главного энергетика', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (138, '0101', '0101-PTBU-U006', NULL, 'Планово-экономическое бюро', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (139, '0101', '0101-PTBU-U007', 'ПУБР', 'Поверхностный участок буровых работ', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (140, '0101', '0101-PTBU-U008', NULL, 'Производственный отдел', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (141, '0101', '0101-PTBU-U009', 'ПТК АБК', 'ПТБ АБК холл (общий)', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (142, '0101', '0101-PTBU-U010', NULL, 'ПУБР рудника "Октябрьский"', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (143, '0101', '0101-PTBU-U011', NULL, 'ПУБР рудника "Таймырский"', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (144, '0101', '0101-PTBU-U012', NULL, 'ПУБР шахты "Комсомольская" рудника "Комс', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (145, '0101', '0101-PTBU-U013', NULL, 'ПУБР шахты "Скалистая" рудника "Комсомол', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (146, '0101', '0101-PTBU-U014', NULL, 'Руководство', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (147, '0101', '0101-PTBU-U015', 'ТехО', 'Технический отдел', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (148, '0101', '0101-PTBU-U016', NULL, 'Участок автоматизации и связи', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (149, '0101', '0101-PTBU-U017', NULL, 'Участок комплексного обслуживания буровы', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (150, '0101', '0101-PTBU-U018', 'УМТС', 'Участок материально-технического снабжен', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (151, '0101', '0101-PTBU-U019', NULL, 'Хозяйственный участок', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (152, '0101', '0101-PTBU-U020', NULL, 'Энергетический участок', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (153, '0101', '0101-PTZT-ASMD', 'АСМД', 'АСМД', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (154, '0101', '0101-PTZT-DVSC', NULL, 'Цех подвижного состава', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (155, '0101', '0101-PTZT-DZHC', NULL, 'Дудинский железнодорожный цех', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (156, '0101', '0101-PTZT-PSEX', NULL, 'Приемная СЭХ', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (157, '0101', '0101-PTZT-SLDV', NULL, 'Служба движения', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (158, '0101', '0101-PTZT-SLEN', NULL, 'Энергослужба', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (159, '0101', '0101-PTZT-SLPU', NULL, 'Служба пути', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (160, '0101', '0101-PTZT-SLSS', NULL, 'Служба сигнализации и связи', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (161, '0101', '0101-PTZT-SPTO', NULL, 'Служба подъемно-транспортного оборудован', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (162, '0101', '0101-PTZT-UPRV', NULL, 'Управление', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (163, '0101', '0101-RKOM-SHKO', NULL, 'Шахта "Комсомольская"', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (164, '0101', '0101-RMAY-SHMA', NULL, 'Шахта "Маяк"', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (165, '0101', '0101-ROKT-SHRO', NULL, 'Шахта р-ка "Октябрьский"', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (166, '0101', '0101-RSKL-SHSK', NULL, 'Шахта "Скалистая"', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (167, '0101', '0101-RTAI-SHRT', NULL, 'Шахта рудника "Таймырский"', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (168, '0101', '0101-SPGT-AUPR', 'АУ', 'Аппарат управления', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (169, '0101', '0101-SPGT-KOBR', 'УКОБР', 'УКОБР', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (170, '0101', '0101-SPGT-METR', NULL, 'Метрология ПУРСО СДО', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (171, '0101', '0101-SPGT-PMEU', 'ПМЭУ', 'ПМЭУ', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (172, '0101', '0101-SPGT-SDO1', NULL, 'ПУРСО СДО №1', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (173, '0101', '0101-SPGT-SDO2', NULL, 'ПУРСО СДО №2', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (174, '0101', '0101-SPGT-SDO4', NULL, 'ПУРСО СДО №4', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (175, '0101', '0101-SPGT-SDO5', NULL, 'ПУРСО СДО №5', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (176, '0101', '0101-SPGT-SDO6', NULL, 'ПУРСО СДО №6', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (177, '0101', '0101-SPGT-SDO7', NULL, 'ПУРСО СДО №7', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (178, '0101', '0101-SPGT-SDO9', NULL, 'ПУРСО СДО №9', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (179, '0101', '0101-SPGT-SMTO', 'СМТО', 'СМТО', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (180, '0101', '0101-SPGT-UKPR', 'УКПР', 'УКПР', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (181, '0101', '0101-TOF0-CDRB', 'ДЦ', 'Дробильный цех', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (182, '0101', '0101-TOF0-CGTS', 'ЦГТС и ГТ', 'ЦГТС и ГТ', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (183, '0101', '0101-TOF0-CIFC', 'ИФЦ', 'ИФЦ', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (184, '0101', '0101-TOF0-POGR', NULL, 'Периметральное ограждение', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (185, '0101', '0101-TOF0-UADP', NULL, 'Автодороги', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);
INSERT INTO public.departments_spr (id, business_org_code, code, short_name, name, created_at, updated_at, deleted_at) VALUES (186, '0101', '0101-TOF0-ZABK', 'АБК', 'АБК', '2022-09-30 10:09:15', '2022-09-30 10:09:15', NULL);


--
-- TOC entry 3662 (class 0 OID 0)
-- Dependencies: 345
-- Name: departments_spr_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.departments_spr_id_seq', 186, true);


-- Completed on 2022-10-03 19:11:07 MSK

--
-- PostgreSQL database dump complete
--

