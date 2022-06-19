-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le :  lun. 14 fév. 2022 à 20:56
-- Version du serveur :  5.7.26
-- Version de PHP :  7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `tunflix`
--

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `message` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `message`) VALUES
(3, 'SeDomicilier', 'billing@sedomicilier.fr', 'cvbn');

-- --------------------------------------------------------

--
-- Structure de la table `movies`
--

CREATE TABLE `movies` (
  `id_film` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `url` varchar(200) NOT NULL,
  `description` longtext NOT NULL,
  `year` int(4) NOT NULL,
  `image` varchar(200) NOT NULL,
  `runtime` int(3) NOT NULL,
  `langue` varchar(15) NOT NULL,
  `quality` varchar(10) NOT NULL,
  `size` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `movies`
--

INSERT INTO `movies` (`id_film`, `title`, `url`, `description`, `year`, `image`, `runtime`, `langue`, `quality`, `size`) VALUES
(1, 'Eight Taels of Gold', 'https://yts.mx/torrent/download/985F5D3C30790E988D9279A29E398E63FA706204', 'Chinese ex-pat returns to his home town in China after a long absence in New York.', 1989, 'https://yts.mx/assets/images/movies/eight_taels_of_gold_1989/large-cover.jpg\"', 100, 'CN', '1080p', '1.76 GB'),
(2, 'Warriors Two', 'https://yts.mx/torrent/download/3A1F2281999DA25FFA9DF8D36F8C2730D09BD707', 'Beloved for its combination of thrilling combat choreography and hilarious physical comedy, the film tells the story of a humble cashier who discovers a plot to kill his small town mayor.', 1978, 'https://yts.mx/assets/images/movies/warriors_two_1978/medium-cover.jpg', 95, 'CR', '1080p', '1.59 GB'),
(3, 'SlingShot', 'https://yts.mx/torrent/download/4B208EC61BEBDFC3BA7DD6C7E2E37D42E1768DF4', 'SlingShot focuses on noted Segway inventor Dean Kamen and his work to solve the world\'s water crisis. An eccentric genius with a provocative world view, Kamen is an inspiration for future scientists. His inventions help people in need and ease suffering. SlingShot is about an indomitable man who just might have enough passion and innovative thinking to create a solution for a crisis affecting billions. Kamen lives in a house with secret passages, a closet full of denim and a helicopter garage.', 2014, 'https://yts.mx/assets/images/movies/slingshot_2014/large-cover.jpg', 88, 'EN', '1080p', '1.63 GB'),
(4, 'State of Control', 'https://yts.mx/torrent/download/5E63C00D3D9C24BFC886D814952BE2FCF9195410', 'Two American filmmakers travel undercover in China and Tibet during one of the most precarious times in the country\'s recent history. Their journey begins in hot-bed areas of Tibetan activism in India and Nepal, before continuing into the most closed off regions of Tibet, during the full scale media blackout that began in 2008 and continues to this day. Their goal is to meet with leading Tibetan activists who are risking their lives to peacefully protest against oppression by the Chinese government\'s police state in a region kept \\\"in the dark\\\". Traveling undercover, a dangerous cat-and-mouse game unfolds as secret police maintain 24 hour surveillance of the filmmakers.', 2016, 'https://yts.mx/assets/images/movies/state_of_control_2016/large-cover.jpg', 90, 'EN', '1080p', '1.52 GB'),
(5, 'System Error', 'https://yts.mx/torrent/download/4CA7C4B91909EDB49DFA9482979D65C4269BC834', 'Melting glaciers, gullied seas, the financial markets are about to collapse. Spectacular images of how growth continues to be blinding. Outside you can hardly see anything because of the smog and the smoke screen.', 2018, 'https://yts.mx/assets/images/movies/system_error_2018/large-cover.jpg', 95, 'DE', '1080p', '1.61 GB'),
(6, 'Frank Serpico', 'https://yts.mx/torrent/download/ED5136D0336C2B72B9326AEB0BAD020E64531CB6', '       In play at John jay college of criminal justice re:Thomas Beckett serpico played a tempter to the soon to be fallen becket for his unwavering religious convictions may have propelled serpico to face certain danger and even death which Beckett did not escape.\r\n', 2017, 'https://yts.mx/assets/images/movies/frank_serpico_2017/large-cover.jpg', 98, 'En', '1080p', '1.81 GB'),
(7, 'Beethoven\'s 4th', 'https://yts.mx/torrent/download/903912D951D4A70311DBD0C707BBEB49FE105713', 'The family is pleasantly surprised and puzzled when Beethoven suddenly becomes obedient. Turns out it\'s a prince and the pauper scenario, with the real Beethoven now living with a pompous rich family.', 2001, 'https://yts.mx/assets/images/movies/beethovens_4th_2001/large-cover.jpg', 93, 'EN', '1080p', '1.56 GB'),
(8, 'I Still Believe', 'https://yts.mx/torrent/download/48E5E47709D648003D85A951D84BF4F12AA5F085', 'The true-life story of Christian music star Jeremy Camp and his journey of love and loss that looks to prove there is always hope.\r\n\r\n', 2020, 'https://img.yts.mx/assets/images/movies/i_still_believe_2020/medium-cover.jpg', 116, 'EN', '1080p', ' 2.15 GB'),
(9, 'Outside the Law', 'https://yts.mx/torrent/download/24063DFE74C76BDD401C666168F32BA6245686D2', 'After losing their family home in Algeria, three brothers and their mother are scattered across the globe. Messaoud joins the French army fighting in Indochina; Abdelkader becomes a leader of the Algerian independence movement in France and Saïd moves to Paris to make his fortune in the shady clubs and boxing halls of Pigalle. Gradually, their interconnecting destinies reunite them in the French capital, where freedom is a battle to be fought and won.', 2010, 'https://yts.mx/assets/images/movies/outside_the_law_2010/large-cover.jpg', 138, 'FR', '1080p', '2.56 GB'),
(10, 'American Underdog', 'https://yts.mx/torrent/download/C9B0156247F177DEB465A2738EECEA176A9FE2B5', 'American Underdog tells the inspirational true story of Kurt Warner (Zachary Levi), who went from a stockboy at a grocery store to a two-time NFL MVP, Super Bowl champion, and Hall of Fame quarterback. The film centers on Warner\'s unique story and years of challenges and setbacks that could have derailed his aspirations to become an NFL player - but just when his dreams seemed all but out of reach, it is only with the support of his wife, Brenda (Anna Paquin) and the encouragement of his family, coaches, and teammates that Warner perseveres and finds the strength to show the world the champion that he already is.', 2021, 'https://img.yts.mx/assets/images/movies/american_underdog_2021/medium-cover.jpg', 112, 'EN', '1080p', ' 2.07 GB'),
(11, 'The Fallout\r\n', 'https://yts.mx/torrent/download/82E9101C2D6D7B098586B0D5069D3F0E71B840EE', '\'The Fallout\' is a film about the unseen faces of a tragedy, those who can\'t turn their pain into effecting positive change in the world because they are too afraid to leave their bedrooms. Three teenagers form a unique and dynamic bond as they navigate the never linear, often confusing journey to heal in a world that feels forever changed.', 2021, 'https://img.yts.mx/assets/images/movies/the_fallout_2021/medium-cover.jpg', 96, 'EN', '1080p', ' 1.77 GB'),
(12, 'Eternals', 'https://yts.mx/torrent/download/F921C01B1D8BC2D5B1C13B1F03275C932BA1157E', 'Following the events of Avengers: Endgame (2019), an unexpected tragedy forces the Eternals, ancient aliens who have been living on Earth in secret for thousands of years, out of the shadows to reunite against mankind\'s most ancient enemy, the Deviants.', 2021, 'https://img.yts.mx/assets/images/movies/eternals_2021/medium-cover.jpg', 144, 'EN', '1080p', ' 2.66 GB'),
(13, 'Le loup et le lion', 'https://yts.mx/torrent/download/F043625CFC08EE25F1BB214000E4CAC3D382AC45', 'A wolf pup and a lost lion cub are rescued by a girl in the heart of the Canadian wilderness. Their friendship will change their lives forever.', 2021, 'https://img.yts.mx/assets/images/movies/le_loup_et_le_lion_2021/medium-cover.jpg', 99, 'EN', '1080p', ' 1.84 GB'),
(14, 'The King\'s Man', 'https://yts.mx/torrent/download/A4EF30F712716A0F0D444F4E88160CA2BF8AA1DD', 'In the early years of the 20th century, the Kingsman agency is formed to stand against a cabal plotting a war to wipe out millions.', 2021, 'https://img.yts.mx/assets/images/movies/the_kings_man_2021/medium-cover.jpg', 130, 'EN', '1080p', ' 2.41 GB'),
(15, 'American Insurrection\r\n', 'https://yts.mx/torrent/download/AFCC4B145F45A0A1AF9CDD91AC79E5007DF1F65A', 'Set in a dystopian America where all people who aren\'t straight, white, Christian and cis gender are kept track of by the government with bar codes.', 2021, 'https://img.yts.mx/assets/images/movies/american_insurrection_2021/medium-cover.jpg', 115, 'EN', '1080p', ' 1.92 GB'),
(16, 'The Requin\r\n', 'https://yts.mx/torrent/download/F3F651C1A4CF38300A45EE8656345FA297298775', 'A couple on a romantic getaway find themselves stranded at sea when a tropical storm sweeps away their villa. In order to survive, they are forced to fight the elements, while sharks circle below.', 2022, 'https://img.yts.mx/assets/images/movies/the_requin_2022/medium-cover.jpg', 89, 'EN', '1080p', ' 1.66 GB'),
(17, 'Jail', 'https://yts.mx/torrent/download/3AE35399015709F9D71F0D975745DAF23168E6F5', '', 2021, 'https://img.yts.mx/assets/images/movies/jail_2021/medium-cover.jpg', 127, 'NR', '1080p', ' 2.36 GB'),
(18, 'The 355\r\n', 'https://yts.mx/torrent/download/17388B42F1E0CD87D3DE9A0CAA9983EB6D29DF57', 'When a top-secret weapon falls into mercenary hands, wild card CIA agent Mason \"Mace\" Brown will need to join forces with rival badass German agent Marie, former MI6 ally and cutting-edge computer specialist Khadijah, and skilled Colombian psychologist Graciela on a lethal, breakneck mission to retrieve it, while also staying one-step ahead of a mysterious woman, Lin Mi Sheng, who is tracking their every move.', 2022, 'https://img.yts.mx/assets/images/movies/the_355_2022/medium-cover.jpg', 122, 'EN', '1080p', ' 2.26 GB'),
(19, 'CODA', 'https://yts.mx/torrent/download/19445779A615BC46D9683B5B603EFFFE45D16282', 'As a CODA (Child of Deaf Adults) Ruby is the only hearing person in her deaf family. When the family\'s fishing business is threatened, Ruby finds herself torn between pursuing her love of music by wanting to go to Berklee College of Music and her fear of abandoning her parents.', 2021, 'https://img.yts.mx/assets/images/movies/coda_2021/medium-cover.jpg', 112, 'EN', '1080p', '2.07 GB'),
(20, 'Adverse', 'https://yts.mx/torrent/download/0D3FDB6473306E0EB092B775680F35BFD3D48EA0', 'Ethan sees a shrink as part of his parole. He\'s legal guardian and shares his apartment with his 16 y.o. sister, Mia, who keeps bad company. She does drugs and drops out of school. Ethan works as a rideshare driver at night. When Ethan unjustly gets bad reviews from passengers, he\'s out of a job. Mia and her boyfriend owe money to dangerous criminals. Ethan helps with her half of the debt, but she\'s not out of trouble. ', 2020, 'https://img.yts.mx/assets/images/movies/adverse_2020/medium-cover.jpg', 94, 'EN', '1080p', '1.74 GB');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fullname` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `fullname`, `username`, `email`, `password`) VALUES
(1, 'bilel ben youssef', 'bilelby', 'bilel.by99@gmail.com', '4eae35f1b35977a00ebd8086c259d4c9'),
(2, 'Karim', 'kourdi', 'karim@gmail.com', '4eae35f1b35977a00ebd8086c259d4c9');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id_film`),
  ADD KEY `id_film` (`id_film`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `movies`
--
ALTER TABLE `movies`
  MODIFY `id_film` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;