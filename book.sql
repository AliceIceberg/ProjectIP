--
-- Database: `book`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `tour_id` int(11) NOT NULL,
  `surname` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `firstname` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `lastname` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `comment` text COLLATE utf8_bin,
  `date_from` datetime DEFAULT NULL,
  `date_to` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `tour_id`, `surname`, `firstname`, `lastname`, `email`, `comment`, `date_from`, `date_to`) VALUES
(1, 0, 'qwd', 'qwdas', 'zxc', NULL, NULL, '2017-05-09 00:00:00', '2017-05-09 00:00:00'),
(2, 0, '', '', '', NULL, NULL, '2017-05-09 00:00:00', '2017-05-09 00:00:00'),
(3, 0, '', '', '', NULL, NULL, '2017-05-09 00:00:00', '2017-05-09 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tour`
--

CREATE TABLE `tour` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_bin NOT NULL,
  `name` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `description` text COLLATE utf8_bin,
  `image` text COLLATE utf8_bin,
  `cost_per_day` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `tour`
--

INSERT INTO `tour` (`id`, `title`, `name`, `description`, `image`, `cost_per_day`) VALUES
(4, 'Title', 'Name', 'asdzcx', 'upload/Namelimpet_city___steammancer_s_folly_part_one_by_ramah_palmer-d5yr5q8.jpg', 0),
(5, 'Title', 'Name', 'asdzcx', 'upload/Namelimpet_city___steammancer_s_folly_part_one_by_ramah_palmer-d5yr5q8.jpg', 25);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tour_id` (`tour_id`);

--
-- Indexes for table `tour`
--
ALTER TABLE `tour`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tour`
--
ALTER TABLE `tour`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
