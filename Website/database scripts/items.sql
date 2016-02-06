-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2015 at 06:51 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `local_fv`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE IF NOT EXISTS `items` (
`item_id` int(11) NOT NULL,
  `item_name` varchar(50) NOT NULL,
  `item_type` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`item_id`, `item_name`, `item_type`) VALUES
(001, 'Aburana', 'vegetable');
(002, 'Acorn squash', 'fruit');
(003, 'Ahipa', 'fruit');
(004, 'Alfalfa sprouts', 'fruit');
(005, 'Amaranth', 'fruit');
(006, 'American groundnuts', 'fruit');
(007, 'Anise', 'fruit');
(008, 'Aonori', 'fruit');
(009, 'Arame', 'fruit');
(010, 'Arracacha', 'fruit');
(011, 'Arrowhead', 'fruit');
(012, 'Arrowroot', 'fruit');
(013, 'Artichoke', 'fruit');
(014, 'Arugula', 'fruit');
(015, 'Asparagus', 'fruit');
(016, 'Azuki beans', 'fruit');
(017, 'Bamboo shoots', 'fruit');
(018, 'Banana squash', 'fruit');
(019, 'Basil', 'fruit');
(020, 'Beans', 'fruit');
(021, 'Bean sprouts', 'fruit');
(022, 'Beet', 'fruit');
(023, 'Belgian endive', 'fruit');
(024, 'Bell pepper', 'fruit');
(025, 'Bitter leaf', 'fruit');
(026, 'Bitter melon', 'fruit');
(027, 'Black beans', 'fruit');
(028, 'Black cumin', 'fruit');
(029, 'Black-eyed peas', 'fruit');
(030, 'Bok choy', 'fruit');
(031, 'Borage', 'fruit');
(032, 'Borlotti beans', 'fruit');
(033, 'Bottle gourd', 'fruit');
(034, 'Breadfruit', 'fruit');
(035, 'Broadleaf arrowhead', 'fruit');
(036, 'Broccoli', 'fruit');
(037, 'Broccolini', 'fruit');
(038, 'Brussels sprout', 'fruit');
(039, 'Bulls blood', 'fruit');
(040, 'Burdock', 'fruit');
(041, 'Butter beans', 'fruit');
(042, 'Buttercup squash', 'fruit');
(043, 'Butterhead lettuce', 'fruit');
(044, 'Butternut pumpkin', 'fruit');
(045, 'Cabbage', 'fruit');
(046, 'Cabbage sprouts', 'fruit');
(047, 'Cactus leaves', 'fruit');
(048, 'Caigua', 'fruit');
(049, 'Camas', 'fruit');
(050, 'Cape gooseberry', 'fruit');
(051, 'Caraway', 'fruit');
(052, 'Cardoon', 'fruit');
(053, 'Carola', 'fruit');
(054, 'Carrot', 'fruit');
(055, 'Cassava', 'fruit');
(056, 'Catsear', 'fruit');
(057, 'Cauliflower', 'fruit');
(058, 'Cayenne pepper', 'fruit');
(059, 'Celeriac', 'fruit');
(060, 'Celery', 'fruit');
(061, 'Celtuce', 'fruit');
(062, 'Ceylon spinach', 'fruit');
(063, 'Chaya', 'fruit');
(064, 'Chayote', 'fruit');
(065, 'Cherry tomatoes', 'fruit');
(066, 'Cucumber', 'fruit');
(067, 'Chickweed', 'fruit');
(068, 'Chicory', 'fruit');
(069, 'Chile peppers', 'fruit');
(070, 'Chinese chives', 'fruit');
(071, 'Chinese mallow', 'fruit');
(072, 'Chinese snow peas', 'fruit');
(073, 'Chives', 'fruit');
(074, 'Choy sum', 'fruit');
(075, 'Chrysanthemum leaves', 'fruit');
(076, 'Cilantro', 'fruit');
(077, 'Collard greens', 'fruit');
(078, 'Coral lettuce', 'fruit');
(079, 'Corn', 'fruit');
(080, 'Corn salad', 'fruit');
(081, 'Dabberlocks', 'fruit');
(082, 'Dandelion', 'fruit');
(083, 'Delicata squash', 'fruit');
(084, 'Dill/Lao coriander', 'fruit');
(085, 'Dinosaur kale', 'fruit');
(086, 'Dolichos beans', 'fruit');
(087, 'Drumsticks', 'fruit');
(088, 'Dulse', 'fruit');
(089, 'Daikon', 'fruit');
(090, 'Earthnut pea', 'fruit');
(091, 'Edamame', 'fruit');
(092, 'Eggplant', 'fruit');
(093, 'Elephant foot yam', 'fruit');
(094, 'Elephant garlic', 'fruit');
(095, 'Endive', 'fruit');
(096, 'English peas', 'fruit');
(097, 'Ensete', 'fruit');
(098, 'Epazote', 'fruit');
(099, 'Escarole', 'fruit');
(100, 'Fat hen', 'fruit');
(101, 'Fava beans', 'fruit');
(102, 'Fennel', 'fruit');
(103, 'Fiddlehead fern', 'fruit');
(104, 'Florence fennel', 'fruit');
(105, 'Flowering cabbage', 'fruit');
(106, 'Fluted pumpkin', 'fruit');
(107, 'French beans', 'fruit');
(108, 'Garbanzo beans', 'fruit');
(109, 'Garden cress', 'fruit');
(110, 'Garden rocket', 'fruit');
(111, 'Garlic', 'fruit');
(112, 'Gem squash', 'fruit');
(113, 'Gherkin', 'fruit');
(114, 'Ginger', 'fruit');
(115, 'Globe eggplant', 'fruit');
(116, 'Gobo', 'fruit');
(117, 'Golden nugget squash', 'fruit');
(118, 'Guar', 'fruit');
(119, 'Golden Samphire', 'fruit');
(120, 'Good King Henry', 'fruit');
(121, 'Gourd', 'fruit');
(122, 'Grape tomato', 'fruit');
(123, 'Greater plantain', 'fruit');
(124, 'Green cabbage', 'fruit');
(125, 'Green cauliflower', 'fruit');
(126, 'Green onion', 'fruit');
(127, 'Green pepper', 'fruit');
(128, 'Groundnuts', 'fruit');
(129, 'Habanero chili', 'fruit');
(130, 'Hakurei turnip', 'fruit');
(131, 'Hamburg rooted parsley', 'fruit');
(132, 'Haricot beans', 'fruit');
(133, 'Hijiki', 'fruit');
(134, 'Horse gram', 'fruit');
(135, 'Horseradish', 'fruit');
(136, 'Hothouse cucumber', 'fruit');
(137, 'Hubbard squash', 'fruit');
(138, 'Hyacinth beans', 'fruit');
(139, 'Ice plant', 'fruit');
(140, 'Indian peas', 'fruit');
(141, 'Irish moss', 'fruit');
(142, 'Italian sweet pepper', 'fruit');
(143, 'Italian red onion', 'fruit');
(144, 'Jalapeño', 'fruit');
(145, 'Japanese bunching onion', 'fruit');
(146, 'Japanese eggplant', 'fruit');
(147, 'Japanese pumpkin', 'fruit');
(148, 'Japanese turnips', 'fruit');
(149, 'Jerusalem artichoke', 'fruit');
(150, 'Jícama', 'fruit');
(151, 'Kabu', 'fruit');
(152, 'Kai-lan', 'fruit');
(153, 'Kale', 'fruit');
(154, 'Kelps', 'fruit');
(155, 'Kidney beans', 'fruit');
(156, 'Kohlrabi', 'fruit');
(157, 'Komatsuna', 'fruit');
(158, 'Kombu', 'fruit');
(159, 'Kuka', 'fruit');
(160, 'Kurrat', 'fruit');
(161, 'Lagos bologi', 'fruit');
(162, 'Land cress', 'fruit');
(163, 'Laver', 'fruit');
(164, 'Leafy greens', 'fruit');
(165, 'Lebanese cucumber', 'fruit');
(166, 'Leeks', 'fruit');
(167, 'Lemon', 'fruit');
(168, 'Lentils', 'fruit');
(169, 'Lemon grass', 'fruit');
(170, 'Lettuce', 'fruit');
(171, 'Lima beans', 'fruit');
(172, 'Lime', 'fruit');
(173, 'Lizards tail', 'fruit');
(174, 'Lotus root', 'fruit');
(175, 'Luffa', 'fruit');
(176, 'Mache', 'fruit');
(177, 'Malabar gourd', 'fruit');
(178, 'Mange tout', 'fruit');
(179, 'Marjoram', 'fruit');
(180, 'Marrow', 'fruit');
(181, 'Melons', 'fruit');
(182, 'Miners lettuce', 'fruit');
(183, 'Minikin', 'fruit');
(184, 'Mitsuba', 'fruit');
(185, 'Myoga', 'fruit');
(186, 'Mizuna', 'fruit');
(187, 'Morel', 'fruit');
(188, 'Moth beans', 'fruit');
(189, 'Mountain pepper', 'fruit');
(190, 'Mozuku', 'fruit');
(191, 'Mung beans', 'fruit');
(192, 'Mulukhiyah', 'fruit');
(193, 'Mushroom', 'fruit');
(194, 'Mustard plant', 'fruit');
(195, 'Napa cabbage', 'fruit');
(196, 'Nasturtium', 'fruit');
(197, 'Nasu', 'fruit');
(198, 'Navy beans', 'fruit');
(199, 'Negi', 'fruit');
(200, 'Nettles', 'fruit');
(201, 'New Zealand spinach', 'fruit');
(202, 'Nopales', 'fruit');
(203, 'Nori', 'fruit');
(204, 'Oakleaf lettuce', 'fruit');
(205, 'Ogonori', 'fruit');
(206, 'Okra', 'fruit');
(207, 'Onions', 'fruit');
(208, 'Olives', 'fruit');
(209, 'Orache', 'fruit');
(210, 'Ostrich fern', 'fruit');
(211, 'Oyster plant', 'fruit');
(212, 'Pak choi', 'fruit');
(213, 'Palm heart', 'fruit');
(214, 'Paracress', 'fruit');
(215, 'Parsley', 'fruit');
(216, 'Parsnips', 'fruit');
(217, 'Pattypan squash', 'fruit');
(218, 'Peanut', 'fruit');
(219, 'Pea sprouts', 'fruit');
(220, 'Pigeon pea', 'fruit');
(221, 'Pignut', 'fruit');
(222, 'Pinto beans', 'fruit');
(223, 'Plectranthus', 'fruit');
(224, 'Poblano', 'fruit');
(225, 'Pohole', 'fruit');
(226, 'Pointed gourd', 'fruit');
(227, 'Poke', 'fruit');
(228, 'Pokeweed', 'fruit');
(229, 'Potatoes', 'fruit');
(230, 'Prairie turnip', 'fruit');
(231, 'Prussian asparagus', 'fruit');
(232, 'Pumpkins', 'fruit');
(233, 'Purslane', 'fruit');
(234, 'Quince', 'fruit');
(235, 'Radicchio', 'fruit');
(236, 'Radish', 'fruit');
(237, 'Rainbow chard', 'fruit');
(238, 'Rapeseed', 'fruit');
(239, 'Rapini', 'fruit');
(240, 'Red bell peppers', 'fruit');
(241, 'Red cabbage', 'fruit');
(242, 'Red kidney beans', 'fruit');
(243, 'Renkon', 'fruit');
(244, 'Rhubarb', 'fruit');
(245, 'Ridge cucumber', 'fruit');
(246, 'Ridge gourd', 'fruit');
(247, 'Rocket', 'fruit');
(248, 'Rockmelon', 'fruit');
(249, 'Romaine lettuce', 'fruit');
(250, 'Romanesco broccoli', 'fruit');
(251, 'Romano beans', 'fruit');
(252, 'Rosemary', 'fruit');
(253, 'Runner beans', 'fruit');
(254, 'Rutabaga', 'fruit');
(255, 'Salad turnip', 'fruit');
(256, 'Salsify', 'fruit');
(257, 'Samphire', 'fruit');
(258, 'Savoy cabbage', 'fruit');
(259, 'Satoimo', 'fruit');
(260, 'Satsumaimo​', 'fruit');
(261, 'Scallions', 'fruit');
(262, 'Scorzonera', 'fruit');
(263, 'Sculpit', 'fruit');
(264, 'Sea beet', 'fruit');
(265, 'Sea grape', 'fruit');
(266, 'Sea kale', 'fruit');
(267, 'Sea lettuce', 'fruit');
(268, 'Shallots', 'fruit');
(269, 'Shiso', 'fruit');
(270, 'Sierra leone bologi', 'fruit');
(271, 'Silverbeet', 'fruit');
(272, 'Skirret', 'fruit');
(273, 'Sloke', 'fruit');
(274, 'Snake beans', 'fruit');
(275, 'Snake gourd', 'fruit');
(276, 'Snake squash', 'fruit');
(277, 'Snow peas', 'fruit');
(278, 'Soko', 'fruit');
(279, 'Sorrel', 'fruit');
(280, 'Soybeans', 'fruit');
(281, 'Spaghetti squash', 'fruit');
(282, 'Spinach', 'fruit');
(283, 'Spring greens', 'fruit');
(284, 'Squash', 'fruit');
(285, 'Squash blossoms', 'fruit');
(286, 'Striped marrow', 'fruit');
(287, 'Sugar snap peas', 'fruit');
(288, 'Sweet corn', 'fruit');
(289, 'Tabasco pepper', 'fruit');
(290, 'Taro', 'fruit');
(291, 'Tarwi', 'fruit');
(292, 'Tatsoi', 'fruit');
(293, 'Tepary beans', 'fruit');
(294, 'Thyme', 'fruit');
(295, 'Tigernut', 'fruit');
(296, 'Tinda', 'fruit');
(297, 'Tomatillo', 'fruit');
(298, 'Tomato', 'fruit');
(299, 'T-plant', 'fruit');
(300, 'Turnips', 'fruit');
(301, 'Tuscan kale', 'fruit');
(302, 'Ulluco', 'fruit');
(303, 'Urad bean', 'fruit');
(304, 'Velvet bean', 'fruit');
(305, 'Vidalia onion', 'fruit');
(306, 'Wakame', 'fruit');
(307, 'Wasabi', 'fruit');
(308, 'Water chestnut', 'fruit');
(309, 'Watercress', 'fruit');
(310, 'Water spinach', 'fruit');
(311, 'Welsh onion', 'fruit');
(312, 'West Indian gherkin', 'fruit');
(313, 'West Indian pumpkin', 'fruit');
(314, 'White eggplant', 'fruit');
(315, 'White salad onion', 'fruit');
(316, 'Wild leek', 'fruit');
(317, 'Winged beans', 'fruit');
(318, 'Winter melon', 'fruit');
(319, 'Winter purslane', 'fruit');
(320, 'Winter squash', 'fruit');
(321, 'Xemenia', 'fruit');
(322, 'Xigua', 'fruit');
(323, 'Yacón', 'fruit');
(324, 'Yam', 'fruit');
(325, 'Yamaimo', 'fruit');
(326, 'Yardlong beans', 'fruit');
(327, 'Yarrow', 'fruit');
(328, 'Yau chow', 'fruit');
(329, 'Yellow squash', 'fruit');
(330, 'Yow choy', 'fruit');
(331, 'Yu choy sum', 'fruit');
(332, 'Zucchini', 'fruit');


--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
 ADD PRIMARY KEY (`item_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;