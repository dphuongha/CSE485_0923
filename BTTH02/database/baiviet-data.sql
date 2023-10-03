-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 25, 2023 lúc 01:53 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `btth01_cse485`
--

--
-- Đang đổ dữ liệu cho bảng `baiviet`
--

INSERT IGNORE INTO `baiviet` (`ma_bviet`, `tieude`, `ten_bhat`, `ma_tloai`, `tomtat`, `noidung`, `ma_tgia`, `ngayviet`, `hinhanh`) VALUES
(1, 'Afghanistan', 'Janaway', 1, 'White-throated toucan', 'Ramphastos tucanus', 1, '0000-00-00 00:00:00', 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAADTSURBVDjLY/j//z8DJZhhGBhw8uTJ/5RgsAF//vwhC7948QJhADkGDTEDtp'),
(2, 'Cambodia', 'Salamon', 2, 'Pacific gull', 'Gabianus pacificus', 2, '0000-00-00 00:00:00', 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAJGSURBVDjLzZNvLNRxHMc96qGt5z3uH3FIrEUlItel5VLtbjbcdJhwOBoiRp'),
(3, 'Australia', 'Munkley', 3, 'Pronghorn', 'Antilocapra americana', 3, '0000-00-00 00:00:00', 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAG1SURBVBgZpcG/S9RxHMfx5+dz3+LKsKxBC4KQXIvArYb+BQmuIYgGoaBJiA'),
(4, 'Afghanistan', 'Ybarra', 4, 'Dingo', 'Canis dingo', 4, '0000-00-00 00:00:00', 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAHySURBVDjLtZPvT1JxFMb5O/gHskVzrrV+mFZomDdEDGkYKSXlRleY6IzcFd'),
(5, 'Afghanistan', 'Staley', 5, 'Monkey, vervet', 'Cercopithecus aethiops', 5, '0000-00-00 00:00:00', 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAJ7SURBVDjLpVNLSFRRGP7u3Dt3JnMsdcAeNjrgAyoqWiQUZBYi6aYiFbEWbd'),
(6, 'Afghanistan', 'Claris', 6, 'Serval', 'Felis serval', 6, '0000-00-00 00:00:00', 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAGeSURBVDjLvZPPK4NxHMe/F4dFymE8hx2YpEn+gWcHR20au4gdbCcnu3l6Tq'),
(7, 'Afghanistan', 'Napolione', 7, 'American Virginia opossum', 'Didelphis virginiana', 7, '0000-00-00 00:00:00', 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAG8SURBVDjLjZNJS8NAGIarv0PBuzcV/4MHwYMHL/4CPQsexYvoSW2RioiguJ'),
(8, 'Afghanistan', 'Furminger', 8, 'Australian spiny anteater', 'Tachyglossus aculeatus', 8, '0000-00-00 00:00:00', 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAJQSURBVDjLjZNvSBNxGMeX9O+FOAkaLbehozdGRGiMQqTIlEqJMIig3oxl0Y'),
(9, 'Bangladesh', 'Barnsley', 9, 'Curve-billed thrasher', 'Toxostoma curvirostre', 9, '0000-00-00 00:00:00', 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAJCSURBVBgZBcFBi1VlGADg5/3Od+/cYWjUTYlRS43Zi1BGuGlVizZB0EJaFf'),
(10, 'Afghanistan', 'Tasker', 10, 'Shrike, crimson-breasted', 'Laniaurius atrococcineus', 10, '0000-00-00 00:00:00', 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAJUSURBVDjLpZNbaJJhHMZHUES51SoiqssWm5SMQekoFwvnYR4RP02dh/yMMh');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
