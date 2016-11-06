-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 06, 2016 at 10:16 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `finnder`
--

-- --------------------------------------------------------

--
-- Table structure for table `profe`
--

CREATE TABLE `profe` (
  `Nombre` varchar(50) NOT NULL,
  `Apellido` varchar(50) NOT NULL,
  `Universidad` varchar(100) NOT NULL,
  `Curso` varchar(50) NOT NULL,
  `foto` varchar(800) NOT NULL,
  `codigo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profe`
--

INSERT INTO `profe` (`Nombre`, `Apellido`, `Universidad`, `Curso`, `foto`, `codigo`) VALUES
('Jonathan', 'Chavez', 'Universidad San Ignacio de Loyola', 'Taller de Software II', 'https://media.licdn.com/mpr/mpr/shrinknp_200_200/AAEAAQAAAAAAAAJRAAAAJDkzMTZhMjI4LTM0ZjEtNDljNy1iMTU2LWU4NWU4MTI2NGZmNw.jpg', 1),
('Gisella', 'Figueroa', 'Universidad San Ignacio de Loyola', 'Fundamos de los Sistemas de Informacion', 'https://lh4.ggpht.com/B2UjZIJ0iwp0LfkUnITqp_iYek9PWEXuXLOHl3XYPMR_2zEGsHPR6ruu4OeQKOfvJnJ8=w300', 2),
('Manuel', 'Malquichagua', 'Pontificie Universidad Catolica del Peru', 'Calculo I', 'https://lh4.ggpht.com/B2UjZIJ0iwp0LfkUnITqp_iYek9PWEXuXLOHl3XYPMR_2zEGsHPR6ruu4OeQKOfvJnJ8=w300', 3),
('Luis', 'Tume', 'Pontificie Universidad Catolica del Peru', 'Calculo II', 'https://lh4.ggpht.com/B2UjZIJ0iwp0LfkUnITqp_iYek9PWEXuXLOHl3XYPMR_2zEGsHPR6ruu4OeQKOfvJnJ8=w300', 4),
('Cesar', 'Acuña', 'Universidad Cesar Vallejo', 'Quimica Pura', 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/6b/C%C3%A9sar_Acu%C3%B1a_Peralta_-_CAP.jpg/220px-C%C3%A9sar_Acu%C3%B1a_Peralta_-_CAP.jpg', 5),
('Jorge', 'Nolasco Valenzuela', 'Universidad San Ignacio de Loyola', 'Programacion Orientada a Objetos', '', 6),
('Carlos', 'Pardo Figueroa', 'Universidad San Ignacio de Loyola', 'Western Civilization', '', 7),
('Hugo ', 'Gonzales Aguilar', 'Universidad San Ignacio de Loyola', 'Total Wellness', '', 8),
('Alexander ', 'Carlos de la Cruz ', 'Universidad San Ignacio de Loyola', 'College Algebra', '', 9),
('Ciro', 'Alegria Varona', 'Ponticie Universidad Catolica del Peru', 'Filosofia Social', '', 10),
('Sheyla', 'Blumen Cohen', 'Pontifice Universidad Catolica del Peru', 'Seminario de Tesis', '', 11);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `profe`
--
ALTER TABLE `profe`
  ADD PRIMARY KEY (`codigo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `profe`
--
ALTER TABLE `profe`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
