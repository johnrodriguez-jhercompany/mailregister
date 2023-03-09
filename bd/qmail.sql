-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 09-03-2023 a las 16:58:29
-- Versión del servidor: 5.7.36
-- Versión de PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `qmail`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `correo`
--

DROP TABLE IF EXISTS `correo`;
CREATE TABLE IF NOT EXISTS `correo` (
  `idCorreo` int(11) NOT NULL AUTO_INCREMENT,
  `destinatario` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `emisor` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `fecha` date NOT NULL,
  `servidor_smtp` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `asunto` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `contenido` text COLLATE utf8_spanish_ci NOT NULL,
  `idEmpresa` int(11) NOT NULL,
  PRIMARY KEY (`idCorreo`),
  KEY `idEmpresa` (`idEmpresa`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `correo`
--

INSERT INTO `correo` (`idCorreo`, `destinatario`, `emisor`, `fecha`, `servidor_smtp`, `asunto`, `contenido`, `idEmpresa`) VALUES
(1, 'juan@example.com', 'maria@example.com', '2023-03-09', 'smtp.example.com', 'Solicitud de presupuesto', 'Estimado Juan, adjunto encontrará la cotización solicitada. Quedamos a la espera de su respuesta. Saludos cordiales, María.', 2),
(2, 'pedro@example.com', 'carlos@example.com', '2023-03-08', 'smtp.xyzcorp.com', 'Reunión de equipo', 'Estimado Pedro, le confirmo la reunión de equipo para el día de mañana a las 10:00 AM en la sala de juntas. Favor de confirmar su asistencia. Saludos, Carlos.', 1),
(3, 'ana@example.com', 'juan@example.com', '2023-03-07', 'smtp.abc.com', 'Confirmación de pedido', 'Estimado Juan, le confirmamos que su pedido ha sido recibido y se encuentra en proceso de preparación. Le mantendremos informado sobre el estatus del mismo. Saludos, Ana.', 4),
(4, 'luis@example.com', 'pedro@example.com', '2023-03-06', 'smtp.defcorp.com', 'Informe de ventas', 'Estimado Pedro, adjunto encontrará el informe de ventas correspondiente al mes de febrero. Quedo a la espera de sus comentarios. Saludos, Luis.', 2),
(5, 'claudia@example.com', 'ana@example.com', '2023-03-05', 'smtp.ghiindustries.com', 'Invitación a evento', 'Estimada Ana, le invitamos al evento de lanzamiento de nuestro nuevo producto. Adjunto encontrará la invitación con los detalles del evento. Esperamos contar con su presencia. Saludos, Claudia.', 5),
(6, 'mario@example.com', 'luis@example.com', '2023-03-04', 'smtp.jklmenterprises.com', 'Recordatorio de pago', 'Estimado Luis, le recordamos que su factura vence el día de hoy. Favor de realizar el pago correspondiente a la brevedad. Saludos, Mario.', 6),
(7, 'sofia@example.com', 'claudia@example.com', '2023-03-03', 'smtp.nopinc.com', 'Confirmación de cita', 'Estimada Claudia, le confirmamos su cita para el día de mañana a las 2:00 PM. Adjunto encontrará los detalles de la cita. Saludos, Sofía.', 7),
(8, 'mariana@example.com', 'Carla@example.com', '2023-02-28', 'smtp.vwxcorp.com', 'Felicitaciones por el logro', 'Estamos contentos por el logro alcanzado en tu funcion suerte y adelante', 10),
(9, 'carla@example.com', 'mario@example.com', '2023-03-08', 'smtp.pqrsolutions.com', 'Solicitud de informaciÃ³n', 'Estimado solicito informacion sobre su empresa para poder realizar cotizaciÃ³n.', 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

DROP TABLE IF EXISTS `empresa`;
CREATE TABLE IF NOT EXISTS `empresa` (
  `idEmpresa` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `empleado` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`idEmpresa`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`idEmpresa`, `nombre`, `empleado`) VALUES
(1, 'ACME Inc.', 'Juan Pérez'),
(2, 'XYZ Corp.', 'María Gómez'),
(3, 'ABC Company', 'Pedro García'),
(4, 'DEF Corporation', 'Ana López'),
(5, 'GHI Industries', 'Luis Hernández'),
(6, 'JKLM Enterprises', 'Claudia Martínez'),
(7, 'NOP Inc.', 'Mario González'),
(8, 'PQR Solutions', 'Sofía Rodríguez'),
(9, 'STU Enterprises', 'Carla Sánchez'),
(10, 'VWX Corp.', 'Pablo Ramírez');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
