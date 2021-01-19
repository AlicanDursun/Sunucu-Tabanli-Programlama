-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost:3306
-- Üretim Zamanı: 19 Oca 2021, 15:28:42
-- Sunucu sürümü: 10.4.16-MariaDB
-- PHP Sürümü: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `db`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `galeri`
--

CREATE TABLE `galeri` (
  `id` int(11) NOT NULL,
  `resim` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `galeri`
--

INSERT INTO `galeri` (`id`, `resim`) VALUES
(35, '7.jpg'),
(36, '1.jpg'),
(37, '8.jpg'),
(38, '6.jpg'),
(39, '4.jpg'),
(40, '5.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hakkimizda`
--

CREATE TABLE `hakkimizda` (
  `id` int(11) NOT NULL,
  `aciklama` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `hakkimizda`
--

INSERT INTO `hakkimizda` (`id`, `aciklama`) VALUES
(4, 'Şirketimiz bünyesinde uzmanlaştırdığı personelleriyle endüstriyel zeminler, küvet boyamalar, su, ses, ısı izolasyonları konusunda Türkiye genelinde iş yapmaktadır. Doğa Endüstri olarak epoxy, poliüretan boyaları, su, ses, ısı izolasyon malzemelerinin satış ve uygulamasını yapmaktayız. Sürekli gelişim ve değişimi hedefleyerek, kaliteli bir hizmet anlayışı geliştirip tüm müşterilerin firmaya olan güvenlerini sürekli kılmak ve verdiğimiz hizmetleri daha da iyileştirmeye çalışmak her zaman birinci hedefimizdir. Siz müşterilerimize hizmet verirken gereken tüm şartlara uymak, beklentilerinize en uygun çözümler üreterek memnuniyeti en üst seviyede tutmak yaptığımız işlerde mümkün olduğu kadar çevre dostu unsurlar kullanmak, söz verdiğimiz işleri zamanında teslim etmek, standartlara uygun olarak çalışmak ve yine bu doğrultuda üstlendiğimiz görevleri tamamlamak, iş güvenliğini en önemli kılmak ve geliştirmek kalite politikamızdır. Uygulama Sürecinde iş güvenliğinden asla taviz vermeyiz.');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `iletisim`
--

CREATE TABLE `iletisim` (
  `id` int(11) NOT NULL,
  `adsoyad` text NOT NULL,
  `email` text NOT NULL,
  `konu` text NOT NULL,
  `mesaj` text NOT NULL,
  `zaman` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `iletisim`
--

INSERT INTO `iletisim` (`id`, `adsoyad`, `email`, `konu`, `mesaj`, `zaman`) VALUES
(24, 'Alican Dursun', 'alicangdursun@gmail.com', 'Deneme', 'Deneme', '2021-01-15 12:14:54'),
(25, 'Alican Dursun', 'alicangdursun@gmail.com', 'Deneme', 'Deneme', '2021-01-15 12:21:51');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `iletisimbilgi`
--

CREATE TABLE `iletisimbilgi` (
  `id` int(11) NOT NULL,
  `tel` text NOT NULL,
  `fax` text NOT NULL,
  `email` text NOT NULL,
  `adres` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `iletisimbilgi`
--

INSERT INTO `iletisimbilgi` (`id`, `tel`, `fax`, `email`, `adres`) VALUES
(17, '2423450278', '2423450279', 'info@dogaendustri.com', 'Dutlubahçe Mah. 773 Sok. 17/1 (Seçkin İş Merkezi) ANTALYA');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanicilar`
--

CREATE TABLE `kullanicilar` (
  `id` int(11) NOT NULL,
  `kullaniciAdi` text NOT NULL,
  `sifre` text NOT NULL,
  `email` text NOT NULL,
  `adSoyad` text NOT NULL,
  `yetki` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `kullanicilar`
--

INSERT INTO `kullanicilar` (`id`, `kullaniciAdi`, `sifre`, `email`, `adSoyad`, `yetki`) VALUES
(3, 'admin', 'admin', 'alican@gmail.com', 'Alican Dursun', 'admin'),
(33, 'alican', '1234', 'alicandursun@gmail.com', 'Alican Dursun', 'uye');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `neleryapiyoruz`
--

CREATE TABLE `neleryapiyoruz` (
  `id` int(11) NOT NULL,
  `baslik1` text NOT NULL,
  `yazi1` text NOT NULL,
  `baslik2` text NOT NULL,
  `yazi2` text NOT NULL,
  `baslik3` text NOT NULL,
  `yazi3` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `neleryapiyoruz`
--

INSERT INTO `neleryapiyoruz` (`id`, `baslik1`, `yazi1`, `baslik2`, `yazi2`, `baslik3`, `yazi3`) VALUES
(3, 'Epoksi Nedir?', 'Epoksi termosetler grubundan gelen kimyasal bir reçinedir. Epoksi güçlü bir yapıştırıcıdır. Genellikle iki kompenantlıdır. İkinci kompenantı ile birleştiğinde tepkimeye girer ve sıvı halden katı hale geçer. Bir hafta da kürlenir. Asit ve alkaliye karşı dayanma mukavemeti yüksektir ve özelliğini uzun yıllar sürdürür.', 'Zemin Kaplamaları', 'Endüstriyel Epoksi Zemin Kaplamaları,\r\nEndüstriyel Poliüretan Kaplamaları,\r\nLaminasyonlu Epoksi Zemin Kaplama,\r\nEpoksi Mortar Kaplama,\r\nBeton Parlatma,\r\nKaymaz Zemin Uygulamaları,\r\nMermer Parlatma', 'Yalıtımlar', '\r\nIslak Mekan Su Yalıtımı,\r\nÇatı Teras Su Yalıtımı,\r\nYüzme ve Süs Havuzları Yalıtımı\r\n');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `referans`
--

CREATE TABLE `referans` (
  `id` int(11) NOT NULL,
  `resim` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `referans`
--

INSERT INTO `referans` (`id`, `resim`) VALUES
(3, '21.jpg'),
(4, '12.png'),
(9, '8.jpg'),
(10, '11.png'),
(11, '4.jpg'),
(12, '20.png'),
(14, '2.png');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `baslik` text NOT NULL,
  `yazi` text NOT NULL,
  `yazi2` text NOT NULL,
  `resim` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `slider`
--

INSERT INTO `slider` (`id`, `baslik`, `yazi`, `yazi2`, `resim`) VALUES
(3, 'Doğa Endüstri', 'Hoşgeldiniz', 'Muratpaşa, ANTALYA', 'slider.jpg');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `hakkimizda`
--
ALTER TABLE `hakkimizda`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `iletisim`
--
ALTER TABLE `iletisim`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `iletisimbilgi`
--
ALTER TABLE `iletisimbilgi`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `kullanicilar`
--
ALTER TABLE `kullanicilar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `neleryapiyoruz`
--
ALTER TABLE `neleryapiyoruz`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `referans`
--
ALTER TABLE `referans`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- Tablo için AUTO_INCREMENT değeri `hakkimizda`
--
ALTER TABLE `hakkimizda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Tablo için AUTO_INCREMENT değeri `iletisim`
--
ALTER TABLE `iletisim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Tablo için AUTO_INCREMENT değeri `iletisimbilgi`
--
ALTER TABLE `iletisimbilgi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Tablo için AUTO_INCREMENT değeri `kullanicilar`
--
ALTER TABLE `kullanicilar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- Tablo için AUTO_INCREMENT değeri `neleryapiyoruz`
--
ALTER TABLE `neleryapiyoruz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Tablo için AUTO_INCREMENT değeri `referans`
--
ALTER TABLE `referans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Tablo için AUTO_INCREMENT değeri `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
