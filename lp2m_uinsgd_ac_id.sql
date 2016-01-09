-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2016 at 10:14 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lp2m_uinsgd_ac_id`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE IF NOT EXISTS `berita` (
  `id_berita` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(500) NOT NULL,
  `id_kategori` int(5) NOT NULL,
  `slug` varchar(128) NOT NULL,
  `ringkasan` text NOT NULL,
  `isi` text NOT NULL,
  `status_berita` varchar(20) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_berita`),
  KEY `slug` (`slug`),
  KEY `id_user` (`id_user`),
  KEY `id_user_2` (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `judul`, `id_kategori`, `slug`, `ringkasan`, `isi`, `status_berita`, `id_user`, `tanggal`) VALUES
(1, 'Profil LPPM (Lembaga Penelitian dan Pengabdian Masyarakat)', 0, 'profil-lppm-lembaga-penelitian-dan-pengabdian-masyarakat', '<p><img src="/lp2m.uinsgd.ac.id/assets/posting/logo.png" alt="" /></p>', '<p><strong>Ketua</strong></p>\r\n<p>Dr. Munir, MA</p>\r\n<p><br /><strong>Sekteraris</strong><br />Dr. H. Tata Sukayat, M. Ag.<br /><br /><strong>Kepala Pusat Penelitian dan Penerbitan</strong><br />Dr. Wahyudin Darmalaksana, M.Ag.</p>\r\n<p><strong>Kepala Pusat Pengabdian Masyarakat</strong><br />Dr. H. Ramdani Wahyu Sururi, M.Ag.<br /><br /><strong>Kepala Pusat Gender dan Anak</strong><br />Dr. Akmaliyah, M.Ag.</p>\r\n<p><strong><br /></strong></p>\r\n<p><strong>Tata Usaha</strong></p>\r\n<p><strong>Kepala Sub Bagian</strong><br />Hj. Ati Rahamawati, M.Ag</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>', 'Published', 1, '2016-01-08 03:46:16'),
(2, 'Pusat Penelitian dan Penerbitan', 1, 'pusat-penelitian-dan-penerbitan-masyarakat', '<p><img src="/lp2m.uinsgd.ac.id/assets/posting/logo.png" alt="" /></p>', '<p><strong>Kepala Pusat Penelitian dan Penerbitan</strong></p>\n<p><span>Dr. Deden Effendi, M.Ag</span></p>\n<p><strong>Visi, Misi dan Tujuan</strong></p>\n<p><strong><span>Visi</span></strong></p>\n<p><span>...</span></p>\n<p><strong><span>Misi</span></strong></p>\n<p><span>1. ...</span></p>\n<p><span>2. ...</span></p>\n<p><strong><span>Tujuan</span></strong></p>\n<p><span>...</span></p>\n<p><strong><span>Motto</span></strong></p>\n<p><span>...</span></p>\n<p><strong><span>Slogan</span></strong></p>\n<p><span>...</span></p>', 'Published', 1, '2016-01-07 15:53:41'),
(3, 'Pusat Pengabdian Masyarakat', 0, 'pusat-pengabdian-masyarakat', '<p><img src="/lp2m.uinsgd.ac.id/assets/posting/logo.png" alt="" /></p>', '<p><strong>Kepala Pusat Pengabdian Masyarakat</strong></p>\r\n<p>Dr. H. Undang Ahmad Kamaluddin, M.Ag.</p>\r\n<p><strong>Visi, Misi dan Tujuan</strong></p>\r\n<p><strong>Visi</strong></p>\r\n<p><span>...</span></p>\r\n<p><strong>Misi</strong></p>\r\n<p><span>1. ...</span></p>\r\n<p><span>2. ...</span></p>\r\n<p><strong>Tujuan</strong></p>\r\n<p><span>...</span></p>\r\n<p><strong>Motto</strong></p>\r\n<p><span>...</span></p>\r\n<p><strong>Slogan</strong></p>\r\n<p><span>...</span></p>', 'Published', 1, '2016-01-07 15:53:46'),
(4, 'Pusat Studi Gender dan Anak', 0, 'pusat-studi-gender-dan-anak', '<p><img src="/lp2m.uinsgd.ac.id/assets/posting/logo.png" alt="" /></p>', '<p><strong><span>Kepala Pusat Gender dan Anak</span></strong><br /><span>Endah Ratnawaty Chotim, M.Ag.</span></p>\r\n<p><span><br /></span></p>\r\n<p><strong>Visi, Misi dan Tujuan</strong></p>\r\n<p><strong>Visi</strong></p>\r\n<p><span>...</span></p>\r\n<p><strong>Misi</strong></p>\r\n<p><span>1. ...</span></p>\r\n<p><span>2. ...</span></p>\r\n<p><strong>Tujuan</strong></p>\r\n<p><span>...</span></p>\r\n<p><strong>Motto</strong></p>\r\n<p><span>...</span></p>\r\n<p><strong>Slogan</strong></p>\r\n<p><span>...</span></p>', 'Published', 1, '2016-01-07 18:17:06'),
(5, 'Pengumuman Kelompok KKM UIN Bandung Tahun 2015', 3, 'pengumuman-kelompok-kkm-uin-bandung-tahun-2015', '<p><img src="/lp2m.uinsgd.ac.id/assets/posting/pengumuman.jpg" alt="" /></p>', '<p>Menanggapi keluhan mengenai informasi kelompok yang dilakukan secara manual oleh LP2M UIN Sunan Gunung Djati Bandung pada tanggal 20 Januari 2015, pihak LP2M mempunyai alasan tersendiri terhadap pengumuman yang dilaksanakan secara manual yaitu, Pertama karena sampai terakhir informasi pengelompokkan diumumkan (hari Selasa tanggal 20 Januari 2015) koneksi internet kantor LP2M di Gedung Lecture Hall belum terinstalasi sehingga cara menyampaikan sebatas memakai board tidak seperti pengumuman pada KKM Regular Tahun 2014 yang memakai media sosial dan koneksi internet. Kedua, permasalahan waktu dalam pelaksanaan agenda kegiatan KKM Tahun 2015 yang singkat sehingga berimbas dalam pengelompokkan. Ketiga, pengumuman secara online tidak selamanya efektif walaupun efisien karena dengan adanya pengumuman secara manual dapat mempertemukan antar anggota kelompok secara efektif.\n\nUntuk waktu yang akan datang, pihak panitia akan lebih informatif dalam persoalan penglompokkan peserta KKM terlebih koneksi jaringan komputer / internet yang sudah terinstalasi dengan baik di Gedung Lecture Hall memudahkan panitia dalam menginformasikan segala hal yang terkait kegiatan KKM atau KKN.</p>', 'Publish', 1, '2016-01-07 15:53:51'),
(6, 'Ini Syarat Mengikuti KKM Tematik 2014', 1, 'ini-syarat-mengikuti-kkm-tematik-2014', '<p><img src="/lp2m.uinsgd.ac.id/assets/posting/logo.png" alt="" /></p>', '<p>Kuliah Kerja Mahasiswa (KKM) Tematik tahun akademik 2014 akan segera dilaksanakan oleh Pemerintah Provinsi Jawa Barat. Pelaksanaannya serentak dilaksanakan bersama 53 perguruan tinggi dalam negeri dan luar negeri.\n\n“Perencanaan dan pelaksanaan KKM tematik dimulai pada bulan Juni, Juli, sampai Agustus,” kata Ketua Lembaga Penelitian dan Pengabdian Masyarakat (LP2M) UIN SGD Bandung, Syukriadi Sambas saat ditemui Suaka, Senin (12/4/2014).\n\nKKM Tematik tahun ini terbuka untuk seluruh mahasiswa-mahasiswi angkatan 2011. Menurut Syukriadi, syarat kualifikasi untuk mahasiswa yang ingin mengikuti KKM Tematik harus memiliki semangat mengabdi, kemampuan basis kompetensi, dan kemampuan pendidikan melek aksara, meliputi melek aksara fungsional dan melek aksara arab atau al- Quran.\n\n“Penyaringan mahasiswa untuk KKM Tematik dilaksanakan oleh setiap fakultas dan disaring lagi oleh LP2M untuk mendapatkan mahasiswa yang mampu melaksanakan tugas pengabdian KKM tematik,” lanjutnya.\n\nPenetapan kouta KKM tematik, kata Syukriadi, tergantung dari jumlah keseluruhan mahasiswa yang terdapat di setiap perguruang tinggi. UIN SGD Bandung termasuk lima besar perguruan tinggi di Jawa Barat bersama empat perguruan lain seperti IPB, ITB, UNPAD, dan UPI yang mempunyai jumlah mahasiswa terbanyak di antara perguruan tinggi lain.\n\n“Pada tahun ini UIN SGD Bandung sendiri mendapatkan kouta KKM Tematik sebanyak 200 mahasiswa,” ujar Syukriadi.\n\nSementara itu, tema yang diangkat pada KKM Temaik 2014 ini yakni “Pendidikan dan Kebudayaan”. Tema tersebut sesuai dengan yang diberikan Pemerintah Daerah Jawa Barat. Kemudian dikerucutkan kepada macam-macam kegiatan seperti dalam hal pendidikan, kegitannya berupa pemberantatasan buta aksara. Di bidang budaya meliputi pendataan masyarakat buta aksara dan pemberantasan buta aksara al Qur’an. Dan sosialisasi etika Sunda kepada masyarakat.\n\nSyukriadi menuturkan, untuk lokasi KKM Tematik masih berada di daerah kabupaten Bandung. Sebab 400 masyarakatnya masih mengalami buata aksara, baik buta aksara fungsional maupun buta aksara arab.</p>', 'Published', 1, '2016-01-07 15:53:56'),
(7, 'Peserta Pelepasan Program KKN Tematik PTN Se Jawa Barat', 4, 'peserta-pelepasan-program-kkn-tematik-ptn-se-jawa-barat', '<p><img src="/lp2m.uinsgd.ac.id/assets/posting/1.jpg" alt="" /></p>', '<p>Peserta Pelepasan Program KKN Tematik PTN Se Jawa Barat\r\nDengan Tema "Jabar maju bersama kampus dala mewujudkan masyarakat jawa barat maju dan sejahtera untuk rakyat".</p>', 'Published', 1, '2016-01-07 15:55:32'),
(8, 'Mahasiswa UIN SGD Bandung KKM 2014 di Kab Purwakarta, Subang, Sumedang jeung Cianjur', 2, 'mahasiswa-uin-sgd-bandung-kkm-2014', '<p><img src="/lp2m.uinsgd.ac.id/assets/posting/logo.png" alt="" /></p>', '<p>Ketua Lembaga Penelitian & Pengabdian Masyarakat (LP2M) Universitas Islam Negeri (UIN)  Sunan Gunung Djati (SGD) Bandung  Dr.H.Sukriyadi  Sambas M.Si  netelakeun kagiatan Kuliah Kerja Mahasiswa (KKM) UIN SGD Bandung  taun 2014  bakal  lumangsung  mimiti tanggal 27 Februari nepi ka  29 Maret 2014  diiluan 3000 mahasiswa sarta 96 DPL (Dosen Pembimbing Lapangan)  disebar ka  satiap 4 Kecamatan, 6 desa nyaeta di  opat kabupaten ngawengku kabupaten Purwakarta,Subang,Sumedang jeung Cianjur. Diharepkeun kagiatan KKM  nyokot tema “ Memelihara Kesatuan Dalam Keragaman dan Keragaman Dalam Kesatuan Umat” henteu ngajadikeun masarakatna pakia-kia  tapi  tetep sauyunan  turta dina kagiatanna  bisa ngaraharjakeun  masarakatna boh kagiatan babarengan sacara fisik  nyakitu deui non fisik saperti  ngaberantas kabodoan diantarana wae buta huruf Al-Qur’an.. “ Hadirna mahasiswa KKM di lapangan ulah hayang dibantu masyarakat tapi kudu ngabantu masarakat “.Ceuk Sukriyadi Sambas netelakeun ka Koran  Giwangkara nu dijejeran Ketua Penelitian Dr.Deden Effendi .M.Ag,Ketua Pelaksana KKM Dr.Undang Akhmad Kamaluddin,M.Ag, jeung Sekretaris LP2M Wahyudin Darmalaksana M.Ag.(Suherman.S)</p>', 'Published', 1, '2016-01-07 15:54:02'),
(9, 'Pendaftaran Kuliah Kerja Nyata Mahasiswa (KKM) 2016', 3, 'pendaftaran-kuliah-kerja-nyata-mahasiswa-kkm-2016', '<p><img src="/lp2m.uinsgd.ac.id/assets/posting/kkm2016.jpg" alt="" /></p>', '<p>Informasi KKM Tahun 2016</p>\n<p>Pendaftaran online sesuai jadwal : 18 - 23 Januari 2016</p>\n<p>(Untuk melakukan Pendaftaran online)</p>\n<ol>\n<li>Persyaratan di upload saat pendaftaran.</li>\n<li>Mahasiswa angkatan tahun 2012 sudah memenuhi kriteria 75 % mata kuliah termasuk KP.</li>\n<li>Surat Keterangan berhak mengikuti KKM bisa diambil di TU Fakultas masing-masin sesuai data dari jurusan.</li>\n<li>Telah melunasi bayar SPP smt genap 2015/2016</li>\n</ol>\n<div>Pelaksanaan 9 Februari - 10 Maret 2016</div>\n<div>(pelaksanaan dprogram dilapangan)</div>\n<div>&nbsp;</div>\n<div>Lokasi :</div>\n<div>1. Kabupaten Cianjur</div>\n<div>2. Kabupaten Purwakarta</div>\n<div>3. Kabupaten Garut</div>\n<div>&nbsp;</div>\n<div>Pembekalan/Diklat Peserta : 4 Februari 2016</div>\n<div>&nbsp;</div>\n<div>Pemberangkatan :</div>\n<div>Gelombang I (Kab.Cianjur) tanggal 9 Februari 2016</div>\n<div>Gelombang II (Kab.Purwakarta) tanggal 10 Februari 2016</div>\n<div>Gelombang III (Kab.Garut) tanggal 11 Februari 2016</div>\n<div>&nbsp;</div>\n<div>&nbsp;</div>\n<p>&nbsp;</p>', 'Published', 1, '2016-01-08 09:48:07');

-- --------------------------------------------------------

--
-- Table structure for table `daftar_proposal_penelitian`
--

CREATE TABLE IF NOT EXISTS `daftar_proposal_penelitian` (
  `kode_proposal` int(30) NOT NULL AUTO_INCREMENT,
  `judul` varchar(50) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `jenis_proposal` varchar(15) NOT NULL,
  `jabatan` varchar(30) NOT NULL,
  `lokasi_penelitian` varchar(50) NOT NULL,
  `waktu_penelitian` varchar(30) NOT NULL,
  `biaya` varchar(30) NOT NULL,
  `file` varchar(30) NOT NULL,
  PRIMARY KEY (`kode_proposal`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `daftar_proposal_penelitian`
--

INSERT INTO `daftar_proposal_penelitian` (`kode_proposal`, `judul`, `nama_lengkap`, `jenis_proposal`, `jabatan`, `lokasi_penelitian`, `waktu_penelitian`, `biaya`, `file`) VALUES
(1, 'Implementasi Algoritma', 'Yogi Syaputra, ST', 'Proposal Peneli', 'Stat Lab IT Center', 'Bandung', 'Juni-Agustus 2016', 'Rp 2000.000,-', 'Prosedur_Penelitian.docx'),
(2, 'q', 'q', 'Proposal Peneli', 'q', 'qq', '1', '11', 'Makalah-005.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `dokumen`
--

CREATE TABLE IF NOT EXISTS `dokumen` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `nama` varchar(150) NOT NULL,
  `file` varchar(20000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `dokumen`
--

INSERT INTO `dokumen` (`id`, `nama`, `file`) VALUES
(1, 'Plan Of Action, Rencana Strategis Aktifitas Kunci dan Renstra Puslit 2016', 'RENSTRA.rar'),
(2, 'Manual Penelitian, Prosedur Penelitian ', 'Penelitian_(Prosedur).rar'),
(3, 'RIP Penelitian', 'RIP_PENELITIAN_22112015.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `forum_diskusi`
--

CREATE TABLE IF NOT EXISTS `forum_diskusi` (
  `id_chat` int(99) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `pesan` text NOT NULL,
  PRIMARY KEY (`id_chat`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `forum_diskusi`
--

INSERT INTO `forum_diskusi` (`id_chat`, `name`, `waktu`, `pesan`) VALUES
(1, 'Administrator LP2M', '2016-01-09 09:13:50', 'Assalamualaikum'),
(2, 'Siti', '2016-01-09 09:01:28', 'Waalaikumsallam min hee');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE IF NOT EXISTS `jadwal` (
  `id` int(10) NOT NULL,
  `waktu` varchar(30) NOT NULL,
  `lokasi` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `id_kategori` int(5) NOT NULL,
  `nama_kategori` varchar(15) NOT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Berita'),
(2, 'Galeri'),
(3, 'Pengumuman'),
(4, 'Volunteer');

-- --------------------------------------------------------

--
-- Table structure for table `login_session`
--

CREATE TABLE IF NOT EXISTS `login_session` (
  `uid` bigint(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('admin','member') NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_session`
--

INSERT INTO `login_session` (`uid`, `username`, `password`, `level`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `username` varchar(50) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`username`, `nama_lengkap`) VALUES
('admin', 'Furiansyah');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_daftar_kkm`
--

CREATE TABLE IF NOT EXISTS `tbl_daftar_kkm` (
  `nama` varchar(50) NOT NULL,
  `nim` int(20) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `tempat_tanggal_lahir` varchar(35) NOT NULL,
  `fakultas` varchar(30) NOT NULL,
  `jurusan` varchar(30) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `alamat_asal` varchar(100) NOT NULL,
  `alamat_sekarang` text NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `keterangan_khusus` varchar(15) NOT NULL,
  `persyaratan` varchar(15) NOT NULL,
  `foto` varchar(150) NOT NULL,
  `id_kelompok` int(20) NOT NULL,
  `dpl` varchar(40) DEFAULT NULL,
  `surat_keterangan_kuliah` varchar(100) NOT NULL,
  `bukti_lunas_spp` varchar(100) NOT NULL,
  `formulir_pendaftaran` varchar(50) NOT NULL,
  PRIMARY KEY (`nim`),
  UNIQUE KEY `nim` (`nim`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_daftar_kkm`
--

INSERT INTO `tbl_daftar_kkm` (`nama`, `nim`, `jenis_kelamin`, `tempat_tanggal_lahir`, `fakultas`, `jurusan`, `semester`, `alamat_asal`, `alamat_sekarang`, `no_telp`, `keterangan_khusus`, `persyaratan`, `foto`, `id_kelompok`, `dpl`, `surat_keterangan_kuliah`, `bukti_lunas_spp`, `formulir_pendaftaran`) VALUES
('FURIANSYAH DIPRAJA', 1127050062, 'LAKI-LAKI', 'q', 'SAINS DAN TEKNOLOGI', 'TEKNIK INFORMATIKA', 'q', 'q', 'q', 'q', 'TIDAK ADA', '', '1127050062_Foto.png', 102, NULL, '1127050062_Surat_Keterangan_Kuliah.jpg', '1127050062_Bukti_lunas_spp.png', '');

--
-- Triggers `tbl_daftar_kkm`
--
DROP TRIGGER IF EXISTS `kurangi_jumlah`;
DELIMITER //
CREATE TRIGGER `kurangi_jumlah` AFTER INSERT ON `tbl_daftar_kkm`
 FOR EACH ROW BEGIN 
UPDATE tbl_kelompok
SET jumlahlakilaki = jumlahlakilakii - 1
WHERE
id_kelompok = NEW.id_kelompok;
END
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dosen`
--

CREATE TABLE IF NOT EXISTS `tbl_dosen` (
  `kd_dosen` varchar(5) NOT NULL,
  `nidn` varchar(30) DEFAULT NULL,
  `nama_dosen` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`kd_dosen`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_dosen`
--

INSERT INTO `tbl_dosen` (`kd_dosen`, `nidn`, `nama_dosen`) VALUES
('D001', '1234567890', 'Prof. Ali Ramdhani S.TP, M.T'),
('D002', '-', 'H.Cecep Nurul Alam, M.T'),
('D003', '-', 'Moch Irfan, M.T');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dosen_wali`
--

CREATE TABLE IF NOT EXISTS `tbl_dosen_wali` (
  `nim` varchar(20) NOT NULL,
  `kd_dosen` varchar(20) NOT NULL,
  PRIMARY KEY (`nim`,`kd_dosen`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_dosen_wali`
--

INSERT INTO `tbl_dosen_wali` (`nim`, `kd_dosen`) VALUES
('1127050044', 'D001'),
('1127050062', 'D001'),
('1127050069', 'D001');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_info`
--

CREATE TABLE IF NOT EXISTS `tbl_info` (
  `kd_info` int(10) NOT NULL AUTO_INCREMENT,
  `judul` varchar(200) NOT NULL,
  `waktu_post` varchar(30) NOT NULL,
  `isi` text NOT NULL,
  PRIMARY KEY (`kd_info`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_info`
--

INSERT INTO `tbl_info` (`kd_info`, `judul`, `waktu_post`, `isi`) VALUES
(2, 'Informasi KKM', '1451009204', 'Jadwal Pendaftaran KKM Online\r\n18 - 23 Januari 2016,\r\nSetelah formulir pendaftaran ditanda tangani oleh pihak fakultas, segera validasi formulir pendaftaran.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jadwal`
--

CREATE TABLE IF NOT EXISTS `tbl_jadwal` (
  `kd_jadwal` int(11) NOT NULL AUTO_INCREMENT,
  `kd_mk` varchar(20) NOT NULL,
  `kd_dosen` varchar(5) NOT NULL,
  `kd_tahun` varchar(20) NOT NULL,
  `jadwal` varchar(100) NOT NULL,
  `kapasitas` int(3) NOT NULL,
  `kelas_program` varchar(10) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  PRIMARY KEY (`kd_jadwal`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_jadwal`
--

INSERT INTO `tbl_jadwal` (`kd_jadwal`, `kd_mk`, `kd_dosen`, `kd_tahun`, `jadwal`, `kapasitas`, `kelas_program`, `kelas`) VALUES
(1, '1111305', 'D001', 'gnp-11/12', 'Kamis / 08.00-10.00 / ruang 3.3', 80, 'sore', 'A'),
(2, '1111305', 'D001', 'gnp-11/12', 'Selasa / 10.00-12.00 / ruang 21', 30, 'pagi', 'B'),
(3, '1111306', 'D001', 'gnp-11/12', 'Senin / 08.00-10.00 / Ruang 3.3', 30, 'pagi', 'A'),
(4, '1111201', 'D001', 'gnp-11/12', 'Senin / 08.00-11.00 / Ruang 2.3', 50, 'pagi', 'A'),
(5, '1111201', 'D001', 'gnp-11/12', 'Senin / 08.00-11.00 / Ruang 1.3', 40, 'pagi', 'B'),
(6, '1111305', 'D001', 'gnp-11/12', 'Jumat / 10.00 -12.00 / ruang 1.3', 25, 'pagi', 'B');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kelompok`
--

CREATE TABLE IF NOT EXISTS `tbl_kelompok` (
  `id_kelompok` int(20) NOT NULL AUTO_INCREMENT,
  `nidn` varchar(30) NOT NULL,
  `dpl` varchar(50) NOT NULL,
  `lokasi` varchar(30) NOT NULL,
  `jumlah` int(30) NOT NULL,
  `jumlahlakilaki` int(6) NOT NULL,
  `jk_p` int(6) NOT NULL,
  PRIMARY KEY (`id_kelompok`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=271 ;

--
-- Dumping data for table `tbl_kelompok`
--

INSERT INTO `tbl_kelompok` (`id_kelompok`, `nidn`, `dpl`, `lokasi`, `jumlah`, `jumlahlakilaki`, `jk_p`) VALUES
(1, '-', '-', '-', 12, 6, 6),
(2, '-', '-', '-', 12, 6, 6),
(3, '-', '-', '-', 12, 6, 6),
(4, '-', '-', '-', 12, 6, 6),
(5, '-', '-', '-', 12, 6, 6),
(6, '-', '-', '-', 10, 0, 0),
(7, '-', '-', '-', 10, 0, 0),
(8, '-', '-', '-', 10, 0, 0),
(9, '-', '-', '-', 10, 0, 0),
(10, '-', '-', '-', 10, 0, 0),
(11, '-', '-', '-', 10, 0, 0),
(12, '-', '-', '-', 10, 0, 0),
(13, '-', '-', '-', 10, 0, 0),
(14, '-', '-', '-', 10, 0, 0),
(15, '-', '-', '-', 10, 0, 0),
(16, '-', '-', '-', 10, 0, 0),
(17, '-', '-', '-', 10, 0, 0),
(18, '-', '-', '-', 10, 0, 0),
(19, '-', '-', '-', 10, 0, 0),
(20, '-', '-', '-', 10, 0, 0),
(21, '-', '-', '-', 10, 0, 0),
(22, '-', '-', '-', 10, 0, 0),
(23, '-', '-', '-', 10, 0, 0),
(24, '-', '-', '-', 10, 0, 0),
(25, '-', '-', '-', 10, 0, 0),
(26, '-', '-', '-', 10, 0, 0),
(27, '-', '-', '-', 10, 0, 0),
(28, '-', '-', '-', 10, 0, 0),
(29, '-', '-', '-', 10, 0, 0),
(30, '-', '-', '-', 10, 0, 0),
(31, '-', '-', '-', 10, 0, 0),
(32, '-', '-', '-', 10, 0, 0),
(33, '-', '-', '-', 10, 0, 0),
(34, '-', '-', '-', 10, 0, 0),
(35, '-', '-', '-', 10, 0, 0),
(36, '-', '-', '-', 10, 0, 0),
(37, '-', '-', '-', 10, 0, 0),
(38, '-', '-', '-', 10, 0, 0),
(39, '-', '-', '-', 10, 0, 0),
(40, '-', '-', '-', 10, 0, 0),
(41, '-', '-', '-', 10, 0, 0),
(42, '-', '-', '-', 10, 0, 0),
(43, '-', '-', '-', 10, 0, 0),
(44, '-', '-', '-', 10, 0, 0),
(45, '-', '-', '-', 10, 0, 0),
(46, '-', '-', '-', 10, 0, 0),
(47, '-', '-', '-', 10, 0, 0),
(48, '-', '-', '-', 10, 0, 0),
(49, '-', '-', '-', 10, 0, 0),
(50, '-', '-', '-', 10, 0, 0),
(51, '-', '-', '-', 10, 0, 0),
(52, '-', '-', '-', 10, 0, 0),
(53, '-', '-', '-', 10, 0, 0),
(54, '-', '-', '-', 10, 0, 0),
(55, '-', '-', '-', 10, 0, 0),
(56, '-', '-', '-', 10, 0, 0),
(57, '-', '-', '-', 10, 0, 0),
(58, '-', '-', '-', 10, 0, 0),
(59, '-', '-', '-', 10, 0, 0),
(60, '-', '-', '-', 10, 0, 0),
(61, '-', '-', '-', 10, 0, 0),
(62, '-', '-', '-', 10, 0, 0),
(63, '-', '-', '-', 10, 0, 0),
(64, '-', '-', '-', 10, 0, 0),
(65, '-', '-', '-', 10, 0, 0),
(66, '-', '-', '-', 10, 0, 0),
(67, '-', '-', '-', 10, 0, 0),
(68, '-', '-', '-', 10, 0, 0),
(69, '-', '-', '-', 10, 0, 0),
(70, '-', '-', '-', 10, 0, 0),
(71, '-', '-', '-', 10, 0, 0),
(72, '-', '-', '-', 10, 0, 0),
(73, '-', '-', '-', 10, 0, 0),
(74, '-', '-', '-', 10, 0, 0),
(75, '-', '-', '-', 10, 0, 0),
(76, '-', '-', '-', 10, 0, 0),
(77, '-', '-', '-', 10, 0, 0),
(78, '-', '-', '-', 10, 0, 0),
(79, '-', '-', '-', 10, 0, 0),
(80, '-', '-', '-', 10, 0, 0),
(81, '-', '-', '-', 10, 0, 0),
(82, '-', '-', '-', 10, 0, 0),
(83, '-', '-', '-', 10, 0, 0),
(84, '-', '-', '-', 10, 0, 0),
(85, '-', '-', '-', 10, 0, 0),
(86, '-', '-', '-', 10, 0, 0),
(87, '-', '-', '-', 10, 0, 0),
(88, '-', '-', '-', 10, 0, 0),
(89, '-', '-', '-', 10, 0, 0),
(90, '-', '-', '-', 10, 0, 0),
(91, '-', '-', '-', 10, 0, 0),
(92, '-', '-', '-', 10, 0, 0),
(93, '-', '-', '-', 10, 0, 0),
(94, '-', '-', '-', 10, 0, 0),
(95, '-', '-', '-', 10, 0, 0),
(96, '-', '-', '-', 10, 0, 0),
(97, '-', '-', '-', 10, 0, 0),
(98, '-', '-', '-', 10, 0, 0),
(99, '-', '-', '-', 10, 0, 0),
(100, '-', '-', '-', 10, 0, 0),
(101, '-', '-', '-', 10, 0, 0),
(102, '-', '-', '-', 9, 0, 0),
(103, '-', '-', '-', 10, 0, 0),
(104, '-', '-', '-', 10, 0, 0),
(105, '-', '-', '-', 10, 0, 0),
(106, '-', '-', '-', 10, 0, 0),
(107, '-', '-', '-', 10, 0, 0),
(108, '-', '-', '-', 10, 0, 0),
(109, '-', '-', '-', 10, 0, 0),
(110, '-', '-', '-', 10, 0, 0),
(111, '-', '-', '-', 10, 0, 0),
(112, '-', '-', '-', 10, 0, 0),
(113, '-', '-', '-', 10, 0, 0),
(114, '-', '-', '-', 10, 0, 0),
(115, '-', '-', '-', 10, 0, 0),
(116, '-', '-', '-', 10, 0, 0),
(117, '-', '-', '-', 10, 0, 0),
(118, '-', '-', '-', 10, 0, 0),
(119, '-', '-', '-', 10, 0, 0),
(120, '-', '-', '-', 10, 0, 0),
(121, '-', '-', '-', 10, 0, 0),
(122, '-', '-', '-', 10, 0, 0),
(123, '-', '-', '-', 10, 0, 0),
(124, '-', '-', '-', 10, 0, 0),
(125, '-', '-', '-', 10, 0, 0),
(126, '-', '-', '-', 10, 0, 0),
(127, '-', '-', '-', 10, 0, 0),
(128, '-', '-', '-', 10, 0, 0),
(129, '-', '-', '-', 10, 0, 0),
(130, '-', '-', '-', 10, 0, 0),
(131, '-', '-', '-', 10, 0, 0),
(132, '-', '-', '-', 10, 0, 0),
(133, '-', '-', '-', 10, 0, 0),
(134, '-', '-', '-', 10, 0, 0),
(135, '-', '-', '-', 10, 0, 0),
(136, '-', '-', '-', 10, 0, 0),
(137, '-', '-', '-', 10, 0, 0),
(138, '-', '-', '-', 10, 0, 0),
(139, '-', '-', '-', 10, 0, 0),
(140, '-', '-', '-', 10, 0, 0),
(141, '-', '-', '-', 10, 0, 0),
(142, '-', '-', '-', 10, 0, 0),
(143, '-', '-', '-', 10, 0, 0),
(144, '-', '-', '-', 10, 0, 0),
(145, '-', '-', '-', 10, 0, 0),
(146, '-', '-', '-', 10, 0, 0),
(147, '-', '-', '-', 10, 0, 0),
(148, '-', '-', '-', 10, 0, 0),
(149, '-', '-', '-', 10, 0, 0),
(150, '-', '-', '-', 10, 0, 0),
(151, '-', '-', '-', 10, 0, 0),
(152, '-', '-', '-', 10, 0, 0),
(153, '-', '-', '-', 10, 0, 0),
(154, '-', '-', '-', 10, 0, 0),
(155, '-', '-', '-', 10, 0, 0),
(156, '-', '-', '-', 10, 0, 0),
(157, '-', '-', '-', 10, 0, 0),
(158, '-', '-', '-', 10, 0, 0),
(159, '-', '-', '-', 10, 0, 0),
(160, '-', '-', '-', 10, 0, 0),
(161, '-', '-', '-', 10, 0, 0),
(162, '-', '-', '-', 10, 0, 0),
(163, '-', '-', '-', 10, 0, 0),
(164, '-', '-', '-', 10, 0, 0),
(165, '-', '-', '-', 10, 0, 0),
(166, '-', '-', '-', 10, 0, 0),
(167, '-', '-', '-', 10, 0, 0),
(168, '-', '-', '-', 10, 0, 0),
(169, '-', '-', '-', 10, 0, 0),
(170, '-', '-', '-', 10, 0, 0),
(171, '-', '-', '-', 10, 0, 0),
(172, '-', '-', '-', 10, 0, 0),
(173, '-', '-', '-', 10, 0, 0),
(174, '-', '-', '-', 10, 0, 0),
(175, '-', '-', '-', 10, 0, 0),
(176, '-', '-', '-', 10, 0, 0),
(177, '-', '-', '-', 10, 0, 0),
(178, '-', '-', '-', 10, 0, 0),
(179, '-', '-', '-', 10, 0, 0),
(180, '-', '-', '-', 10, 0, 0),
(181, '-', '-', '-', 10, 0, 0),
(182, '-', '-', '-', 10, 0, 0),
(183, '-', '-', '-', 10, 0, 0),
(184, '-', '-', '-', 10, 0, 0),
(185, '-', '-', '-', 10, 0, 0),
(186, '-', '-', '-', 10, 0, 0),
(187, '-', '-', '-', 10, 0, 0),
(188, '-', '-', '-', 10, 0, 0),
(189, '-', '-', '-', 10, 0, 0),
(190, '-', '-', '-', 10, 0, 0),
(191, '-', '-', '-', 10, 0, 0),
(192, '-', '-', '-', 10, 0, 0),
(193, '-', '-', '-', 10, 0, 0),
(194, '-', '-', '-', 10, 0, 0),
(195, '-', '-', '-', 10, 0, 0),
(196, '-', '-', '-', 10, 0, 0),
(197, '-', '-', '-', 10, 0, 0),
(198, '-', '-', '-', 10, 0, 0),
(199, '-', '-', '-', 10, 0, 0),
(200, '-', '-', '-', 10, 0, 0),
(201, '-', '-', '-', 10, 0, 0),
(202, '-', '-', '-', 10, 0, 0),
(203, '-', '-', '-', 10, 0, 0),
(204, '-', '-', '-', 10, 0, 0),
(205, '-', '-', '-', 10, 0, 0),
(206, '-', '-', '-', 10, 0, 0),
(207, '-', '-', '-', 10, 0, 0),
(208, '-', '-', '-', 10, 0, 0),
(209, '-', '-', '-', 10, 0, 0),
(210, '-', '-', '-', 10, 0, 0),
(211, '-', '-', '-', 10, 0, 0),
(212, '-', '-', '-', 10, 0, 0),
(213, '-', '-', '-', 10, 0, 0),
(214, '-', '-', '-', 10, 0, 0),
(215, '-', '-', '-', 10, 0, 0),
(216, '-', '-', '-', 10, 0, 0),
(217, '-', '-', '-', 10, 0, 0),
(218, '-', '-', '-', 10, 0, 0),
(219, '-', '-', '-', 10, 0, 0),
(220, '-', '-', '-', 10, 0, 0),
(221, '-', '-', '-', 10, 0, 0),
(222, '-', '-', '-', 10, 0, 0),
(223, '-', '-', '-', 10, 0, 0),
(224, '-', '-', '-', 10, 0, 0),
(225, '-', '-', '-', 10, 0, 0),
(226, '-', '-', '-', 10, 0, 0),
(227, '-', '-', '-', 10, 0, 0),
(228, '-', '-', '-', 10, 0, 0),
(229, '-', '-', '-', 10, 0, 0),
(230, '-', '-', '-', 10, 0, 0),
(231, '-', '-', '-', 10, 0, 0),
(232, '-', '-', '-', 10, 0, 0),
(233, '-', '-', '-', 10, 0, 0),
(234, '-', '-', '-', 10, 0, 0),
(235, '-', '-', '-', 10, 0, 0),
(236, '-', '-', '-', 10, 0, 0),
(237, '-', '-', '-', 10, 0, 0),
(238, '-', '-', '-', 10, 0, 0),
(239, '-', '-', '-', 10, 0, 0),
(240, '-', '-', '-', 10, 0, 0),
(241, '-', '-', '-', 10, 0, 0),
(242, '-', '-', '-', 10, 0, 0),
(243, '-', '-', '-', 10, 0, 0),
(244, '-', '-', '-', 10, 0, 0),
(245, '-', '-', '-', 10, 0, 0),
(246, '-', '-', '-', 10, 0, 0),
(247, '-', '-', '-', 10, 0, 0),
(248, '-', '-', '-', 10, 0, 0),
(249, '-', '-', '-', 10, 0, 0),
(250, '-', '-', '-', 10, 0, 0),
(251, '-', '-', '-', 10, 0, 0),
(252, '-', '-', '-', 10, 0, 0),
(253, '-', '-', '-', 10, 0, 0),
(254, '-', '-', '-', 10, 0, 0),
(255, '-', '-', '-', 10, 0, 0),
(256, '-', '-', '-', 10, 0, 0),
(257, '-', '-', '-', 10, 0, 0),
(258, '-', '-', '-', 10, 0, 0),
(259, '-', '-', '-', 10, 0, 0),
(260, '-', '-', '-', 10, 0, 0),
(261, '-', '-', '-', 10, 0, 0),
(262, '-', '-', '-', 10, 0, 0),
(263, '-', '-', '-', 10, 0, 0),
(264, '-', '-', '-', 10, 0, 0),
(265, '-', '-', '-', 10, 0, 0),
(266, '-', '-', '-', 10, 0, 0),
(267, '-', '-', '-', 10, 0, 0),
(268, '-', '-', '-', 10, 0, 0),
(269, '-', '-', '-', 10, 0, 0),
(270, '-', '-', '-', 10, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE IF NOT EXISTS `tbl_login` (
  `username` varchar(50) NOT NULL,
  `password` varchar(75) NOT NULL,
  `stts` varchar(10) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`username`, `password`, `stts`) VALUES
('1127050062', '1ca665e942b536c6beddea9215c2e147', 'mahasiswa'),
('admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
('D001', 'ce28eed1511f631af6b2a7bb0a85d636', 'dosen');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mahasiswa`
--

CREATE TABLE IF NOT EXISTS `tbl_mahasiswa` (
  `no` int(30) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `nama_mahasiswa` varchar(100) NOT NULL,
  `angkatan` int(5) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `jurusan` varchar(30) NOT NULL,
  `fakultas` varchar(35) NOT NULL,
  PRIMARY KEY (`nim`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_mahasiswa`
--

INSERT INTO `tbl_mahasiswa` (`no`, `nim`, `nama_mahasiswa`, `angkatan`, `semester`, `jurusan`, `fakultas`) VALUES
(1, '1127050062', 'FURIANSYAH DIPRAJA', 2112, 'VIII', 'TEKNIK INFORMATIKA', 'SAINS DAN TEKNOLOGI'),
(2, '1127050069', 'ICHSAN MUIZ', 2012, 'VIII', 'TEKNIK INFORMATIKA', 'SAINS DAN TEKNOLOGI');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
