
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Inang: localhost
-- Waktu pembuatan: 20 Jun 2016 pada 09.44
-- Versi Server: 10.0.20-MariaDB
-- Versi PHP: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `u419397711_home`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `switch`
--

CREATE TABLE IF NOT EXISTS `switch` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `switch` tinyint(4) NOT NULL,
  `start` time NOT NULL,
  `stop` time NOT NULL,
  `timer` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data untuk tabel `switch`
--

INSERT INTO `switch` (`id`, `switch`, `start`, `stop`, `timer`) VALUES
(1, 1, '00:00:00', '00:00:00', 0),
(2, 1, '00:00:00', '00:00:00', 0),
(3, 1, '00:00:00', '00:00:00', 0),
(4, 1, '00:00:00', '00:00:00', 0),
(5, 1, '00:00:00', '00:00:00', 0),
(6, 1, '00:00:00', '00:00:00', 0),
(7, 1, '00:00:00', '00:00:00', 0),
(8, 1, '00:00:00', '00:00:00', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `passcode` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `passcode`, `status`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'aktif');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
