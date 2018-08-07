-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Inang: localhost
-- Waktu pembuatan: 07 Agu 2018 pada 16.25
-- Versi Server: 5.5.25a
-- Versi PHP: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `creart`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `error`
--

CREATE TABLE IF NOT EXISTS `error` (
  `error` varchar(100) NOT NULL,
  `pesan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `error`
--

INSERT INTO `error` (`error`, `pesan`) VALUES
('berhasil_daftar', 'selamat anda telah berhasil daftar'),
('Email telah digunakan', 'Email telah digunakan'),
('no_hp_sama', 'No hp telah digunakan'),
('Email_password', 'Email atau password yang diinputkan salah'),
('berhasil_diubah', 'Data berhasil dirubah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_profiles`
--

CREATE TABLE IF NOT EXISTS `user_profiles` (
  `email` varchar(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `password` char(64) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `alamat` text NOT NULL,
  `status_akun` int(1) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_profiles`
--

INSERT INTO `user_profiles` (`email`, `nama`, `password`, `no_hp`, `alamat`, `status_akun`) VALUES
('anwir@gmail.com', 'Anwir', 'anwir123', '08732163128', 'Bogor', 1),
('dede@gmail.com', 'dede rahman', 'dudu123', '08762332423', 'Bogor', 1),
('dickygeraldi123@gmail.com', 'Ganis Maulia', 'INTELcoreI33', '089670033902', 'Sancang', 1),
('yola@gmail.com', 'Yola ', 'Yola1234', '08723123213', 'lamongan', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
