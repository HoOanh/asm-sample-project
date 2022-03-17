-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 21, 2021 lúc 10:06 AM
-- Phiên bản máy phục vụ: 10.4.20-MariaDB
-- Phiên bản PHP: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `flowers_data`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comments`
--

CREATE TABLE `comments` (
  `idComment` int(11) NOT NULL,
  `content` text NOT NULL,
  `date` date NOT NULL,
  `showHide` int(11) NOT NULL COMMENT '0 (non-highlight) / 1 (highlight)',
  `idUser` int(11) NOT NULL,
  `idProduct` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `comments`
--

INSERT INTO `comments` (`idComment`, `content`, `date`, `showHide`, `idUser`, `idProduct`) VALUES
(1, 'good product', '2021-10-15', 1, 3, 1),
(2, 'perfect', '2021-10-15', 1, 4, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `invoice`
--

CREATE TABLE `invoice` (
  `idInvoice` int(11) NOT NULL,
  `date` date NOT NULL,
  `idUser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `invoice`
--

INSERT INTO `invoice` (`idInvoice`, `date`, `idUser`) VALUES
(1, '2021-10-13', 3),
(2, '2021-10-14', 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `invoicedetails`
--

CREATE TABLE `invoicedetails` (
  `idInvoice` int(11) NOT NULL,
  `idProduct` int(11) NOT NULL,
  `nameProduct` varchar(100) NOT NULL,
  `Price` varchar(100) NOT NULL,
  `quantity` int(11) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `invoicedetails`
--

INSERT INTO `invoicedetails` (`idInvoice`, `idProduct`, `nameProduct`, `Price`, `quantity`, `status`) VALUES
(1, 1, 'Secret of Love', '$40.50', 1, 'Pending'),
(1, 4, 'Lovely flower colors', '$30.50', 2, 'Delivered'),
(2, 5, 'Equanimity', '$55.50', 1, 'In Progress'),
(2, 4, 'Lovely flower colors', '$30.50', 2, 'Pending'),
(3, 6, 'Light Moon', '$62.55', 1, 'Pending'),
(4, 8, 'A moment of peace', '$62.55', 1, 'Delivered'),
(3, 7, 'Warm weather', '$62.55', 1, 'Pending'),
(4, 10, 'Romantic & Thuy Chung Orchid Pots', '$62.55', 1, 'Delivered'),
(3, 4, 'Lovely flower colors', '$30.50', 3, 'In Progress'),
(2, 8, 'A moment of peace', '$62.55', 2, 'In Progress'),
(3, 4, 'Lovely flower colors', '$30.50', 3, 'In Progress'),
(2, 8, 'A moment of peace', '$62.55', 2, 'In Progress');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `idProduct` int(11) NOT NULL,
  `nameProduct` varchar(100) NOT NULL,
  `price` varchar(20) NOT NULL,
  `imgUrl` varchar(100) NOT NULL DEFAULT 'products/non-img-product.png',
  `content` text NOT NULL,
  `highlight` int(11) NOT NULL COMMENT '0(non-highlight) / 1(highlight)',
  `date` date NOT NULL,
  `view` int(11) NOT NULL DEFAULT 0,
  `idType` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`idProduct`, `nameProduct`, `price`, `imgUrl`, `content`, `highlight`, `date`, `view`, `idType`) VALUES
(1, 'Secret of Love', '$40.50', 'products/product-1.webp', 'Roses and golden auspicious flowers will help you send the strongest and clearest message of happiness and joy, as well as send \"sweet things\" to the person you always love and cherish in your life. living.', 1, '2021-10-01', 20, 1),
(2, 'Sweet love', '$25.50', 'products/product-2.webp', 'A fresh bouquet of tender flowers with a simple design and a combination of hydrangeas, auspicious flowers, and chrysanthemums create a harmonious, fresh color for the bouquet.', 1, '2021-09-01', 150, 1),
(3, 'Fly Me To The Moon', '$25.50', 'products/product-3.webp', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.', 1, '2021-10-01', 29, 2),
(4, 'Lovely flower colors', '$30.50', 'products/product-4.webp', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.', 1, '2021-10-01', 14, 2),
(5, 'Equanimity', '$55.50', 'products/product-5.webp', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.', 1, '2021-10-01', 243, 3),
(6, 'Light Moon', '$62.55', 'products/product-6.webp', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.', 1, '2021-10-01', 10, 3),
(7, 'Warm weather', '$35.50', 'products/product-7.webp', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.', 1, '2021-10-01', 25, 4),
(8, 'A moment of peace', '$45.00', 'products/product-8.webp', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.', 1, '2021-10-01', 32, 4),
(9, 'White orchid incense', '$45.50', 'products/product-9.webp', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.', 1, '2021-10-01', 13, 5),
(10, 'Romantic & Thuy Chung Orchid Pots', '$75.50', 'products/product-10.webp', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.', 1, '2021-10-01', 50, 5),
(11, 'Romantic & Thuy Chung Orchid Pots', '$75.50', 'products/product-10.webp', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.', 1, '2021-10-01', 50, 5),
(12, 'White orchid incense', '$45.50', 'products/product-9.webp', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.', 1, '2021-10-01', 13, 5),
(13, 'Warm weather', '$35.50', 'products/product-7.webp', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.', 0, '2021-10-01', 25, 4),
(14, 'Romantic & Thuy Chung Orchid Pots', '$75.50', 'products/product-10.webp', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.', 0, '2021-10-01', 50, 5),
(15, 'White orchid incense', '$45.50', 'products/product-9.webp', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.', 1, '2021-10-01', 13, 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `productcategory`
--

CREATE TABLE `productcategory` (
  `idCategory` int(11) NOT NULL,
  `nameCategory` varchar(100) NOT NULL,
  `imgUrl` varchar(100) NOT NULL DEFAULT 'categories/non-categories.webp',
  `showHide` int(11) NOT NULL COMMENT '0(Hide) / 1(Show)',
  `ordinal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `productcategory`
--

INSERT INTO `productcategory` (`idCategory`, `nameCategory`, `imgUrl`, `showHide`, `ordinal`) VALUES
(1, 'Fresh Flower', 'categories/categories-1.webp', 1, 1),
(2, 'Succulent plants', 'categories/categories-2.webp', 1, 2),
(3, 'Tropical trees', 'categories/non-categories.webp', 0, 3),
(4, 'Cactus plants', 'categories/categories-3.webp', 1, 4),
(5, 'Funiture tree', 'categories/categories-4.webp', 1, 5),
(6, 'Confetti', 'categories/non-categories.webp', 0, 6),
(9, 'update 2', 'categories/non-categories.webp', 0, 11),
(15, 'tesst', 'categories/non-categories.webp', 0, 12),
(17, 'ok32', 'categories/non-categories.webp', 0, 111),
(18, 'tesst', 'categories/non-categories.webp', 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `producttype`
--

CREATE TABLE `producttype` (
  `idType` int(11) NOT NULL,
  `nameType` varchar(100) NOT NULL,
  `showHide` int(11) NOT NULL COMMENT '0(Hide) / 1(Show)',
  `ordinal` int(11) NOT NULL,
  `idCategory` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `producttype`
--

INSERT INTO `producttype` (`idType`, `nameType`, `showHide`, `ordinal`, `idCategory`) VALUES
(1, 'Bouquet', 1, 1, 1),
(2, 'Flower box', 1, 2, 1),
(3, 'Flower shelf', 1, 3, 4),
(4, 'Basket of flower', 1, 4, 2),
(5, 'Gift combos', 1, 5, 1),
(10, '3113', 1, 2, 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `idUser` int(11) NOT NULL,
  `fullName` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `gender` int(11) NOT NULL COMMENT '0(Female) / 1(Male)',
  `date` date NOT NULL,
  `role` int(11) NOT NULL DEFAULT 0 COMMENT '0(Client) / 1(Admin)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`idUser`, `fullName`, `username`, `pass`, `email`, `phone`, `gender`, `date`, `role`) VALUES
(1, 'Oanh Ho', 'admin1', '123456', 'oanhghf@gmail.com', '3435148184', 1, '2021-10-02', 1),
(2, 'Peter', 'admin2', '123456', 'peter124@gmail.com', '3461548422', 1, '2021-10-05', 1),
(3, 'Client1', 'client1', '123456', 'clien1@gmail.com', '12345679', 0, '2021-10-16', 0),
(5, 'Client2', 'client2', '123456', 'clien2@gmail.com', '12345679', 1, '2021-10-16', 0),
(6, 'Client', 'client3', '123456', 'clien4@gmail.com', '12345679', 0, '2021-10-16', 0),
(8, 'Client2', 'client2', '123123', '123123@gmail.com', '21321312', 1, '2021-10-17', 1),
(12, 'Oanh Hồ', 'oanhho113', '123456', 'ao@gmail.com.vn', '12345679', 0, '2021-10-17', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`idComment`);

--
-- Chỉ mục cho bảng `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`idInvoice`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`idProduct`);

--
-- Chỉ mục cho bảng `productcategory`
--
ALTER TABLE `productcategory`
  ADD PRIMARY KEY (`idCategory`);

--
-- Chỉ mục cho bảng `producttype`
--
ALTER TABLE `producttype`
  ADD PRIMARY KEY (`idType`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `comments`
--
ALTER TABLE `comments`
  MODIFY `idComment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `invoice`
--
ALTER TABLE `invoice`
  MODIFY `idInvoice` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `idProduct` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `productcategory`
--
ALTER TABLE `productcategory`
  MODIFY `idCategory` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `producttype`
--
ALTER TABLE `producttype`
  MODIFY `idType` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
