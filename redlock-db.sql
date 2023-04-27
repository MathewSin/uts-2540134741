CREATE DATABASE redlock;
use redlock;



CREATE TABLE users(
	ID INT PRIMARY KEY NOT NULL,
	nama VARCHAR(255) NOT NULL,
	alamat VARCHAR(255) NOT NULL,
	Jabatan VARCHAR(255) NOT NULL
);



INSERT INTO users VALUES
(001, "Mathew", "Anggrek", "Mahasiswa"),
(002, "Imanuel", "Syahdan", "Dosen"),
(003, "Supriyanto", "Kijang", "Staff"),
(004, "Sin", "Alsut", "Rektor");
