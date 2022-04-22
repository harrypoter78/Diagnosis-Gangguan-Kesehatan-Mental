-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               10.4.6-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for gangguanmental
CREATE DATABASE IF NOT EXISTS `gangguanmental` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `gangguanmental`;

-- Dumping structure for table gangguanmental.admin
CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(3) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table gangguanmental.admin: ~0 rows (approximately)
DELETE FROM `admin`;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
	(1, 'admin', 'admin');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;

-- Dumping structure for table gangguanmental.gejala
CREATE TABLE IF NOT EXISTS `gejala` (
  `id_gejala` int(3) NOT NULL AUTO_INCREMENT,
  `kode_gejala` varchar(3) NOT NULL,
  `nama_gejala` varchar(100) NOT NULL,
  PRIMARY KEY (`id_gejala`),
  KEY `kode_gejala` (`kode_gejala`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

-- Dumping data for table gangguanmental.gejala: ~34 rows (approximately)
DELETE FROM `gejala`;
/*!40000 ALTER TABLE `gejala` DISABLE KEYS */;
INSERT INTO `gejala` (`id_gejala`, `kode_gejala`, `nama_gejala`) VALUES
	(1, 'G1', 'Kesulitan tidur'),
	(2, 'G2', 'Mendengar suara aneh'),
	(3, 'G3', 'Sering atau mudah menangis'),
	(4, 'G4', 'Kehilangan minat untuk melakukan aktifitas'),
	(5, 'G5', 'Emosi menjadi datar'),
	(6, 'G6', 'Ingatan terganggu'),
	(7, 'G7', 'Menjauh dari lingkungan sosial'),
	(8, 'G8', 'Pikiran dan berbicara kacau'),
	(9, 'G9', 'Rasa takut dan khawatir berlebihan'),
	(10, 'G10', 'Mimpi buruk'),
	(11, 'G11', 'Sering merasa sedih'),
	(12, 'G12', 'Mempercayai sesuatu yang tidak nyata'),
	(13, 'G13', 'Sulit mengendalikan emosi'),
	(14, 'G14', 'Diliputi perasaan bersalah berlebihan'),
	(15, 'G15', 'Perasaan bermusuhan'),
	(16, 'G16', 'Menghindari sebuah tempat atau objek'),
	(17, 'G17', 'Kehilangan motivasi'),
	(18, 'G18', 'Sering cemas'),
	(19, 'G19', 'Mood swing'),
	(20, 'G20', 'Perasaan putus asa'),
	(21, 'G21', 'Kurangnya daya ingat'),
	(22, 'G22', 'Bicara terlalu cepat'),
	(23, 'G23', 'Gangguan pernapasan'),
	(24, 'G24', 'Gerakan tubuh dan pikiran yang lambat'),
	(25, 'G25', 'Merasa kelebihan berat badan'),
	(26, 'G26', 'Makan dalam jumlah besar dan dikeluarkan secara paksa'),
	(27, 'G27', 'Memiliki obsesi konstan terhadap sesuatu'),
	(28, 'G28', 'Melakukan aksi tertentu secara berulang untuk meredakan kecemasan'),
	(29, 'G29', 'Takut kotor atau terkena penyakit'),
	(30, 'G30', 'Sangat menginginkan segala sesuatu tersusun selaras atau teratur'),
	(31, 'G31', 'Suka atau berkeinginan untuk mengumpulkan barang-barang bekas yang Anda temukan'),
	(32, 'G32', 'Memiliki obsesi akan kalori dan lemak yang terkandung pada makanan'),
	(33, 'G33', 'Memiliki perubahan periode pada saat sering sekali makan atau bahkan tidak sama sekali');
/*!40000 ALTER TABLE `gejala` ENABLE KEYS */;

-- Dumping structure for table gangguanmental.penyakit
CREATE TABLE IF NOT EXISTS `penyakit` (
  `id_penyakit` int(3) NOT NULL AUTO_INCREMENT,
  `kode_penyakit` varchar(3) NOT NULL,
  `nama_penyakit` varchar(50) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `solusi_obat` text DEFAULT NULL,
  `solusi_lain` text DEFAULT NULL,
  PRIMARY KEY (`id_penyakit`),
  KEY `kode_penyakit` (`kode_penyakit`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- Dumping data for table gangguanmental.penyakit: ~9 rows (approximately)
DELETE FROM `penyakit`;
/*!40000 ALTER TABLE `penyakit` DISABLE KEYS */;
INSERT INTO `penyakit` (`id_penyakit`, `kode_penyakit`, `nama_penyakit`, `deskripsi`, `solusi_obat`, `solusi_lain`) VALUES
	(1, 'K1', 'Skizofrenia', 'Skizofrenia merupakan penyakit Kesehatan mental yang menyebabkan pasien mengalami halusinasi, mendengar suara aneh dll. Pasien skizofrenia belum memiliki obat khusus tetapi hanya obat untuk mengurangi efek halusinasi. ', 'Obat-obatan berguna untuk menangani halusinasi dan delusi, dokter akan meresepkan obat antipsikotik seperti, Chlorpromazine, Quetiapine, Aripiprazole, Clozapine', 'Psikoterapi pertama terapi individual psikiater akan mengajarkan keluarga dan teman pasien bagaimana berinteraksi dengan pasien, kedua terapi perilaku kognitif berguna mengubah perilaku dan pola pikir pasien, ketiga terapi remediasi kognitif berguna untuk mengajarkan pasien cara memahami lingkungan sosial, meningkatkan kemampuan pasien dalam memperhatikan atau mengingat sesuatu, dan mengendalikan pola pikirnya, keempat terapi elektrokonvulsif berguna untuk meredakan keinginan bunuh diri, mengatasi gejala depresi berat, dan menangani psikosis.'),
	(2, 'K2', 'Post Traumatic Stress Disorder (PTSD)', 'Pengobatan PTSD bertujuan untuk meredakan respons emosi pasien dan mengajarkan pasien cara mengendalikan diri dengan baik ketika teringat pada kejadian traumatis.', 'Obat-obatan yang diberikan tergantung pada gejala yang dialami pasien, adalah Antidepresan untuk mengatasi depresi, seperti sertraline dan paroxetine, Anticemas untuk mengatasi kecemasan, seperti benzodiazepine, alprazolam (Xanax), chlordiazepoxide (Librium), clonazepam (Klonopin), diazepam(Valium), dan lorazepam, dan Prazosin untuk mencegah mimpi buruk.', 'Psikoterapi, pertama terapi perilaku kognitif berguna untuk mengenali dan mengubah pola pikir pasien yang negatif menjadi positif, kedua terapi eksposur berguna untuk membantu pasien menghadapi keadaan dan ingatan yang memicu trauma secara efektif, ketiga Eye movement desensitization and reprocessing (EMDR), yaitu kombinasi terapi eksposur dan teknik gerakan mata untuk mengubah respons pasien saat teringat kejadian traumatis.'),
	(3, 'K3', 'Depression', 'Depresi adalah gangguan suasana hati yang menyebabkan seseorang teru merasa sedih dan kehilangan minat. Kondisi ini lebih dari sekadar perasaan sedih yang normalnya dialami orang-orang dengan kondisi mentalnya sehat. Ini karena perasaan sedih sangat sulit untuk disingkirkan sehingga terus menerus menghantui. ', 'Obat-obatan yang digunakan untuk mengobati depresi adalah Obat antidepresan, seperti escitalopram, paroxetine, sertraline, fluoxetine, citalopram, venlafaxine, duloxetine, dan bupropion.', 'Psikoterapi, pertama Cognitive behavior therapy (CBT) membantu pengidap melepaskan pikiran dan perasaan negatif, serta menggantinya dengan respon positif, kedua Problem-solving therapy (PST) untuk meningkatkan kemampuan pengidap menghadapi pengalaman yang memicu rasa tertekan, ketiga Interpersonal therapy (IPT) untuk membantu mengatasi masalah yang muncul saat berhubungan dengan orang lain,  keempat Terapi kejut listrik atau electroconvulsive therapy (ECT) untuk pengidap depresi yang tidak membaik setelah diberi obat-obatan, mengalami gejala psikosis, serta pengidap yang mencoba bunuh diri.'),
	(4, 'K4', 'Bipolar Disorder', 'Gangguan bipolar adalah kondisi seseorang yang mengalami perubahan suasana hati secara fluktuatif dan drastis, misalnya tiba-tiba menjadi sangat bahagia dari yang sebelumnya murung. Nama lain dari gangguan bipolar adalah manik depresif.', 'Obat obatan yang berguna untuk menyembuhkan bipolar disorder adalah Moodstabilizer seperti lithium, lamotrigine, dan carbamazepine. Antikonvulsan seperti asam valproat. Antipsikotik seperti aripiprazole, olanzapine, quetiapine, dan risperidone. Antidepresan seperti escitalopram, fluoxetine, dan sertraline', 'Psikoterapi pertama Interpersonal and social rhythm therapy (IPSRT).  terfokus pada kestabilan ritme aktivitas sehari-hari, seperti waktu untuk tidur, bangun, hingga makan. Teraturnya ritme dalam beraktivitas mampu membantu pasien untuk mengendalikan gejala gangguan bipolar. Kedua Cognitive behavioral therapy (CBT).  membantu pasien dalam mendeteksi hal yang dapat memicu munculnya gejala gangguan bipolar, sehingga hal tersebut dapat diganti dengan sesuatu yang positif. Ketiga Psychoeducation. Dokter akan mengedukasi pasien dengan hal-hal yang perlu diketahui terkait kondisi yang tengah diderita. Dengan begitu, pasien dapat dengan sendirinya mengidentifikasi penyebab munculnya gejala, menghindarinya, dan membuat strategi penanganan ketika gejala gangguan bipolar muncul.'),
	(5, 'K5', 'Paranoria', 'Gangguan kepribadian paranoid adalah jenis gangguan kepribadian eksentrik di mana pengidapnya memiliki rasa curiga dan tidak percaya yang tak ada hentinya terhadap orang lain.', 'Obat-obatan yang dapat membantu penyembuhan yaitu Antipsikosis atipikal, Antipsikosis konvensional, obat penenang.', 'Melakukan pemeriksaann psikolog atau psoloater dengan cara ngobrol atau wawancara dengan penderita serta menjalankan terapi.'),
	(6, 'K6', 'Eating Disorder', 'Gangguan makan adalah gangguan mental saat mengonsumsi makanan. Penderita gangguan ini dapat mengonsumsi terlalu sedikit atau terlalu banyak makanan, dan terobsesi pada berat badan atau bentuk tubuhnya.', 'Obat-obatan yang dapat membantu penyembuhan yaitu antidepresan, antikonvulsan, atau anti ADHD bisa mengurangi gejala binge eating. Lisdexamfetamine dimesylate, obat anti-ADHD, adalah obat pertama yang disetujui FDA untuk mengatasi binge eating sedang sampai berat.', 'Melakukan terapi Cognitive Behavioral Therapy (CBT), Interpersonal Psychotherapy (IPT), atau Terapi Penurunan Berat Badan.'),
	(7, 'K7', 'Obsessive Compulsive Disorder (OCD)', 'Obsessive compulsive disorder (OCD) adalah gangguan mental yang menyebabkan penderitanya merasa harus melakukan suatu tindakan secara berulang. Bila tidak dilakukan, penderita OCD akan diliputi kecemasan atau ketakutan.', 'Obat antidepresan diberikan bila terapi perilaku kognitif tidak membantu meredakan gejala, atau bila gejala yang dialami cukup parah. Manfaat antidepresan akan terasa setelah 3 bulan pemakaian. Namun pada banyak kasus, pasien perlu mengonsumsi obat ini sampai setidaknya 1 tahun.\r\nJenis obat antidepresan yang umum digunakan untuk mengatasi OCD antara lain Fluoxetine, Fluvoxamine, dan Sertraline\r\n', 'Melakukan terapi perilaku kognitif, pasien akan dihadapkan pada kondisi yang sering kali dihindarinya. Misalnya, psikiater akan meminta penderita yang takut kuman penyakit untuk menyentuh tanah, kemudian mengajarkan cara mengatasi rasa takutnya tersebut. Terapi perilaku kognitif bisa dilakukan secara individu atau berkelompok.'),
	(8, 'K8', 'Anxiety Disorder', 'Rasa cemas atau anxiety adalah hal yang normal dirasakan ketika seseorang menghadapi situasi atau mendengar berita yang menimbulkan rasa takut atau khawatir. Namun, anxiety perlu diwaspadai jika muncul tanpa sebab atau sulit dikendalikan, karena bisa jadi hal tersebut disebabkan oleh gangguan kecemasan.', 'Obat-obatan yang dapat membantu penyembuhan yaitu antidepresan, pregabalin, dan benzodiazepine.', 'Pengobatan untuk gangguan kecemasan umum meliputi 2 langkah, yaitu melalui terapi prilaku kognitif (CBT) dan obat-obatan. Kedua langkah ini biasanya akan dikombinasikan sesuai dengan kebutuhan pasien.');
/*!40000 ALTER TABLE `penyakit` ENABLE KEYS */;

-- Dumping structure for table gangguanmental.riwayat
CREATE TABLE IF NOT EXISTS `riwayat` (
  `id_riwayat` int(3) NOT NULL AUTO_INCREMENT,
  `nama_pasien` varchar(20) NOT NULL,
  `nama_penyakit` varchar(50) NOT NULL,
  `tanggal` date DEFAULT NULL,
  PRIMARY KEY (`id_riwayat`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

-- Dumping data for table gangguanmental.riwayat: ~28 rows (approximately)
DELETE FROM `riwayat`;
/*!40000 ALTER TABLE `riwayat` DISABLE KEYS */;
INSERT INTO `riwayat` (`id_riwayat`, `nama_pasien`, `nama_penyakit`, `tanggal`) VALUES
	(1, 'Muhamad Rizky Firman', 'Penyakit Tidak Diketahui', '2021-05-19'),
	(2, 'Jana', 'Post Traumatic Stress Disorder (PTSD)', '2021-05-19'),
	(3, 'Jana', 'Post Traumatic Stress Disorder (PTSD)', '2021-05-19'),
	(4, 'Jana', 'Post Traumatic Stress Disorder (PTSD)', '2021-05-19'),
	(5, 'Jana', 'Post Traumatic Stress Disorder (PTSD)', '2021-05-19'),
	(6, 'Jana', 'Post Traumatic Stress Disorder (PTSD)', '2021-05-19'),
	(7, 'Jana', 'Post Traumatic Stress Disorder (PTSD)', '2021-05-19'),
	(8, 'Muhamad Rizky Firman', 'Penyakit Tidak Diketahui', '2021-05-19'),
	(9, 'Muhamad Rizky Firman', 'Penyakit Tidak Diketahui', '2021-05-19'),
	(10, 'Koko99', 'Depression', '2021-05-19'),
	(12, 'Pengujian1', 'Skizofrenia', '2021-05-20'),
	(13, 'Pengujian1', 'Skizofrenia', '2021-05-20'),
	(14, 'Pengujian1', 'Skizofrenia', '2021-05-20'),
	(15, 'Pengujian2', 'Depression', '2021-05-20'),
	(16, 'Pengujian3', 'Bipolar Disorder', '2021-05-20'),
	(17, 'Pengujian 4', 'Post Traumatic Stress Disorder (PTSD)', '2021-05-29'),
	(18, 'Pengujian 6', 'Penyakit Tidak Diketahui', '2021-05-29'),
	(19, 'Pengujian 6', 'Penyakit Tidak Diketahui', '2021-05-29'),
	(20, 'Pengujian 6', 'Penyakit Tidak Diketahui', '2021-05-29'),
	(21, 'Pengujian 6', 'Penyakit Tidak Diketahui', '2021-05-29'),
	(22, 'Pengujian 8', 'Penyakit Tidak Diketahui', '2021-05-29'),
	(23, 'Pengujian 9', 'Penyakit Tidak Diketahui', '2021-05-29'),
	(24, 'Pengujian 11', 'Penyakit Tidak Diketahui', '2021-05-29'),
	(25, 'Pengujian 13', 'Penyakit Tidak Diketahui', '2021-05-29'),
	(26, 'Pengujian 15', 'Penyakit Tidak Diketahui', '2021-05-29'),
	(27, 'tes', 'Skizofrenia', '2021-05-30'),
	(28, 'Rizky Firmansah', 'Skizofrenia', '2021-05-30');
/*!40000 ALTER TABLE `riwayat` ENABLE KEYS */;

-- Dumping structure for table gangguanmental.rule
CREATE TABLE IF NOT EXISTS `rule` (
  `id_rule` int(3) NOT NULL AUTO_INCREMENT,
  `kode_rule` int(3) NOT NULL,
  `kode_penyakit` varchar(3) NOT NULL,
  `kode_gejala` varchar(3) NOT NULL,
  PRIMARY KEY (`id_rule`),
  KEY `FK_rule_penyakit` (`kode_penyakit`),
  KEY `FK_rule_gejala` (`kode_gejala`),
  CONSTRAINT `FK_rule_gejala` FOREIGN KEY (`kode_gejala`) REFERENCES `gejala` (`kode_gejala`),
  CONSTRAINT `FK_rule_penyakit` FOREIGN KEY (`kode_penyakit`) REFERENCES `penyakit` (`kode_penyakit`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=latin1;

-- Dumping data for table gangguanmental.rule: ~51 rows (approximately)
DELETE FROM `rule`;
/*!40000 ALTER TABLE `rule` DISABLE KEYS */;
INSERT INTO `rule` (`id_rule`, `kode_rule`, `kode_penyakit`, `kode_gejala`) VALUES
	(1, 1, 'K1', 'G1'),
	(2, 1, 'K1', 'G2'),
	(3, 1, 'K1', 'G5'),
	(4, 1, 'K1', 'G7'),
	(5, 1, 'K1', 'G8'),
	(6, 1, 'K1', 'G12'),
	(7, 2, 'K2', 'G1'),
	(8, 2, 'K2', 'G4'),
	(9, 2, 'K2', 'G6'),
	(10, 2, 'K2', 'G9'),
	(11, 2, 'K2', 'G10'),
	(12, 2, 'K2', 'G13'),
	(13, 2, 'K2', 'G16'),
	(14, 3, 'K3', 'G1'),
	(15, 3, 'K3', 'G4'),
	(16, 3, 'K3', 'G11'),
	(17, 3, 'K3', 'G14'),
	(18, 3, 'K3', 'G20'),
	(19, 4, 'K8', 'G1'),
	(20, 4, 'K8', 'G9'),
	(21, 4, 'K8', 'G13'),
	(22, 4, 'K8', 'G18'),
	(23, 4, 'K8', 'G23'),
	(24, 5, 'K5', 'G2'),
	(25, 5, 'K5', 'G7'),
	(26, 5, 'K5', 'G9'),
	(27, 5, 'K5', 'G12'),
	(28, 5, 'K5', 'G15'),
	(29, 5, 'K5', 'G18'),
	(30, 5, 'K5', 'G23'),
	(31, 5, 'K5', 'G24'),
	(32, 6, 'K4', 'G3'),
	(33, 6, 'K4', 'G12'),
	(34, 6, 'K4', 'G14'),
	(35, 6, 'K4', 'G17'),
	(36, 6, 'K4', 'G19'),
	(37, 6, 'K4', 'G21'),
	(38, 6, 'K4', 'G22'),
	(39, 7, 'K6', 'G9'),
	(40, 7, 'K6', 'G13'),
	(41, 7, 'K6', 'G18'),
	(42, 7, 'K6', 'G25'),
	(43, 7, 'K6', 'G26'),
	(44, 7, 'K6', 'G32'),
	(45, 7, 'K6', 'G33'),
	(46, 8, 'K7', 'G18'),
	(47, 8, 'K7', 'G27'),
	(48, 8, 'K7', 'G28'),
	(49, 8, 'K7', 'G29'),
	(50, 8, 'K7', 'G30'),
	(51, 8, 'K7', 'G31');
/*!40000 ALTER TABLE `rule` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
