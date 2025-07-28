/*
 Navicat Premium Dump SQL

 Source Server         : serverwebsiteabsensi
 Source Server Type    : MySQL
 Source Server Version : 80030 (8.0.30)
 Source Host           : localhost:3306
 Source Schema         : presensigpsnew

 Target Server Type    : MySQL
 Target Server Version : 80030 (8.0.30)
 File Encoding         : 65001

 Date: 02/07/2025 19:27:33
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for admins
-- ----------------------------
DROP TABLE IF EXISTS `admins`;
CREATE TABLE `admins`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_dept` char(3) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `kode_cabang` char(3) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `admins_email_unique`(`email` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 21 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of admins
-- ----------------------------
INSERT INTO `admins` VALUES (14, 'Bu desi ratnasari', 'deade.ratna@gmail.com', NULL, '$2y$10$vFwVEv6/b3GHWBJnS2CrjOHxOj0HEWgp.IGZc/7v6lKi5JZMcuMO.', 'KPS', 'SMP', NULL, '2025-03-04 13:30:31', '2025-03-04 13:30:31');
INSERT INTO `admins` VALUES (17, 'badrit', 'kangbadrit@gmail.com', NULL, '$2y$10$JmLNIuJW19LNMdC8sljfNudjIkP/QOjTaPtGZ.2x6OHBffF1xNvVS', 'TU', 'SMP', NULL, '2025-05-27 13:25:23', '2025-05-27 13:25:23');
INSERT INTO `admins` VALUES (20, 'achmadbaihaqi', 'achmadbaihaqi583@gmail.com', NULL, '$2y$10$QAa0pcAWf8pQdyq0x3/lfuN3WmGs4xIDrYX7.FvaZyoys06tofCGS', 'TU', 'SMP', NULL, '2025-05-27 14:08:20', '2025-07-02 16:20:04');

-- ----------------------------
-- Table structure for cabang
-- ----------------------------
DROP TABLE IF EXISTS `cabang`;
CREATE TABLE `cabang`  (
  `kode_cabang` char(3) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_cabang` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `lokasi_cabang` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `radius_cabang` int NOT NULL,
  PRIMARY KEY (`kode_cabang`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of cabang
-- ----------------------------
INSERT INTO `cabang` VALUES ('SMP', 'Kantor smp', '-7.57831, 112.44093', 10);

-- ----------------------------
-- Table structure for departemen
-- ----------------------------
DROP TABLE IF EXISTS `departemen`;
CREATE TABLE `departemen`  (
  `kode_dept` char(3) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_dept` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`kode_dept`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of departemen
-- ----------------------------
INSERT INTO `departemen` VALUES ('GRU', 'Guru');
INSERT INTO `departemen` VALUES ('KPS', 'Kepala sekolah');
INSERT INTO `departemen` VALUES ('TU', 'Tata usaha');

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `failed_jobs_uuid_unique`(`uuid` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of failed_jobs
-- ----------------------------

-- ----------------------------
-- Table structure for harilibur
-- ----------------------------
DROP TABLE IF EXISTS `harilibur`;
CREATE TABLE `harilibur`  (
  `kode_libur` char(7) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_libur` date NOT NULL,
  `kode_cabang` char(3) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`kode_libur`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of harilibur
-- ----------------------------

-- ----------------------------
-- Table structure for harilibur_detail
-- ----------------------------
DROP TABLE IF EXISTS `harilibur_detail`;
CREATE TABLE `harilibur_detail`  (
  `kode_libur` char(7) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `nik` char(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of harilibur_detail
-- ----------------------------

-- ----------------------------
-- Table structure for jam_kerja
-- ----------------------------
DROP TABLE IF EXISTS `jam_kerja`;
CREATE TABLE `jam_kerja`  (
  `kode_jam_kerja` char(4) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_jam_kerja` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `awal_jam_masuk` time NOT NULL,
  `jam_masuk` time NOT NULL,
  `akhir_jam_masuk` time NOT NULL,
  `awal_jam_istirahat` time NULL DEFAULT NULL,
  `akhir_jam_istirahat` time NULL DEFAULT NULL,
  `status_istirahat` char(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `jam_pulang` time NOT NULL,
  `total_jam` smallint NOT NULL,
  `lintashari` char(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`kode_jam_kerja`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of jam_kerja
-- ----------------------------
INSERT INTO `jam_kerja` VALUES ('JK01', 'SENIN - KAMIS', '06:00:00', '07:00:00', '07:30:00', '09:00:00', '09:30:00', '1', '14:00:00', 7, NULL);
INSERT INTO `jam_kerja` VALUES ('JK02', 'JUM\'AT', '06:00:00', '07:00:00', '07:30:00', '09:00:00', '09:30:00', '1', '11:00:00', 6, NULL);
INSERT INTO `jam_kerja` VALUES ('JK03', 'SABTU', '06:00:00', '07:00:00', '07:30:00', '09:00:00', '09:30:00', '1', '14:00:00', 7, NULL);

-- ----------------------------
-- Table structure for karyawan
-- ----------------------------
DROP TABLE IF EXISTS `karyawan`;
CREATE TABLE `karyawan`  (
  `nik` char(18) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_lengkap` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(13) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `kode_dept` char(3) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_cabang` char(3) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `status_location` char(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `status_jam_kerja` char(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`nik`) USING BTREE,
  INDEX `karyawan_kode_cabang_foreign`(`kode_cabang` ASC) USING BTREE,
  INDEX `karyawan_kode_dept_foreign`(`kode_dept` ASC) USING BTREE,
  CONSTRAINT `karyawan_kode_cabang_foreign` FOREIGN KEY (`kode_cabang`) REFERENCES `cabang` (`kode_cabang`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `karyawan_kode_dept_foreign` FOREIGN KEY (`kode_dept`) REFERENCES `departemen` (`kode_dept`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of karyawan
-- ----------------------------
INSERT INTO `karyawan` VALUES ('bucandy', 'candy alfa agustina,S.Pd', 'Guru matematika', '085852137454', 'bucandy.jpg', 'GRU', 'SMP', '1', '1', '$2y$10$1ERZBnStqEX1ksNcrutgsuPgYAyNaobg2CsNjZCK70XzeSd8KNNau', NULL);
INSERT INTO `karyawan` VALUES ('buifa', 'Ifa miftahul rifdah,S.Pd', 'Guru pai dan ips', '081976534889', 'buifa.jpg', 'GRU', 'SMP', '1', '1', '$2y$10$h8RUkAc8Q2tZ1LL3sqx7SeqfTbrZOR0v4yBUkoQrIe9eAopPyTWJm', NULL);
INSERT INTO `karyawan` VALUES ('bulailatul', 'Lailatul fitriyah,S.Fil', 'Guru tik', '086738039740', 'bulailatul.jpg', 'GRU', 'SMP', '1', '1', '$2y$10$0fpv4CslJj37ya.Qea7/M.Pjqc.LgWd/vnRrEM8Nz0nZ6rTxwRave', NULL);
INSERT INTO `karyawan` VALUES ('bulailiyatul', 'lailiyatul fadlilah,S.Pd', 'Guru ips', '081749293824', 'bulailiyatul.jpg', 'GRU', 'SMP', '1', '1', '$2y$10$zeyb30WAJyqQG1/H0QQ6p.Lad9McQi.KySUdvdxakCsJ7Nos.ifKK', NULL);
INSERT INTO `karyawan` VALUES ('burizki', 'rizki aminatut tazkiyah,S.Kep', 'Ipa Terpadu', '0858920848402', 'burizki.jpg', 'GRU', 'SMP', '1', '1', '2y$10$idvv.f.ALzbbkjsTS5uWO.U9..g.46XhwBU6dIVMNNkVG3DTX92sS', NULL);
INSERT INTO `karyawan` VALUES ('busiti', 'siti maimunah,S.Pd', 'Guru bahasa inggris', '081748273893', 'busiti.jpg', 'GRU', 'SMP', '1', '1', '$2y$10$BUmZ1HvcpT0hNoyF1h9VCeodyzBSmOjbEkIK7OY9jt/q0bpQNAcrS', NULL);
INSERT INTO `karyawan` VALUES ('butauqiyah', 'tauqiyah ridha adfina,S.Pd', 'Guru pai', '0859092847739', 'butauqiyah.jpg', 'GRU', 'SMP', '1', '1', '$2y$10$7Yu/Wo7bfBW60j.b3CCYpO16TFslo5nZzEvfr/sxSKPUTAZw92Ea2', NULL);
INSERT INTO `karyawan` VALUES ('Kanghawi', 'TromolJupiter', 'Guru it', '085852137454', 'Kanghawi.jpg', 'GRU', 'SMP', '0', '0', '$2y$10$ZUH1M8laTXUA3S14cPCcle3b.Czr8/6bFFapgWKafzwA4sEYHCzbC', NULL);
INSERT INTO `karyawan` VALUES ('Ustadafrizal', 'Afrizal asyari S.Pd.i', 'Guru aswaja', '085852137545', 'ustadafrizal.jpg', 'GRU', 'SMP', '0', '0', '$2y$10$DchqcFKNzGaOjXUvdZOYIeXFzcm6itNcsqOLD37GSz7XQlQVqCuS.', NULL);
INSERT INTO `karyawan` VALUES ('Ustadbadrit', 'badrittamimi', 'Staff tu', '085852137454', 'kangbadrit.jpg', 'TU', 'SMP', '1', '1', '$2y$10$p31UmTyiXvtRMRJWlhjfiu3MIRqP2TK78hvfjwU0XLRmlwqb70Lde', NULL);
INSERT INTO `karyawan` VALUES ('Ustadmashuda', 'Mashuda,S.Pd', 'Guru Matematika', '085469738398', 'Ustadmashuda.jpg', 'GRU', 'SMP', '1', '1', '$2y$10$oURZPi5IRBKicjREzjEc8ePtlBn9rzWWn/3PZoJ34Hh.kdPh5cG8O', NULL);
INSERT INTO `karyawan` VALUES ('Ustadnasrudin', 'H.Agus nasrudin,S.Pd. i', 'Guru pkn', '085899038489', 'Ustadnasrudin.jpg', 'GRU', 'SMP', '1', '1', '$2y$10$7p6Lv0FA8t1fpVFhnubltOnWyI6iDLIw7w0oO8siZabDAc8iF0IQe', NULL);
INSERT INTO `karyawan` VALUES ('Ustadnur', 'Nur rohman,M.Pd', 'Guru btq', '085854673839', 'Ustadnur.jpg', 'GRU', 'SMP', '1', '1', '$2y$10$Aw30deJBG6BY7ov5tEh0IO6VVxEesYUaOcRb.CoyprRUxREhGv3Xy', NULL);
INSERT INTO `karyawan` VALUES ('Ustadwahyu', 'Wahyu agung ari susanto.S,Pd', 'Gurubahasaindonesia', '085854673839', 'Ustadwahyu.jpg', 'GRU', 'SMP', '1', '1', '$2y$10$l7I9x5nx92M88S6BzW8B5e7D4NKxSv8e4fPv8v7xZqI3iJjxHGjGW', NULL);

-- ----------------------------
-- Table structure for konfigurasi_jamkerja
-- ----------------------------
DROP TABLE IF EXISTS `konfigurasi_jamkerja`;
CREATE TABLE `konfigurasi_jamkerja`  (
  `nik` char(18) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `hari` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `kode_jam_kerja` char(4) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  INDEX `konfigurasi_jamkerja_kode_jam_kerja_foreign`(`kode_jam_kerja` ASC) USING BTREE,
  INDEX `konfigurasi_jamkerja_nik_foreign`(`nik` ASC) USING BTREE,
  CONSTRAINT `konfigurasi_jamkerja_kode_jam_kerja_foreign` FOREIGN KEY (`kode_jam_kerja`) REFERENCES `jam_kerja` (`kode_jam_kerja`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `konfigurasi_jamkerja_nik_foreign` FOREIGN KEY (`nik`) REFERENCES `karyawan` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of konfigurasi_jamkerja
-- ----------------------------
INSERT INTO `konfigurasi_jamkerja` VALUES ('Ustadbadrit', 'Senin', 'JK01');
INSERT INTO `konfigurasi_jamkerja` VALUES ('Ustadbadrit', 'Selasa', 'JK01');
INSERT INTO `konfigurasi_jamkerja` VALUES ('Ustadbadrit', 'Rabu', 'JK01');
INSERT INTO `konfigurasi_jamkerja` VALUES ('Ustadbadrit', 'Kamis', 'JK01');
INSERT INTO `konfigurasi_jamkerja` VALUES ('Ustadbadrit', 'Jumat', 'JK02');
INSERT INTO `konfigurasi_jamkerja` VALUES ('Ustadbadrit', 'Sabtu', 'JK03');
INSERT INTO `konfigurasi_jamkerja` VALUES ('Ustadbadrit', 'Minggu', NULL);
INSERT INTO `konfigurasi_jamkerja` VALUES ('Ustadafrizal', 'Senin', 'JK01');
INSERT INTO `konfigurasi_jamkerja` VALUES ('Ustadafrizal', 'Selasa', 'JK01');
INSERT INTO `konfigurasi_jamkerja` VALUES ('Ustadafrizal', 'Rabu', 'JK01');
INSERT INTO `konfigurasi_jamkerja` VALUES ('Ustadafrizal', 'Kamis', 'JK01');
INSERT INTO `konfigurasi_jamkerja` VALUES ('Ustadafrizal', 'Jumat', 'JK02');
INSERT INTO `konfigurasi_jamkerja` VALUES ('Ustadafrizal', 'Sabtu', 'JK03');
INSERT INTO `konfigurasi_jamkerja` VALUES ('Ustadafrizal', 'Minggu', NULL);
INSERT INTO `konfigurasi_jamkerja` VALUES ('Ustadmashuda', 'Senin', 'JK01');
INSERT INTO `konfigurasi_jamkerja` VALUES ('Ustadmashuda', 'Selasa', 'JK01');
INSERT INTO `konfigurasi_jamkerja` VALUES ('Ustadmashuda', 'Rabu', 'JK01');
INSERT INTO `konfigurasi_jamkerja` VALUES ('Ustadmashuda', 'Kamis', 'JK01');
INSERT INTO `konfigurasi_jamkerja` VALUES ('Ustadmashuda', 'Jumat', 'JK02');
INSERT INTO `konfigurasi_jamkerja` VALUES ('Ustadmashuda', 'Sabtu', 'JK03');
INSERT INTO `konfigurasi_jamkerja` VALUES ('Ustadmashuda', 'Minggu', NULL);
INSERT INTO `konfigurasi_jamkerja` VALUES ('Ustadnasrudin', 'Senin', 'JK01');
INSERT INTO `konfigurasi_jamkerja` VALUES ('Ustadnasrudin', 'Selasa', 'JK01');
INSERT INTO `konfigurasi_jamkerja` VALUES ('Ustadnasrudin', 'Rabu', 'JK01');
INSERT INTO `konfigurasi_jamkerja` VALUES ('Ustadnasrudin', 'Kamis', 'JK01');
INSERT INTO `konfigurasi_jamkerja` VALUES ('Ustadnasrudin', 'Jumat', 'JK02');
INSERT INTO `konfigurasi_jamkerja` VALUES ('Ustadnasrudin', 'Sabtu', 'JK03');
INSERT INTO `konfigurasi_jamkerja` VALUES ('Ustadnasrudin', 'Minggu', NULL);
INSERT INTO `konfigurasi_jamkerja` VALUES ('Ustadnur', 'Senin', 'JK01');
INSERT INTO `konfigurasi_jamkerja` VALUES ('Ustadnur', 'Selasa', 'JK01');
INSERT INTO `konfigurasi_jamkerja` VALUES ('Ustadnur', 'Rabu', 'JK01');
INSERT INTO `konfigurasi_jamkerja` VALUES ('Ustadnur', 'Kamis', 'JK01');
INSERT INTO `konfigurasi_jamkerja` VALUES ('Ustadnur', 'Jumat', 'JK02');
INSERT INTO `konfigurasi_jamkerja` VALUES ('Ustadnur', 'Sabtu', 'JK03');
INSERT INTO `konfigurasi_jamkerja` VALUES ('Ustadnur', 'Minggu', NULL);
INSERT INTO `konfigurasi_jamkerja` VALUES ('Ustadwahyu', 'Senin', 'JK01');
INSERT INTO `konfigurasi_jamkerja` VALUES ('Ustadwahyu', 'Selasa', 'JK01');
INSERT INTO `konfigurasi_jamkerja` VALUES ('Ustadwahyu', 'Rabu', 'JK01');
INSERT INTO `konfigurasi_jamkerja` VALUES ('Ustadwahyu', 'Kamis', 'JK01');
INSERT INTO `konfigurasi_jamkerja` VALUES ('Ustadwahyu', 'Jumat', 'JK02');
INSERT INTO `konfigurasi_jamkerja` VALUES ('Ustadwahyu', 'Sabtu', 'JK03');
INSERT INTO `konfigurasi_jamkerja` VALUES ('Ustadwahyu', 'Minggu', NULL);
INSERT INTO `konfigurasi_jamkerja` VALUES ('bucandy', 'Senin', 'JK01');
INSERT INTO `konfigurasi_jamkerja` VALUES ('bucandy', 'Selasa', 'JK01');
INSERT INTO `konfigurasi_jamkerja` VALUES ('bucandy', 'Rabu', 'JK01');
INSERT INTO `konfigurasi_jamkerja` VALUES ('bucandy', 'Kamis', 'JK01');
INSERT INTO `konfigurasi_jamkerja` VALUES ('bucandy', 'Jumat', 'JK02');
INSERT INTO `konfigurasi_jamkerja` VALUES ('bucandy', 'Sabtu', 'JK03');
INSERT INTO `konfigurasi_jamkerja` VALUES ('bucandy', 'Minggu', NULL);
INSERT INTO `konfigurasi_jamkerja` VALUES ('buifa', 'Senin', 'JK01');
INSERT INTO `konfigurasi_jamkerja` VALUES ('buifa', 'Selasa', 'JK01');
INSERT INTO `konfigurasi_jamkerja` VALUES ('buifa', 'Rabu', 'JK01');
INSERT INTO `konfigurasi_jamkerja` VALUES ('buifa', 'Kamis', 'JK01');
INSERT INTO `konfigurasi_jamkerja` VALUES ('buifa', 'Jumat', 'JK02');
INSERT INTO `konfigurasi_jamkerja` VALUES ('buifa', 'Sabtu', 'JK03');
INSERT INTO `konfigurasi_jamkerja` VALUES ('buifa', 'Minggu', NULL);
INSERT INTO `konfigurasi_jamkerja` VALUES ('bulailatul', 'Senin', 'JK01');
INSERT INTO `konfigurasi_jamkerja` VALUES ('bulailatul', 'Selasa', 'JK01');
INSERT INTO `konfigurasi_jamkerja` VALUES ('bulailatul', 'Rabu', 'JK01');
INSERT INTO `konfigurasi_jamkerja` VALUES ('bulailatul', 'Kamis', 'JK01');
INSERT INTO `konfigurasi_jamkerja` VALUES ('bulailatul', 'Jumat', 'JK02');
INSERT INTO `konfigurasi_jamkerja` VALUES ('bulailatul', 'Sabtu', 'JK03');
INSERT INTO `konfigurasi_jamkerja` VALUES ('bulailatul', 'Minggu', NULL);
INSERT INTO `konfigurasi_jamkerja` VALUES ('bulailiyatul', 'Senin', 'JK01');
INSERT INTO `konfigurasi_jamkerja` VALUES ('bulailiyatul', 'Selasa', 'JK01');
INSERT INTO `konfigurasi_jamkerja` VALUES ('bulailiyatul', 'Rabu', 'JK01');
INSERT INTO `konfigurasi_jamkerja` VALUES ('bulailiyatul', 'Kamis', 'JK01');
INSERT INTO `konfigurasi_jamkerja` VALUES ('bulailiyatul', 'Jumat', 'JK02');
INSERT INTO `konfigurasi_jamkerja` VALUES ('bulailiyatul', 'Sabtu', 'JK03');
INSERT INTO `konfigurasi_jamkerja` VALUES ('bulailiyatul', 'Minggu', NULL);
INSERT INTO `konfigurasi_jamkerja` VALUES ('burizki', 'Senin', 'JK01');
INSERT INTO `konfigurasi_jamkerja` VALUES ('burizki', 'Selasa', 'JK01');
INSERT INTO `konfigurasi_jamkerja` VALUES ('burizki', 'Rabu', 'JK01');
INSERT INTO `konfigurasi_jamkerja` VALUES ('burizki', 'Kamis', 'JK01');
INSERT INTO `konfigurasi_jamkerja` VALUES ('burizki', 'Jumat', 'JK02');
INSERT INTO `konfigurasi_jamkerja` VALUES ('burizki', 'Sabtu', 'JK03');
INSERT INTO `konfigurasi_jamkerja` VALUES ('burizki', 'Minggu', NULL);
INSERT INTO `konfigurasi_jamkerja` VALUES ('busiti', 'Senin', 'JK01');
INSERT INTO `konfigurasi_jamkerja` VALUES ('busiti', 'Selasa', 'JK01');
INSERT INTO `konfigurasi_jamkerja` VALUES ('busiti', 'Rabu', 'JK01');
INSERT INTO `konfigurasi_jamkerja` VALUES ('busiti', 'Kamis', 'JK01');
INSERT INTO `konfigurasi_jamkerja` VALUES ('busiti', 'Jumat', 'JK02');
INSERT INTO `konfigurasi_jamkerja` VALUES ('busiti', 'Sabtu', 'JK03');
INSERT INTO `konfigurasi_jamkerja` VALUES ('busiti', 'Minggu', NULL);
INSERT INTO `konfigurasi_jamkerja` VALUES ('butauqiyah', 'Senin', 'JK01');
INSERT INTO `konfigurasi_jamkerja` VALUES ('butauqiyah', 'Selasa', 'JK01');
INSERT INTO `konfigurasi_jamkerja` VALUES ('butauqiyah', 'Rabu', 'JK01');
INSERT INTO `konfigurasi_jamkerja` VALUES ('butauqiyah', 'Kamis', 'JK01');
INSERT INTO `konfigurasi_jamkerja` VALUES ('butauqiyah', 'Jumat', 'JK02');
INSERT INTO `konfigurasi_jamkerja` VALUES ('butauqiyah', 'Sabtu', 'JK03');
INSERT INTO `konfigurasi_jamkerja` VALUES ('butauqiyah', 'Minggu', NULL);

-- ----------------------------
-- Table structure for konfigurasi_jamkerja_by_date
-- ----------------------------
DROP TABLE IF EXISTS `konfigurasi_jamkerja_by_date`;
CREATE TABLE `konfigurasi_jamkerja_by_date`  (
  `nik` char(18) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `tanggal` date NULL DEFAULT NULL,
  `kode_jam_kerja` char(4) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  INDEX `konfigurasi_jamkerja_by_date_nik_foreign`(`nik` ASC) USING BTREE,
  CONSTRAINT `konfigurasi_jamkerja_by_date_nik_foreign` FOREIGN KEY (`nik`) REFERENCES `karyawan` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of konfigurasi_jamkerja_by_date
-- ----------------------------

-- ----------------------------
-- Table structure for konfigurasi_jk_dept
-- ----------------------------
DROP TABLE IF EXISTS `konfigurasi_jk_dept`;
CREATE TABLE `konfigurasi_jk_dept`  (
  `kode_jk_dept` char(7) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_cabang` char(3) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `kode_dept` char(3) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`kode_jk_dept`) USING BTREE,
  INDEX `konfigurasi_jk_dept_kode_cabang_foreign`(`kode_cabang` ASC) USING BTREE,
  INDEX `konfigurasi_jk_dept_kode_dept_foreign`(`kode_dept` ASC) USING BTREE,
  CONSTRAINT `konfigurasi_jk_dept_kode_cabang_foreign` FOREIGN KEY (`kode_cabang`) REFERENCES `cabang` (`kode_cabang`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `konfigurasi_jk_dept_kode_dept_foreign` FOREIGN KEY (`kode_dept`) REFERENCES `departemen` (`kode_dept`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of konfigurasi_jk_dept
-- ----------------------------
INSERT INTO `konfigurasi_jk_dept` VALUES ('JSMPGRU', 'SMP', 'GRU');
INSERT INTO `konfigurasi_jk_dept` VALUES ('JSMPKPS', 'SMP', 'KPS');

-- ----------------------------
-- Table structure for konfigurasi_jk_dept_detail
-- ----------------------------
DROP TABLE IF EXISTS `konfigurasi_jk_dept_detail`;
CREATE TABLE `konfigurasi_jk_dept_detail`  (
  `kode_jk_dept` char(7) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `hari` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `kode_jam_kerja` char(4) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  INDEX `konfigurasi_jk_dept_detail_kode_jk_dept_foreign`(`kode_jk_dept` ASC) USING BTREE,
  CONSTRAINT `konfigurasi_jk_dept_detail_kode_jk_dept_foreign` FOREIGN KEY (`kode_jk_dept`) REFERENCES `konfigurasi_jk_dept` (`kode_jk_dept`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of konfigurasi_jk_dept_detail
-- ----------------------------
INSERT INTO `konfigurasi_jk_dept_detail` VALUES ('JSMPKPS', 'Senin', 'JK01');
INSERT INTO `konfigurasi_jk_dept_detail` VALUES ('JSMPKPS', 'Selasa', 'JK01');
INSERT INTO `konfigurasi_jk_dept_detail` VALUES ('JSMPKPS', 'Rabu', 'JK01');
INSERT INTO `konfigurasi_jk_dept_detail` VALUES ('JSMPKPS', 'Kamis', 'JK01');
INSERT INTO `konfigurasi_jk_dept_detail` VALUES ('JSMPKPS', 'Jumat', 'JK02');
INSERT INTO `konfigurasi_jk_dept_detail` VALUES ('JSMPKPS', 'Sabtu', 'JK03');
INSERT INTO `konfigurasi_jk_dept_detail` VALUES ('JSMPGRU', 'Senin', 'JKO4');
INSERT INTO `konfigurasi_jk_dept_detail` VALUES ('JSMPGRU', 'Selasa', 'JKO4');
INSERT INTO `konfigurasi_jk_dept_detail` VALUES ('JSMPGRU', 'Rabu', 'JKO4');
INSERT INTO `konfigurasi_jk_dept_detail` VALUES ('JSMPGRU', 'Kamis', 'JKO4');
INSERT INTO `konfigurasi_jk_dept_detail` VALUES ('JSMPGRU', 'Jumat', NULL);
INSERT INTO `konfigurasi_jk_dept_detail` VALUES ('JSMPGRU', 'Sabtu', NULL);

-- ----------------------------
-- Table structure for master_cuti
-- ----------------------------
DROP TABLE IF EXISTS `master_cuti`;
CREATE TABLE `master_cuti`  (
  `kode_cuti` char(3) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_cuti` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `jml_hari` smallint NULL DEFAULT NULL,
  PRIMARY KEY (`kode_cuti`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of master_cuti
-- ----------------------------
INSERT INTO `master_cuti` VALUES ('CT1', 'Cuti Tahunan', 12);
INSERT INTO `master_cuti` VALUES ('CT2', 'Cuti Melahirkan', 90);
INSERT INTO `master_cuti` VALUES ('CT3', 'Cuti Sakit', 14);
INSERT INTO `master_cuti` VALUES ('CT4', 'Cuti Penting', 7);

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 21 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` VALUES (2, '2019_08_19_000000_create_failed_jobs_table', 1);
INSERT INTO `migrations` VALUES (3, '2019_12_14_000001_create_personal_access_tokens_table', 1);
INSERT INTO `migrations` VALUES (4, '2023_12_15_002819_create_permission_tables', 1);
INSERT INTO `migrations` VALUES (5, '2025_03_06_061327_create_zonasi_table', 1);
INSERT INTO `migrations` VALUES (6, '2025_06_11_185250_create_admins_table', 1);
INSERT INTO `migrations` VALUES (7, '2025_06_11_185429_create_cabang_table', 1);
INSERT INTO `migrations` VALUES (8, '2025_06_11_185431_create_departemen_table', 1);
INSERT INTO `migrations` VALUES (9, '2025_06_11_185433_create_karyawan_table', 1);
INSERT INTO `migrations` VALUES (10, '2025_06_11_185434_create_jam_kerja_table', 1);
INSERT INTO `migrations` VALUES (11, '2025_06_11_185518_create_master_cuti_table', 1);
INSERT INTO `migrations` VALUES (12, '2025_06_11_185519_create_konfigurasi_jamkerja_table', 1);
INSERT INTO `migrations` VALUES (13, '2025_06_11_185520_create_pengajuan_izin_table', 1);
INSERT INTO `migrations` VALUES (14, '2025_06_11_185530_create_presensi_table', 1);
INSERT INTO `migrations` VALUES (15, '2025_06_11_185933_create_harilibur_table', 1);
INSERT INTO `migrations` VALUES (16, '2025_06_11_185936_create_harilibur_detail_table', 1);
INSERT INTO `migrations` VALUES (17, '2025_06_11_190111_create_konfigurasi_jk_dept_table', 1);
INSERT INTO `migrations` VALUES (18, '2025_06_11_190114_create_konfigurasi_jk_dept_detail_table', 1);
INSERT INTO `migrations` VALUES (19, '2025_06_11_190325_create_konfigurasi_jamkerja_by_date_table', 1);
INSERT INTO `migrations` VALUES (20, '2025_06_29_015536_create_notifications_table', 1);

-- ----------------------------
-- Table structure for model_has_permissions
-- ----------------------------
DROP TABLE IF EXISTS `model_has_permissions`;
CREATE TABLE `model_has_permissions`  (
  `permission_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL,
  PRIMARY KEY (`permission_id`, `model_id`, `model_type`) USING BTREE,
  INDEX `model_has_permissions_model_id_model_type_index`(`model_id` ASC, `model_type` ASC) USING BTREE,
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of model_has_permissions
-- ----------------------------

-- ----------------------------
-- Table structure for model_has_roles
-- ----------------------------
DROP TABLE IF EXISTS `model_has_roles`;
CREATE TABLE `model_has_roles`  (
  `role_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL,
  PRIMARY KEY (`role_id`, `model_id`, `model_type`) USING BTREE,
  INDEX `model_has_roles_model_id_model_type_index`(`model_id` ASC, `model_type` ASC) USING BTREE,
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of model_has_roles
-- ----------------------------
INSERT INTO `model_has_roles` VALUES (1, 'App\\Models\\User', 14);
INSERT INTO `model_has_roles` VALUES (1, 'App\\Models\\User', 17);
INSERT INTO `model_has_roles` VALUES (1, 'App\\Models\\User', 20);

-- ----------------------------
-- Table structure for notifications
-- ----------------------------
DROP TABLE IF EXISTS `notifications`;
CREATE TABLE `notifications`  (
  `id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint UNSIGNED NOT NULL,
  `data` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `notifications_notifiable_type_notifiable_id_index`(`notifiable_type` ASC, `notifiable_id` ASC) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of notifications
-- ----------------------------

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  INDEX `password_resets_email_index`(`email` ASC) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of password_resets
-- ----------------------------
INSERT INTO `password_resets` VALUES ('deade.ratna@gmail.com', 'vLrltY3Ytu2UDxn2IHwfUeJhTlZK6WV0y7UVHRS35ynsoXSYd5UGBWHSV2fNwnfC', '2025-07-02 18:28:37');
INSERT INTO `password_resets` VALUES ('achmadbaihaqi583@gmail.com', 't0gn5EWUbBTRAML9Z72zrBx4bmPvcfFYWhYcPlsFUaNrn0tXnAqAqTDBxa6JxbSB', '2025-07-02 18:31:46');

-- ----------------------------
-- Table structure for pengajuan_izin
-- ----------------------------
DROP TABLE IF EXISTS `pengajuan_izin`;
CREATE TABLE `pengajuan_izin`  (
  `kode_izin` char(9) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik` char(18) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `tgl_izin_dari` date NULL DEFAULT NULL,
  `tgl_izin_sampai` date NULL DEFAULT NULL,
  `status` char(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL COMMENT 'i : izin s : sakit',
  `kode_cuti` char(3) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `keterangan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `doc_sid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `status_approved` char(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT '0' COMMENT '0 : Pending 1: Disetuji 2: Ditolak',
  PRIMARY KEY (`kode_izin`) USING BTREE,
  INDEX `pengajuan_izin_kode_cuti_foreign`(`kode_cuti` ASC) USING BTREE,
  INDEX `pengajuan_izin_nik_foreign`(`nik` ASC) USING BTREE,
  CONSTRAINT `pengajuan_izin_kode_cuti_foreign` FOREIGN KEY (`kode_cuti`) REFERENCES `master_cuti` (`kode_cuti`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `pengajuan_izin_nik_foreign` FOREIGN KEY (`nik`) REFERENCES `karyawan` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pengajuan_izin
-- ----------------------------
INSERT INTO `pengajuan_izin` VALUES ('IZ0225001', 'Ustadafrizal', '2025-02-03', '2025-02-07', 'i', NULL, 'izin sakit', NULL, '0');
INSERT INTO `pengajuan_izin` VALUES ('IZ0325001', 'bucandy', '2025-03-05', '2025-03-10', 'i', NULL, 'malas berkerja', NULL, '0');
INSERT INTO `pengajuan_izin` VALUES ('IZ0525001', 'Ustadafrizal', '2025-05-04', '2025-05-06', 's', NULL, 'Assalamuallaikum kepada sekolah smp rahman wahid izin untuk mengirimkan surat izin yang sudah saya buat di file suratizinustadrizal .pdf', 'IZ0525001.png', '2');
INSERT INTO `pengajuan_izin` VALUES ('IZ0525002', 'Ustadafrizal', '2025-05-08', '2025-05-09', 'i', NULL, 'sakit', NULL, '2');

-- ----------------------------
-- Table structure for permissions
-- ----------------------------
DROP TABLE IF EXISTS `permissions`;
CREATE TABLE `permissions`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `permissions_name_guard_name_unique`(`name` ASC, `guard_name` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of permissions
-- ----------------------------
INSERT INTO `permissions` VALUES (1, 'view-karyawan', 'web', '2023-12-15 00:36:28', '2023-12-15 00:36:28');
INSERT INTO `permissions` VALUES (2, 'view-departemen', 'web', '2023-12-15 00:36:28', '2023-12-15 00:36:28');

-- ----------------------------
-- Table structure for personal_access_tokens
-- ----------------------------
DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `personal_access_tokens_token_unique`(`token` ASC) USING BTREE,
  INDEX `personal_access_tokens_tokenable_type_tokenable_id_index`(`tokenable_type` ASC, `tokenable_id` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of personal_access_tokens
-- ----------------------------

-- ----------------------------
-- Table structure for presensi
-- ----------------------------
DROP TABLE IF EXISTS `presensi`;
CREATE TABLE `presensi`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `nik` char(18) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_presensi` date NOT NULL,
  `jam_in` time NULL DEFAULT NULL,
  `jam_out` time NULL DEFAULT NULL,
  `foto_in` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `foto_out` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `lokasi_in` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `lokasi_out` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `kode_jam_kerja` char(4) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `status` char(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `kode_izin` char(9) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `presensi_kode_izin_foreign`(`kode_izin` ASC) USING BTREE,
  INDEX `presensi_kode_jam_kerja_foreign`(`kode_jam_kerja` ASC) USING BTREE,
  INDEX `presensi_nik_foreign`(`nik` ASC) USING BTREE,
  CONSTRAINT `presensi_kode_izin_foreign` FOREIGN KEY (`kode_izin`) REFERENCES `pengajuan_izin` (`kode_izin`) ON DELETE CASCADE ON UPDATE RESTRICT,
  CONSTRAINT `presensi_kode_jam_kerja_foreign` FOREIGN KEY (`kode_jam_kerja`) REFERENCES `jam_kerja` (`kode_jam_kerja`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `presensi_nik_foreign` FOREIGN KEY (`nik`) REFERENCES `karyawan` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 49 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of presensi
-- ----------------------------
INSERT INTO `presensi` VALUES (48, 'Ustadafrizal', '2025-05-20', '00:06:00', '00:14:00', NULL, NULL, NULL, NULL, 'JK01', 'h', NULL);

-- ----------------------------
-- Table structure for role_has_permissions
-- ----------------------------
DROP TABLE IF EXISTS `role_has_permissions`;
CREATE TABLE `role_has_permissions`  (
  `permission_id` bigint UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL,
  PRIMARY KEY (`permission_id`, `role_id`) USING BTREE,
  INDEX `role_has_permissions_role_id_foreign`(`role_id` ASC) USING BTREE,
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of role_has_permissions
-- ----------------------------
INSERT INTO `role_has_permissions` VALUES (1, 1);
INSERT INTO `role_has_permissions` VALUES (2, 1);

-- ----------------------------
-- Table structure for roles
-- ----------------------------
DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `roles_name_guard_name_unique`(`name` ASC, `guard_name` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of roles
-- ----------------------------
INSERT INTO `roles` VALUES (1, 'administrator', 'web', '2023-12-15 00:36:28', '2023-12-15 00:36:28');
INSERT INTO `roles` VALUES (2, 'admin departemen', 'web', '2023-12-18 00:22:14', '2023-12-18 00:22:14');

-- ----------------------------
-- Table structure for zonasi
-- ----------------------------
DROP TABLE IF EXISTS `zonasi`;
CREATE TABLE `zonasi`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `latitude` decimal(10, 7) NOT NULL,
  `longitude` decimal(10, 7) NOT NULL,
  `radius` int NOT NULL DEFAULT 100,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of zonasi
-- ----------------------------

SET FOREIGN_KEY_CHECKS = 1;
