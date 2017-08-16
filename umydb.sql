-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               10.1.24-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping data for table db_umyogya.bujsform: 1 rows
/*!40000 ALTER TABLE `bujsform` DISABLE KEYS */;
REPLACE INTO `bujsform` (`id`, `title`, `filename`, `path`, `created_date`, `status`) VALUES
	(1, 'app_form', 'Folder.jpg', '/umyogya/uploads/appforms/', '2017-05-04 12:41:07', 'Active');
/*!40000 ALTER TABLE `bujsform` ENABLE KEYS */;

-- Dumping data for table db_umyogya.essay: ~0 rows (approximately)
/*!40000 ALTER TABLE `essay` DISABLE KEYS */;
REPLACE INTO `essay` (`id`, `nim`, `topic`, `area`, `keyword`, `title`, `file`, `create_date`) VALUES
	(1, 8201394, 'BUJS Testing', 'Jakarta', 'testing,test,nyoba', 'Percobaan menggunakan form BUJS', NULL, '2017-08-14 08:45:12');
/*!40000 ALTER TABLE `essay` ENABLE KEYS */;

-- Dumping data for table db_umyogya.mhs: ~2 rows (approximately)
/*!40000 ALTER TABLE `mhs` DISABLE KEYS */;
REPLACE INTO `mhs` (`nim`, `fullname`, `program`, `komp`, `address`, `telp`, `email`, `sex`, `birthdate`) VALUES
	('08201394', 'Azizul Junaid', 'Regular', 'MNC', 'Jalan Kaki', '080000000', 'azizuljunaid@yahooo.com', 'Male', '2017-08-14'),
	('asf', 'asdf', 'Regular', 'Diploma', 'asdf', NULL, NULL, 'Male', '0000-00-00');
/*!40000 ALTER TABLE `mhs` ENABLE KEYS */;

-- Dumping data for table db_umyogya.users: ~2 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
REPLACE INTO `users` (`username`, `passwd`, `create_date`, `avatar`, `status`, `admin`, `last_login`) VALUES
	('08201394', '717f43b5a5a26c8e63213e9af9538b4e', '2017-08-14 02:21:39', 'Anonymous.png', 1, NULL, NULL),
	('admin', '717f43b5a5a26c8e63213e9af9538b4e', '2017-08-06 22:16:32', 'Anonymous.png', 1, 1, NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
