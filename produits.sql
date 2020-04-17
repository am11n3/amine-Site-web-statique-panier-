--
-- Table structure for table `produits`
--
CREATE TABLE `clients` (
  `id` int(8) NOT NULL,
  `nom_prenom` varchar(22) NOT NULL,
  `email` double(10,2) NOT NULL,
  `telephone` `nom_prenom` varchar(22) NOT NULL,
  `password` `nom_prenom` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Table structure for table `produits`
--

CREATE TABLE `produits` (
  `id` int(8) NOT NULL,
  `name` varchar(255) NOT NULL,
  `prix` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produits`
--

INSERT INTO `produits` (`id`, `name`,`prix`) VALUES
(1,'GOHAN',77.88),
(2,'GARA',34.88),
(3,'SHANKS',99.88),
(4,'BRACELELT',67.88),
(5,'CASQUETTE',12.88),
(6,'LUFFY',11.88),
(7,'WHITE BEARD',44.88),
(8,'TOMORA',22.38);

-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);
  
 ALTER TABLE `clients`
  ADD UNIQUE(`email`);
  
-- Indexes for table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`id`);


-- AUTO_INCREMENT for table `produits`
--
ALTER TABLE `produits`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;
