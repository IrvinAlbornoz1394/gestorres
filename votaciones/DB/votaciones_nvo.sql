-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-05-2018 a las 02:55:38
-- Versión del servidor: 10.1.30-MariaDB
-- Versión de PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `votaciones`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `candidatos`
--

CREATE TABLE `candidatos` (
  `id` int(11) NOT NULL,
  `candidato_a` varchar(100) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `candidatos`
--

INSERT INTO `candidatos` (`id`, `candidato_a`) VALUES
(1, 'GOBERNADOR'),
(2, 'PRESIDENTE MUNICIPAL'),
(3, 'DIPUTADO LOCAL'),
(4, 'DIPUTADO FEDERAL'),
(5, 'SENADOR');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `casillas`
--

CREATE TABLE `casillas` (
  `id` int(11) NOT NULL,
  `nombre_casilla` varchar(200) CHARACTER SET latin1 DEFAULT NULL,
  `id_seccion` int(11) NOT NULL,
  `responsable` varchar(200) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `casillas`
--

INSERT INTO `casillas` (`id`, `nombre_casilla`, `id_seccion`, `responsable`) VALUES
(1, 'BÃSICA SECCION 261', 1, ''),
(2, 'CONTIGUA 1 SECCION 261', 1, ''),
(3, 'CONTIGUA 2 SECCION 261', 1, ''),
(4, 'CONTIGUA 3 SECCION 261', 1, ''),
(5, 'BÃSICA SECCION 262', 2, ''),
(6, 'CONTIGUA 1 SECCION 262', 2, ''),
(7, 'BÃSICA SECCION 263', 3, ''),
(8, 'CONTIGUA 1 SECCION 263', 3, ''),
(9, 'CONTIGUA 2 SECCION 263', 3, ''),
(10, 'CONTIGUA 3 SECCION 263', 3, ''),
(11, 'CONTIGUA 4 SECCION 263', 3, ''),
(12, 'BÃSICA SECCION 264', 4, ''),
(13, 'CONTIGUA 1 SECCION 264', 4, ''),
(14, 'BÃSICA SECCION 265', 5, ''),
(15, 'CONTIGUA 1 SECCION 265', 5, ''),
(16, 'CONTIGUA 2 SECCION 265', 5, ''),
(17, 'CONTIGUA 3 SECCION 265', 5, ''),
(18, 'CONTIGUA 4 SECCION 265', 5, ''),
(19, 'CONTIGUA 5 SECCION 265', 5, ''),
(20, 'CONTIGUA 6 SECCION 265', 5, ''),
(21, 'CONTIGUA 7 SECCION 265', 5, ''),
(22, 'CONTIGUA 8 SECCION 265', 5, ''),
(23, 'CONTIGUA 9 SECCION 265', 5, ''),
(24, 'CONTIGUA 10 SECCION 265', 5, ''),
(25, 'BÃSICA SECCION 266', 6, ''),
(26, 'CONTIGUA 1 SECCION 266', 6, ''),
(27, 'CONTIGUA 2 SECCION 266', 6, ''),
(28, 'CONTIGUA 3 SECCION 266', 6, ''),
(29, 'CONTIGUA 4 SECCION 266', 6, ''),
(30, 'BÃSICA SECCION 273', 7, ''),
(31, 'CONTIGUA 1 SECCION 273', 7, ''),
(32, 'BÃSICA SECCION 274', 8, ''),
(33, 'CONTIGUA 1 SECCION 274', 8, ''),
(34, 'BÃSICA SECCION 275', 9, ''),
(35, 'CONTIGUA 1 SECCION 275', 9, ''),
(36, 'CONTIGUA 2 SECCION 275', 9, ''),
(37, 'BÃSICA SECCION 276', 10, ''),
(38, 'CONTIGUA 1 SECCION 276', 10, ''),
(39, 'CONTIGUA 2 SECCION 276', 10, ''),
(40, 'BÃSICA SECCION 277', 11, ''),
(41, 'CONTIGUA 1 SECCION 277', 11, ''),
(42, 'CONTIGUA 2 SECCION 277', 11, ''),
(43, 'CONTIGUA 3 SECCION 277', 11, ''),
(44, 'CONTIGUA 4 SECCION 277', 11, ''),
(45, 'BÃSICA SECCION 278', 12, ''),
(46, 'CONTIGUA 1 SECCION 278', 12, ''),
(47, 'CONTIGUA 2 SECCION 278', 12, ''),
(48, 'CONTIGUA 3 SECCION 278', 12, ''),
(49, 'CONTIGUA 4 SECCION 278', 12, ''),
(50, 'CONTIGUA 5 SECCION 278', 12, ''),
(51, 'CONTIGUA 6 SECCION 278', 12, ''),
(52, 'CONTIGUA 7 SECCION 278', 12, ''),
(53, 'BÃSICA SECCION 279', 13, ''),
(54, 'CONTIGUA 1 SECCION 279', 13, ''),
(55, 'BÃSICA SECCION 280', 14, ''),
(56, 'CONTIGUA 1 SECCION 280', 14, ''),
(57, 'BÃSICA SECCION 281', 15, ''),
(58, 'CONTIGUA 1 SECCION 281', 15, ''),
(59, 'BÃSICA SECCION 282', 16, ''),
(60, 'CONTIGUA 1 SECCION 282', 16, ''),
(61, 'BÃSICA SECCION 283', 17, ''),
(62, 'CONTIGUA 1 SECCION 283', 17, ''),
(63, 'BÃSICA SECCION 284', 18, ''),
(64, 'CONTIGUA 1 SECCION 296', 19, ''),
(65, 'BÃSICA SECCION 297', 20, ''),
(66, 'CONTIGUA 1 SECCION 297', 20, ''),
(67, 'BÃSICA SECCION 298', 21, ''),
(68, 'CONTIGUA 1 SECCION 298', 21, ''),
(69, 'CONTIGUA 2 SECCION 298', 21, ''),
(70, 'BÃSICA SECCION 299', 22, ''),
(71, 'CONTIGUA 1 SECCION 299', 22, ''),
(72, 'CONTIGUA 2 SECCION 299', 22, ''),
(73, 'BÃSICA SECCION 300', 23, ''),
(74, 'CONTIGUA 1 SECCION 300', 23, ''),
(75, 'BÃSICA SECCION 301', 24, ''),
(76, 'CONTIGUA 1 SECCION 301', 24, ''),
(77, 'BÃSICA SECCION 302', 25, ''),
(78, 'CONTIGUA 1 SECCION 302', 25, ''),
(79, 'CONTIGUA 2 SECCION 302', 25, ''),
(80, 'BÃSICA SECCION 303', 26, ''),
(81, 'CONTIGUA 1 SECCION 303', 26, ''),
(82, 'CONTIGUA 2 SECCION 303', 26, ''),
(83, 'CONTIGUA 3 SECCION 303', 26, ''),
(84, 'CONTIGUA 4 SECCION 303', 26, ''),
(85, 'CONTIGUA 5 SECCION 303', 26, ''),
(86, 'CONTIGUA 6 SECCION 303', 26, ''),
(87, 'CONTIGUA 7 SECCION 303', 26, ''),
(88, 'CONTIGUA 8 SECCION 303', 26, ''),
(89, 'CONTIGUA 9 SECCION 303', 26, ''),
(90, 'CONTIGUA 10 SECCION 303', 26, ''),
(91, 'BÃSICA SECCION 304', 27, ''),
(92, 'CONTIGUA 1 SECCION 304', 27, ''),
(93, 'BÃSICA SECCION 305', 28, ''),
(94, 'CONTIGUA 1 SECCION 305', 28, ''),
(95, 'BÃSICA SECCION 306', 29, ''),
(96, 'CONTIGUA 1 SECCION 307', 30, ''),
(97, 'BÃSICA SECCION 317', 31, ''),
(98, 'CONTIGUA 1 SECCION 319', 33, ''),
(99, 'BÃSICA SECCION 320', 34, ''),
(100, 'CONTIGUA 1 SECCION 320', 34, ''),
(101, 'BÃSICA SECCION 321', 35, ''),
(102, 'CONTIGUA 1 SECCION 321', 35, ''),
(103, 'BÃSICA SECCION 322', 36, ''),
(104, 'CONTIGUA 1 SECCION 322', 36, ''),
(105, 'CONTIGUA 2 SECCION 322', 36, ''),
(106, 'BÃSICA SECCION 323', 37, ''),
(107, 'CONTIGUA 1 SECCION 323', 37, ''),
(108, 'BÃSICA SECCION 324', 38, ''),
(109, 'CONTIGUA 1 SECCION 324', 38, ''),
(110, 'BÃSICA SECCION 325', 39, ''),
(111, 'CONTIGUA 1 SECCION 325', 39, ''),
(112, 'CONTIGUA 2 SECCION 325', 39, ''),
(113, 'CONTIGUA 3 SECCION 325', 39, ''),
(114, 'BÃSICA SECCION 326', 40, ''),
(115, 'CONTIGUA 1 SECCION 326', 40, ''),
(116, 'BÃSICA SECCION 327', 41, ''),
(117, 'CONTIGUA 1 SECCION 327', 41, ''),
(118, 'CONTIGUA 2 SECCION 327', 41, ''),
(119, 'BÃSICA SECCION 328', 42, ''),
(120, 'CONTIGUA 1 SECCION 328', 42, ''),
(121, 'BÃSICA SECCION 329', 43, ''),
(122, 'CONTIGUA 1 SECCION 329', 43, ''),
(123, 'BÃSICA SECCION 330', 44, ''),
(124, 'CONTIGUA 1 SECCION 331', 45, ''),
(125, 'BÃSICA SECCION 332', 46, ''),
(126, 'CONTIGUA 1 SECCION 332', 46, ''),
(127, 'BÃSICA SECCION 333', 47, ''),
(128, 'CONTIGUA 1 SECCION 333', 47, ''),
(129, 'BÃSICA SECCION 334', 48, ''),
(130, 'CONTIGUA 1 SECCION 335', 49, ''),
(131, 'BÃSICA SECCION 336', 50, ''),
(132, 'CONTIGUA 1 SECCION 336', 50, ''),
(133, 'BÃSICA SECCION 337', 51, ''),
(134, 'CONTIGUA 1 SECCION 354', 53, ''),
(135, 'BÃSICA SECCION 355', 54, ''),
(136, 'CONTIGUA 1 SECCION 355', 54, ''),
(137, 'BÃSICA SECCION 356', 55, ''),
(138, 'CONTIGUA 1 SECCION 356', 55, ''),
(139, 'BÃSICA SECCION 357', 56, ''),
(140, 'CONTIGUA 1 SECCION 358', 57, ''),
(141, 'BÃSICA SECCION 359', 58, ''),
(142, 'CONTIGUA 1 SECCION 359', 58, ''),
(143, 'BÃSICA SECCION 360', 59, ''),
(144, 'CONTIGUA 1 SECCION 360', 59, ''),
(145, 'BÃSICA SECCION 361', 60, ''),
(146, 'CONTIGUA 1 SECCION 361', 60, ''),
(147, 'BÃSICA SECCION 362', 61, ''),
(148, 'CONTIGUA 1 SECCION 362', 61, ''),
(149, 'BÃSICA SECCION 363', 62, ''),
(150, 'CONTIGUA 1 SECCION 363', 62, ''),
(151, 'BÃSICA SECCION 364', 63, ''),
(152, 'CONTIGUA 1 SECCION 399', 68, ''),
(153, 'BÃSICA SECCION 400', 69, ''),
(154, 'CONTIGUA 1 SECCION 400', 69, ''),
(155, 'BÃSICA SECCION 401', 70, ''),
(156, 'CONTIGUA 1 SECCION 401', 70, ''),
(157, 'BÃSICA SECCION 402', 71, ''),
(158, 'CONTIGUA 1 SECCION 402', 71, ''),
(159, 'BÃSICA SECCION 403', 72, ''),
(160, 'CONTIGUA 1 SECCION 403', 72, ''),
(161, 'CONTIGUA 2 SECCION 403', 72, ''),
(162, 'BÃSICA SECCION 404', 73, ''),
(163, 'CONTIGUA 1 SECCION 404', 73, ''),
(164, 'CONTIGUA 2 SECCION 404', 73, ''),
(165, 'BÃSICA SECCION 405', 74, ''),
(166, 'CONTIGUA 1 SECCION 405', 74, ''),
(167, 'BÃSICA SECCION 406', 75, ''),
(168, 'CONTIGUA 1 SECCION 406', 75, ''),
(169, 'BÃSICA SECCION 407', 76, ''),
(170, 'CONTIGUA 1 SECCION 407', 76, ''),
(171, 'BÃSICA SECCION 408', 77, ''),
(172, 'CONTIGUA 1 SECCION 408', 77, ''),
(173, 'BÃSICA SECCION 409', 78, ''),
(174, 'CONTIGUA 1 SECCION 409', 78, ''),
(175, 'BÃSICA SECCION 427', 79, ''),
(176, 'CONTIGUA 1 SECCION 429', 81, ''),
(177, 'BÃSICA SECCION 430', 82, ''),
(178, 'CONTIGUA 1 SECCION 432', 84, ''),
(179, 'BÃSICA SECCION 433', 85, ''),
(180, 'CONTIGUA 1 SECCION 433', 85, ''),
(181, 'BÃSICA SECCION 434', 86, ''),
(182, 'CONTIGUA 1 SECCION 434', 86, ''),
(183, 'BÃSICA SECCION 435', 87, ''),
(184, 'CONTIGUA 1 SECCION 435', 87, ''),
(185, 'BÃSICA SECCION 436', 88, ''),
(186, 'CONTIGUA 1 SECCION 436', 88, ''),
(187, 'CONTIGUA 2 SECCION 436', 88, ''),
(188, 'BÃSICA SECCION 437', 89, ''),
(189, 'CONTIGUA 1 SECCION 437', 89, ''),
(190, 'BÃSICA SECCION 438', 90, ''),
(191, 'CONTIGUA 1 SECCION 438', 90, ''),
(192, 'BÃSICA SECCION 439', 91, ''),
(193, 'CONTIGUA 1 SECCION 439', 91, ''),
(194, 'BÃSICA SECCION 440', 92, ''),
(195, 'CONTIGUA 1 SECCION 440', 92, ''),
(196, 'BÃSICA SECCION 441', 93, ''),
(197, 'CONTIGUA 1 SECCION 441', 93, ''),
(198, 'BÃSICA SECCION 442', 94, ''),
(199, 'CONTIGUA 1 SECCION 442', 94, ''),
(200, 'BÃSICA SECCION 443', 95, ''),
(201, 'CONTIGUA 1 SECCION 443', 95, ''),
(202, 'BÃSICA SECCION 444', 96, ''),
(203, 'CONTIGUA 1 SECCION 445', 97, ''),
(204, 'BÃSICA SECCION 446', 98, ''),
(205, 'CONTIGUA 1 SECCION 446', 98, ''),
(206, 'BÃSICA SECCION 447', 99, ''),
(207, 'CONTIGUA 1 SECCION 447', 99, ''),
(208, 'BÃSICA SECCION 448', 100, ''),
(209, 'CONTIGUA 1 SECCION 448', 100, ''),
(210, 'BÃSICA SECCION 449', 101, ''),
(211, 'CONTIGUA 1 SECCION 449', 101, ''),
(212, 'BÃSICA SECCION 450', 102, ''),
(213, 'CONTIGUA 1 SECCION 450', 102, ''),
(214, 'BÃSICA SECCION 451', 103, ''),
(215, 'CONTIGUA 1 SECCION 451', 103, ''),
(216, 'BÃSICA SECCION 452', 104, ''),
(217, 'CONTIGUA 1 SECCION 452', 104, ''),
(218, 'BÃSICA SECCION 453', 105, ''),
(219, 'CONTIGUA 1 SECCION 453', 105, ''),
(220, 'BÃSICA SECCION 454', 106, ''),
(221, 'CONTIGUA 1 SECCION 454', 106, ''),
(222, 'BÃSICA SECCION 455', 107, ''),
(223, 'CONTIGUA 1 SECCION 455', 107, ''),
(224, 'BÃSICA SECCION 456', 108, ''),
(225, 'ESPECIAL 1 SECCION 456', 108, ''),
(226, 'BÃSICA SECCION 457', 109, ''),
(227, 'CONTIGUA 1 SECCION 482', 113, ''),
(228, 'BÃSICA SECCION 483', 114, ''),
(229, 'CONTIGUA 1 SECCION 483', 114, ''),
(230, 'BÃSICA SECCION 484', 115, ''),
(231, 'CONTIGUA 1 SECCION 484', 115, ''),
(232, 'BÃSICA SECCION 485', 116, ''),
(233, 'CONTIGUA 1 SECCION 485', 116, ''),
(234, 'BÃSICA SECCION 486', 117, ''),
(235, 'CONTIGUA 1 SECCION 486', 117, ''),
(236, 'BÃSICA SECCION 487', 118, ''),
(237, 'CONTIGUA 1 SECCION 487', 118, ''),
(238, 'BÃSICA SECCION 488', 119, ''),
(239, 'CONTIGUA 1 SECCION 488', 119, ''),
(240, 'CONTIGUA 2 SECCION 488', 119, ''),
(241, 'BÃSICA SECCION 489', 120, ''),
(242, 'CONTIGUA 1 SECCION 489', 120, ''),
(243, 'BÃSICA SECCION 490', 121, ''),
(244, 'CONTIGUA 1 SECCION 490', 121, ''),
(245, 'BÃSICA SECCION 491', 122, ''),
(246, 'CONTIGUA 1 SECCION 491', 122, ''),
(247, 'CONTIGUA 2 SECCION 491', 122, ''),
(248, 'BÃSICA SECCION 492', 123, ''),
(249, 'CONTIGUA 1 SECCION 492', 123, ''),
(250, 'CONTIGUA 2 SECCION 492', 123, ''),
(251, 'BÃSICA SECCION 493', 124, ''),
(252, 'CONTIGUA 1 SECCION 493', 124, ''),
(253, 'BÃSICA SECCION 494', 125, ''),
(254, 'CONTIGUA 1 SECCION 494', 125, ''),
(255, 'CONTIGUA 2 SECCION 494', 125, ''),
(256, 'CONTIGUA 3 SECCION 494', 125, ''),
(257, 'BÃSICA SECCION 495', 126, ''),
(258, 'CONTIGUA 1 SECCION 495', 126, ''),
(259, 'BÃSICA SECCION 496', 127, ''),
(260, 'CONTIGUA 1 SECCION 496', 127, ''),
(261, 'BÃSICA SECCION 497', 128, ''),
(262, 'CONTIGUA 1 SECCION 504', 132, ''),
(263, 'BÃSICA SECCION 505', 133, ''),
(264, 'CONTIGUA 1 SECCION 505', 133, ''),
(265, 'BÃSICA SECCION 506', 134, ''),
(266, 'CONTIGUA 1 SECCION 506', 134, ''),
(267, 'BÃSICA SECCION 507', 135, ''),
(268, 'CONTIGUA 1 SECCION 507', 135, ''),
(269, 'BÃSICA SECCION 508', 136, ''),
(270, 'CONTIGUA 1 SECCION 508', 136, ''),
(271, 'CONTIGUA 2 SECCION 508', 136, ''),
(272, 'CONTIGUA 3 SECCION 508', 136, ''),
(273, 'BÃSICA SECCION 509', 137, ''),
(274, 'CONTIGUA 1 SECCION 509', 137, ''),
(275, 'BÃSICA SECCION 510', 138, ''),
(276, 'CONTIGUA 1 SECCION 510', 138, ''),
(277, 'CONTIGUA 2 SECCION 510', 138, ''),
(278, 'CONTIGUA 3 SECCION 510', 138, ''),
(279, 'CONTIGUA 4 SECCION 510', 138, ''),
(280, 'CONTIGUA 5 SECCION 510', 138, ''),
(281, 'CONTIGUA 6 SECCION 510', 138, ''),
(282, 'CONTIGUA 7 SECCION 510', 138, ''),
(283, 'CONTIGUA 8 SECCION 510', 138, ''),
(284, 'CONTIGUA 9 SECCION 510', 138, ''),
(285, 'CONTIGUA 10 SECCION 510', 138, ''),
(286, 'CONTIGUA 11 SECCION 510', 138, ''),
(287, 'CONTIGUA 12 SECCION 510', 138, ''),
(288, 'ESPECIAL 1 SECCION 510', 138, ''),
(289, 'BÃSICA SECCION 511', 139, ''),
(290, 'CONTIGUA 1 SECCION 511', 139, ''),
(291, 'BÃSICA SECCION 512', 140, ''),
(292, 'CONTIGUA 1 SECCION 512', 140, ''),
(293, 'CONTIGUA 2 SECCION 512', 140, ''),
(294, 'BÃSICA SECCION 513', 141, ''),
(295, 'CONTIGUA 1 SECCION 513', 141, ''),
(296, 'BÃSICA SECCION 514', 142, ''),
(297, 'CONTIGUA 1 SECCION 514', 142, ''),
(298, 'BÃSICA SECCION 515', 143, ''),
(299, 'CONTIGUA 1 SECCION 515', 143, ''),
(300, 'CONTIGUA 2 SECCION 515', 143, ''),
(301, 'BÃSICA SECCION 516', 144, ''),
(302, 'CONTIGUA 1 SECCION 516', 144, ''),
(303, 'BÃSICA SECCION 517', 145, ''),
(304, 'CONTIGUA 1 SECCION 517', 145, ''),
(305, 'CONTIGUA 2 SECCION 517', 145, ''),
(306, 'BÃSICA SECCION 518', 146, ''),
(307, 'CONTIGUA 1 SECCION 518', 146, ''),
(308, 'BÃSICA SECCION 519', 147, ''),
(309, 'CONTIGUA 1 SECCION 519', 147, ''),
(310, 'BÃSICA SECCION 520', 148, ''),
(311, 'CONTIGUA 1 SECCION 520', 148, ''),
(312, 'BÃSICA SECCION 521', 149, ''),
(313, 'CONTIGUA 1 SECCION 522', 150, ''),
(314, 'BÃSICA SECCION 523', 151, ''),
(315, 'CONTIGUA 1 SECCION 523', 151, ''),
(316, 'BÃSICA SECCION 524', 152, ''),
(317, 'CONTIGUA 1 SECCION 525', 153, ''),
(318, 'BÃSICA SECCION 526', 154, ''),
(319, 'CONTIGUA 1 SECCION 526', 154, ''),
(320, 'BÃSICA SECCION 527', 155, ''),
(321, 'CONTIGUA 1 SECCION 527', 155, ''),
(322, 'CONTIGUA 2 SECCION 527', 155, ''),
(323, 'BÃSICA SECCION 528', 156, ''),
(324, 'CONTIGUA 1 SECCION 528', 156, ''),
(325, 'BÃSICA SECCION 529', 157, ''),
(326, 'CONTIGUA 1 SECCION 529', 157, ''),
(327, 'BÃSICA SECCION 530', 158, ''),
(328, 'CONTIGUA 1 SECCION 530', 158, ''),
(329, 'CONTIGUA 2 SECCION 530', 158, ''),
(330, 'BÃSICA SECCION 531', 159, ''),
(331, 'CONTIGUA 1 SECCION 531', 159, ''),
(332, 'BÃSICA SECCION 532', 160, ''),
(333, 'CONTIGUA 1 SECCION 532', 160, ''),
(334, 'CONTIGUA 2 SECCION 532', 160, ''),
(335, 'BÃSICA SECCION 533', 161, ''),
(336, 'CONTIGUA 1 SECCION 533', 161, ''),
(337, 'BÃSICA SECCION 534', 162, ''),
(338, 'CONTIGUA 1 SECCION 534', 162, ''),
(339, 'BÃSICA SECCION 535', 163, ''),
(340, 'CONTIGUA 1 SECCION 535', 163, ''),
(341, 'BÃSICA SECCION 536', 164, ''),
(342, 'CONTIGUA 1 SECCION 536', 164, ''),
(343, 'BÃSICA SECCION 537', 165, ''),
(344, 'CONTIGUA 1 SECCION 537', 165, ''),
(345, 'BÃSICA SECCION 538', 166, ''),
(346, 'CONTIGUA 1 SECCION 538', 166, ''),
(347, 'BÃSICA SECCION 539', 167, ''),
(348, 'CONTIGUA 1 SECCION 539', 167, ''),
(349, 'BÃSICA SECCION 540', 168, ''),
(350, 'CONTIGUA 1 SECCION 540', 168, ''),
(351, 'BÃSICA SECCION 541', 169, ''),
(352, 'CONTIGUA 1 SECCION 541', 169, ''),
(353, 'BÃSICA SECCION 542', 170, ''),
(354, 'CONTIGUA 1 SECCION 542', 170, ''),
(355, 'BÃSICA SECCION 543', 171, ''),
(356, 'CONTIGUA 1 SECCION 543', 171, ''),
(357, 'BÃSICA SECCION 544', 172, ''),
(358, 'CONTIGUA 1 SECCION 544', 172, ''),
(359, 'BÃSICA SECCION 545', 173, ''),
(360, 'CONTIGUA 1 SECCION 545', 173, ''),
(361, 'BÃSICA SECCION 546', 174, ''),
(362, 'CONTIGUA 1 SECCION 546', 174, ''),
(363, 'BÃSICA SECCION 547', 175, ''),
(364, 'CONTIGUA 1 SECCION 547', 175, ''),
(365, 'BÃSICA SECCION 548', 176, ''),
(366, 'CONTIGUA 1 SECCION 548', 176, ''),
(367, 'BÃSICA SECCION 549', 177, ''),
(368, 'CONTIGUA 1 SECCION 549', 177, ''),
(369, 'BÃSICA SECCION 550', 178, ''),
(370, 'CONTIGUA 1 SECCION 551', 179, ''),
(371, 'BÃSICA SECCION 552', 180, ''),
(372, 'CONTIGUA 1 SECCION 552', 180, ''),
(373, 'BÃSICA SECCION 553', 181, ''),
(374, 'CONTIGUA 1 SECCION 553', 181, ''),
(375, 'BÃSICA SECCION 554', 182, ''),
(376, 'CONTIGUA 1 SECCION 554', 182, ''),
(377, 'BÃSICA SECCION 555', 183, ''),
(378, 'CONTIGUA 1 SECCION 555', 183, ''),
(379, 'BÃSICA SECCION 556', 184, ''),
(380, 'CONTIGUA 1 SECCION 556', 184, ''),
(381, 'BÃSICA SECCION 557', 185, ''),
(382, 'CONTIGUA 1 SECCION 557', 185, ''),
(383, 'BÃSICA SECCION 558', 186, ''),
(384, 'CONTIGUA 1 SECCION 558', 186, ''),
(385, 'BÃSICA SECCION 559', 187, ''),
(386, 'CONTIGUA 1 SECCION 559', 187, ''),
(387, 'BÃSICA SECCION 566', 188, ''),
(388, 'CONTIGUA 1 SECCION 566', 188, ''),
(389, 'BÃSICA SECCION 567', 189, ''),
(390, 'CONTIGUA 1 SECCION 567', 189, ''),
(391, 'BÃSICA SECCION 568', 190, ''),
(392, 'CONTIGUA 1 SECCION 568', 190, ''),
(393, 'BÃSICA SECCION 569', 191, ''),
(394, 'CONTIGUA 1 SECCION 569', 191, ''),
(395, 'BÃSICA SECCION 570', 192, ''),
(396, 'CONTIGUA 1 SECCION 570', 192, ''),
(397, 'CONTIGUA 2 SECCION 570', 192, ''),
(398, 'CONTIGUA 3 SECCION 570', 192, ''),
(399, 'BÃSICA SECCION 571', 193, ''),
(400, 'CONTIGUA 1 SECCION 571', 193, ''),
(401, 'BÃSICA SECCION 572', 194, ''),
(402, 'CONTIGUA 1 SECCION 572', 194, ''),
(403, 'BÃSICA SECCION 573', 195, ''),
(404, 'CONTIGUA 1 SECCION 573', 195, ''),
(405, 'BÃSICA SECCION 577', 196, ''),
(406, 'CONTIGUA 1 SECCION 577', 196, ''),
(407, 'BÃSICA SECCION 578', 197, ''),
(408, 'CONTIGUA 1 SECCION 578', 197, ''),
(409, 'CONTIGUA 2 SECCION 578', 197, ''),
(410, 'CONTIGUA 3 SECCION 578', 197, ''),
(411, 'CONTIGUA 4 SECCION 578', 197, ''),
(412, 'CONTIGUA 5 SECCION 578', 197, ''),
(413, 'CONTIGUA 6 SECCION 578', 197, ''),
(414, 'CONTIGUA 7 SECCION 578', 197, ''),
(415, 'BÃSICA SECCION 579', 198, ''),
(416, 'CONTIGUA 1 SECCION 579', 198, ''),
(417, 'BÃSICA SECCION 641', 199, ''),
(418, 'CONTIGUA 1 SECCION 641', 199, ''),
(419, 'CONTIGUA 2 SECCION 641', 199, ''),
(420, 'CONTIGUA 3 SECCION 641', 199, ''),
(421, 'BÃSICA SECCION 642', 200, ''),
(422, 'CONTIGUA 1 SECCION 642', 200, ''),
(423, 'CONTIGUA 2 SECCION 642', 200, ''),
(424, 'CONTIGUA 3 SECCION 642', 200, ''),
(425, 'CONTIGUA 4 SECCION 642', 200, ''),
(426, 'CONTIGUA 5 SECCION 642', 200, ''),
(427, 'BÃSICA SECCION 643', 201, ''),
(428, 'CONTIGUA 1 SECCION 643', 201, ''),
(429, 'CONTIGUA 2 SECCION 643', 201, ''),
(430, 'CONTIGUA 3 SECCION 643', 201, ''),
(431, 'BÃSICA SECCION 646', 202, ''),
(432, 'CONTIGUA 1 SECCION 646', 202, ''),
(433, 'CONTIGUA 2 SECCION 646', 202, ''),
(434, 'BÃSICA SECCION 647', 203, ''),
(435, 'CONTIGUA 1 SECCION 649', 204, ''),
(436, 'CONTIGUA 2 SECCION 649', 204, ''),
(437, 'CONTIGUA 3 SECCION 649', 204, ''),
(438, 'CONTIGUA 4 SECCION 649', 204, ''),
(439, 'CONTIGUA 5 SECCION 649', 204, ''),
(440, 'CONTIGUA 6 SECCION 649', 204, ''),
(441, 'CONTIGUA 7 SECCION 649', 204, ''),
(442, 'BÃSICA SECCION 650', 205, ''),
(443, 'CONTIGUA 1 SECCION 650', 205, ''),
(444, 'CONTIGUA 2 SECCION 650', 205, ''),
(445, 'CONTIGUA 3 SECCION 650', 205, ''),
(446, 'CONTIGUA 4 SECCION 650', 205, ''),
(447, 'CONTIGUA 5 SECCION 650', 205, ''),
(448, 'CONTIGUA 6 SECCION 650', 205, ''),
(449, 'CONTIGUA 7 SECCION 650', 205, ''),
(450, 'BÃSICA SECCION 651', 206, ''),
(451, 'CONTIGUA 1 SECCION 652', 207, ''),
(452, 'CONTIGUA 2 SECCION 652', 207, ''),
(453, 'BÃSICA SECCION 653', 208, ''),
(454, 'CONTIGUA 1 SECCION 653', 208, ''),
(455, 'CONTIGUA 2 SECCION 653', 208, ''),
(456, 'CONTIGUA 3 SECCION 653', 208, ''),
(457, 'BÃSICA SECCION 654', 209, ''),
(458, 'CONTIGUA 1 SECCION 654', 209, ''),
(459, 'CONTIGUA 2 SECCION 654', 209, ''),
(460, 'BÃSICA SECCION 655', 210, ''),
(461, 'CONTIGUA 1 SECCION 655', 210, ''),
(462, 'BÃSICA SECCION 656', 211, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `casillas_x_usuario`
--

CREATE TABLE `casillas_x_usuario` (
  `id_usuario` int(11) NOT NULL,
  `id_casilla` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `partidos`
--

CREATE TABLE `partidos` (
  `id` int(11) NOT NULL,
  `nombre_partido` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `partidos`
--

INSERT INTO `partidos` (`id`, `nombre_partido`) VALUES
(1, 'PRI'),
(2, 'PAN'),
(3, 'MORENA'),
(4, 'PRD'),
(5, 'NUEVA ALIANZA'),
(6, 'ENCUENTRO CIUDADANO'),
(7, 'PARTIDO DEL TRABAJO'),
(8, 'PARTIDO VERDE'),
(9, 'MOVIMIENTO CIUDADANO'),
(10, 'COALICION POR MEXICO AL FRENTE'),
(11, 'JUNTOS HAREMOS HISTORIA'),
(12, 'TODOS POR MEXICO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `secciones`
--

CREATE TABLE `secciones` (
  `id` int(11) NOT NULL,
  `seccion` varchar(10) CHARACTER SET latin1 NOT NULL,
  `id_distrito` int(11) NOT NULL,
  `representante` varchar(100) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `secciones`
--

INSERT INTO `secciones` (`id`, `seccion`, `id_distrito`, `representante`) VALUES
(1, '261', 0, ''),
(2, '262', 0, ''),
(3, '263', 0, ''),
(4, '264', 0, ''),
(5, '265', 0, ''),
(6, '266', 0, ''),
(7, '273', 0, ''),
(8, '274', 0, ''),
(9, '275', 0, ''),
(10, '276', 0, ''),
(11, '277', 0, ''),
(12, '278', 0, ''),
(13, '279', 0, ''),
(14, '280', 0, ''),
(15, '281', 0, ''),
(16, '282', 0, ''),
(17, '283', 0, ''),
(18, '284', 0, ''),
(19, '296', 0, ''),
(20, '297', 0, ''),
(21, '298', 0, ''),
(22, '299', 0, ''),
(23, '300', 0, ''),
(24, '301', 0, ''),
(25, '302', 0, ''),
(26, '303', 0, ''),
(27, '304', 0, ''),
(28, '305', 0, ''),
(29, '306', 0, ''),
(30, '307', 0, ''),
(31, '317', 0, ''),
(32, '318', 0, ''),
(33, '319', 0, ''),
(34, '320', 0, ''),
(35, '321', 0, ''),
(36, '322', 0, ''),
(37, '323', 0, ''),
(38, '324', 0, ''),
(39, '325', 0, ''),
(40, '326', 0, ''),
(41, '327', 0, ''),
(42, '328', 0, ''),
(43, '329', 0, ''),
(44, '330', 0, ''),
(45, '331', 0, ''),
(46, '332', 0, ''),
(47, '333', 0, ''),
(48, '334', 0, ''),
(49, '335', 0, ''),
(50, '336', 0, ''),
(51, '337', 0, ''),
(52, '353', 0, ''),
(53, '354', 0, ''),
(54, '355', 0, ''),
(55, '356', 0, ''),
(56, '357', 0, ''),
(57, '358', 0, ''),
(58, '359', 0, ''),
(59, '360', 0, ''),
(60, '361', 0, ''),
(61, '362', 0, ''),
(62, '363', 0, ''),
(63, '364', 0, ''),
(64, '395', 0, ''),
(65, '396', 0, ''),
(66, '397', 0, ''),
(67, '398', 0, ''),
(68, '399', 0, ''),
(69, '400', 0, ''),
(70, '401', 0, ''),
(71, '402', 0, ''),
(72, '403', 0, ''),
(73, '404', 0, ''),
(74, '405', 0, ''),
(75, '406', 0, ''),
(76, '407', 0, ''),
(77, '408', 0, ''),
(78, '409', 0, ''),
(79, '427', 0, ''),
(80, '428', 0, ''),
(81, '429', 0, ''),
(82, '430', 0, ''),
(83, '431', 0, ''),
(84, '432', 0, ''),
(85, '433', 0, ''),
(86, '434', 0, ''),
(87, '435', 0, ''),
(88, '436', 0, ''),
(89, '437', 0, ''),
(90, '438', 0, ''),
(91, '439', 0, ''),
(92, '440', 0, ''),
(93, '441', 0, ''),
(94, '442', 0, ''),
(95, '443', 0, ''),
(96, '444', 0, ''),
(97, '445', 0, ''),
(98, '446', 0, ''),
(99, '447', 0, ''),
(100, '448', 0, ''),
(101, '449', 0, ''),
(102, '450', 0, ''),
(103, '451', 0, ''),
(104, '452', 0, ''),
(105, '453', 0, ''),
(106, '454', 0, ''),
(107, '455', 0, ''),
(108, '456', 0, ''),
(109, '457', 0, ''),
(110, '458', 0, ''),
(111, '459', 0, ''),
(112, '481', 0, ''),
(113, '482', 0, ''),
(114, '483', 0, ''),
(115, '484', 0, ''),
(116, '485', 0, ''),
(117, '486', 0, ''),
(118, '487', 0, ''),
(119, '488', 0, ''),
(120, '489', 0, ''),
(121, '490', 0, ''),
(122, '491', 0, ''),
(123, '492', 0, ''),
(124, '493', 0, ''),
(125, '494', 0, ''),
(126, '495', 0, ''),
(127, '496', 0, ''),
(128, '497', 0, ''),
(129, '501', 0, ''),
(130, '502', 0, ''),
(131, '503', 0, ''),
(132, '504', 0, ''),
(133, '505', 0, ''),
(134, '506', 0, ''),
(135, '507', 0, ''),
(136, '508', 0, ''),
(137, '509', 0, ''),
(138, '510', 0, ''),
(139, '511', 0, ''),
(140, '512', 0, ''),
(141, '513', 0, ''),
(142, '514', 0, ''),
(143, '515', 0, ''),
(144, '516', 0, ''),
(145, '517', 0, ''),
(146, '518', 0, ''),
(147, '519', 0, ''),
(148, '520', 0, ''),
(149, '521', 0, ''),
(150, '522', 0, ''),
(151, '523', 0, ''),
(152, '524', 0, ''),
(153, '525', 0, ''),
(154, '526', 0, ''),
(155, '527', 0, ''),
(156, '528', 0, ''),
(157, '529', 0, ''),
(158, '530', 0, ''),
(159, '531', 0, ''),
(160, '532', 0, ''),
(161, '533', 0, ''),
(162, '534', 0, ''),
(163, '535', 0, ''),
(164, '536', 0, ''),
(165, '537', 0, ''),
(166, '538', 0, ''),
(167, '539', 0, ''),
(168, '540', 0, ''),
(169, '541', 0, ''),
(170, '542', 0, ''),
(171, '543', 0, ''),
(172, '544', 0, ''),
(173, '545', 0, ''),
(174, '546', 0, ''),
(175, '547', 0, ''),
(176, '548', 0, ''),
(177, '549', 0, ''),
(178, '550', 0, ''),
(179, '551', 0, ''),
(180, '552', 0, ''),
(181, '553', 0, ''),
(182, '554', 0, ''),
(183, '555', 0, ''),
(184, '556', 0, ''),
(185, '557', 0, ''),
(186, '558', 0, ''),
(187, '559', 0, ''),
(188, '566', 0, ''),
(189, '567', 0, ''),
(190, '568', 0, ''),
(191, '569', 0, ''),
(192, '570', 0, ''),
(193, '571', 0, ''),
(194, '572', 0, ''),
(195, '573', 0, ''),
(196, '577', 0, ''),
(197, '578', 0, ''),
(198, '579', 0, ''),
(199, '641', 0, ''),
(200, '642', 0, ''),
(201, '643', 0, ''),
(202, '646', 0, ''),
(203, '647', 0, ''),
(204, '649', 0, ''),
(205, '650', 0, ''),
(206, '651', 0, ''),
(207, '652', 0, ''),
(208, '653', 0, ''),
(209, '654', 0, ''),
(210, '655', 0, ''),
(211, '656', 0, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre_completo` varchar(200) CHARACTER SET latin1 DEFAULT NULL,
  `nombre_usuario` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `password` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `tipo_usuario` int(11) NOT NULL COMMENT '1 admin, 2 capturista',
  `estatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `candidatos`
--
ALTER TABLE `candidatos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `casillas`
--
ALTER TABLE `casillas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `casillas_x_usuario`
--
ALTER TABLE `casillas_x_usuario`
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_casilla` (`id_casilla`);

--
-- Indices de la tabla `partidos`
--
ALTER TABLE `partidos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `secciones`
--
ALTER TABLE `secciones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_distrito` (`id_distrito`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unik_id_usuario` (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `candidatos`
--
ALTER TABLE `candidatos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `casillas`
--
ALTER TABLE `casillas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=463;

--
-- AUTO_INCREMENT de la tabla `partidos`
--
ALTER TABLE `partidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `secciones`
--
ALTER TABLE `secciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=212;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `casillas_x_usuario`
--
ALTER TABLE `casillas_x_usuario`
  ADD CONSTRAINT `casillas_x_usuario_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`),
  ADD CONSTRAINT `casillas_x_usuario_ibfk_2` FOREIGN KEY (`id_casilla`) REFERENCES `casillas` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
