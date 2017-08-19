CREATE DATABASE perkenalan;
USE perkenalan;
CREATE TABLE users(id_user varchar(255) PRIMARY KEY, npm char(12) UNIQUE, password text, email varchar(50), role varchar(10));

CREATE TABLE profile_kating(id_user varchar(255) PRIMARY KEY, nama varchar(50), jk varchar(10), tempat_lahir varchar(20), tgl_lahir date, alamat_kos text, no_hp varchar(12), id_line varchar(20), link_foto text);
ALTER TABLE profile_kating ADD  FOREIGN KEY (id_user) REFERENCES users(id_user);

CREATE TABLE profile_maba(id_user varchar(255) PRIMARY KEY, nama varchar(50), jk varchar(10), tempat_lahir varchar(20), tgl_lahir date, alamat_kos text, no_hp varchar(12), id_line varchar(20), link_foto text, motto_hidup text);
ALTER TABLE profile_maba ADD  FOREIGN KEY (id_user) REFERENCES users(id_user);

CREATE TABLE BK(id_bk int PRIMARY KEY AUTO_INCREMENT, npm char(12), jabatan varchar(20), lembaga varchar(20), tahun_jabatan int);
ALTER TABLE BK ADD  FOREIGN KEY (npm) REFERENCES users(npm);

CREATE TABLE panitia(id_panitia int PRIMARY KEY AUTO_INCREMENT, npm char(12), jabatan varchar(20), tahun_jabatan int);
ALTER TABLE panitia ADD  FOREIGN KEY (npm) REFERENCES users(npm);

CREATE TABLE kuis_bk(id_jawaban int PRIMARY KEY AUTO_INCREMENT, npm_maba char(12), nama varchar(50), jabatan varchar(20), lembaga varchar(20), link_foto text, fill_time timestamp, status int);
ALTER TABLE kuis_bk ADD  FOREIGN KEY (npm_maba) REFERENCES users(npm);

CREATE TABLE kuis_panitia(id_jawaban int PRIMARY KEY AUTO_INCREMENT, npm_maba char(12), nama varchar(50), jabatan varchar(20), link_foto text, fill_time timestamp, status int);
ALTER TABLE kuis_panitia ADD  FOREIGN KEY (npm_maba) REFERENCES users(npm);

CREATE TABLE perkenalan_kating(id_perkenalan_kating int PRIMARY KEY AUTO_INCREMENT, id_user_maba varchar(255), id_user_kating varchar(255), nama varchar(50), ciri_khas text, link_foto text, request_time datetime, status int, approve_time datetime);
ALTER TABLE perkenalan_kating ADD  FOREIGN KEY (id_user_maba) REFERENCES users(id_user);
ALTER TABLE perkenalan_kating ADD  FOREIGN KEY (id_user_kating) REFERENCES users(id_user);

CREATE TABLE perkenalan_angkatan(id_perkenalan_angkatan int PRIMARY KEY AUTO_INCREMENT, id_user1 varchar(255), id_user2 varchar(255), nama varchar(50), tempat_lahir varchar(20), tgl_lahir date, alamat_kos text, id_line varchar(20), no_hp varchar(12), link_foto text, request_time datetime);
ALTER TABLE perkenalan_angkatan ADD  FOREIGN KEY (id_user1) REFERENCES users(id_user);
ALTER TABLE perkenalan_angkatan ADD  FOREIGN KEY (id_user2) REFERENCES users(id_user);

--DROP DATABASE perkenalan;
