/* Database dan Tabel */

create database db_dosen;


use dosen_db;

CREATE TABLE `users` (
 `id` int(11) NOT NULL auto_increment,
 `npp_dosen` varchar(20),
 `nama_dosen` varchar(50),
 `matkul_dosen` varchar(20),
 PRIMARY KEY (`id`)
);
