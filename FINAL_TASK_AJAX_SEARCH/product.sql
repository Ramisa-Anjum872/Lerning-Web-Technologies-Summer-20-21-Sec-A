

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";



CREATE TABLE `products` (
  `id` int(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `buyingPrice` int(100) NOT NULL,
  `sellingPrice` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



INSERT INTO `products` (`id`, `name`, `buyingPrice`, `sellingPrice`) VALUES
(14, 'iphone', 850, 1050),
(10, 'Oneplus', 600, 678),
(39, 'Huawei', 700, 750);


ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `products`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

