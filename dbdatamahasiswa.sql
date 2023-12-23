CREATE DATABASE dbdatamahasiswa;
SHOW DATABASES;
USE dbdatamahasiswa;
CREATE TABLE datamahasiswa (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nim VARCHAR(20),
    nama VARCHAR(100),
    No_urut INT
);




INSERT INTO datamahasiswa (id,nim,nama,No_urut)
VALUES
(1,'2305551003','I Made Ray Adhya Khrisna',1),
(2,'2305551004','Putu Dea Ananda Putri',2),
(3,'2305551005','Bagus Jagra Wicaksana',3),
(4,'2305551006','Arjuna Aditya Pratama',4),
(5,'2305551007','Dewa Putu Ananta Prayoga',5),
(6,'2305551009','Nyoman Wiprayanka',6),
(7,'2305551011','I Kadek Chandra Wiguna',7),
(8,'2305551013','Agus Arya Wiraguna',8),
(9,'2305551015','I Ketut Arya Arinatha Wardana',9),
(10,'2305551017','I Putu Rama Dita',10),
(11,'2305551018','Anak Agung Made Krishna Mahendrayana',11),
(12,'2305551029','I Kadek Apri Sisna Saputra',12),
(13,'2305551030','Ni Komang Anik Sutariani',13),
(14,'2305551031','I Putu Doddy Eka Wiryana',14),
(15,'2305551032','I Gede Kresna Naradha',15),
(16,'2305551033','Putu Gede Pradnya wiswambra',16),
(17,'2305551040','I Kadek Ryan Dwi Anata Putra',17),
(18,'2305551042','I Putu Arya Putra Raditya',18),
(19,'2305551045','Luh Dewita Cahyani Aridiningsih',19),
(20,'2305551046','I Gede Ryan Widya Purnama Putra',20),
(21,'2305551054','I Gede Putu Janardana Mahardika',21),
(22,'2305551079','Ni Kadek Melia Shanti ',22),
(23,'2305551097','I Made Yohan Dwi Pramana',23),
(24,'2305551099','Narto Frenlyn Aritonang',24),
(25,'2305551103','I Gede Krisna Widyanatha Kusuma',25),
(26,'2305551111','Nolan Mahotama Abipantara Urya Gotama',26),
(27,'2305551146','Muhammad Dzikri Dhaniwan',27),
(28,'2305551159','I Ketut Adinata Vyarsa',28);

DROP TABLE datamahasiswa, 
