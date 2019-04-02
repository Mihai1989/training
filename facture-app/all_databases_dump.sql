--
-- Database: `cheltuieli`
--

-- --------------------------------------------------------

--
-- Table structure for table `chitante`
--

CREATE TABLE `chitante` (
  `id` int(11) NOT NULL,
  `Produse` varchar(255) NOT NULL,
  `Pret` int(5) NOT NULL,
  `Data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chitante`
--

INSERT INTO `chitante` (`id`, `Produse`, `Pret`, `Data`) VALUES
(1, 'apa', 2, '2019-03-14 18:54:31'),
(2, 'snacks', 6, '2019-03-14 18:54:31'),
(3, 'paine', 10, '2019-03-24 19:16:05');

-- --------------------------------------------------------

--
-- Table structure for table `facturi`
--

CREATE TABLE `facturi` (
  `id` int(11) NOT NULL,
  `Nume` varchar(30) NOT NULL,
  `Pret` int(5) NOT NULL,
  `Data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `facturi`
--

INSERT INTO `facturi` (`id`, `Nume`, `Pret`, `Data`) VALUES
(1, 'Electrica12', 1002, '2019-04-02 17:32:28'),
(2, 'Gaz', 150, '2019-03-09 07:43:10'),
(7, 'Tv', 123, '2019-03-17 18:28:03'),
(8, 'begheleghe', 123, '2019-04-02 17:31:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chitante`
--
ALTER TABLE `chitante`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facturi`
--
ALTER TABLE `facturi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chitante`
--
ALTER TABLE `chitante`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `facturi`
--
ALTER TABLE `facturi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
