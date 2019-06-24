-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2019 at 03:07 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `veganstart`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `comment` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `username`, `comment`, `timestamp`) VALUES
(1, 7, 'edward344', 'My first comment on this website...', '2019-06-23 19:46:01'),
(2, 9, 'edward344', 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2019-06-23 19:59:08'),
(3, 7, 'jasmine', 'The name is very misleading. I know this from many years back as a chalumeaux. Similar also to another instrument marketed today as a xaphoon.', '2019-06-23 20:16:33'),
(4, 7, 'Sue', 'Several factors apply to varying strength dependent on the individual and circumstances. Part of it is of course perceptual. The numbers may not be swinging as much as they seem. Also someone who\'s in a relationship is perceived as more desirable on an unconscious level. It can also change perceived risk and reward factors for others. One example is of some single men wearing a wedding ring to improve their odds in a casual situation.', '2019-06-23 20:23:36'),
(5, 1, 'edward344', 'This is my first post on this website...', '2019-06-23 20:26:08'),
(6, 9, 'Peter', 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ', '2019-06-23 20:46:43'),
(7, 1, 'Lillian', 'It’s better to get into a hobby and join a club or group related to that. You will have something in common to talk about, especially in the beginning.', '2019-06-24 00:11:57'),
(8, 9, 'Dylan', 'Meetup groups are generally good places to meet people but there are generally more options in major urban areas but on there you can find something for everyone. I have also found that libraries tend to be good places to meet people. Support groups are another good option. Hope this helps. If your ever bored/lonely or just want to talk your welcome to message me. I’m always down to meet new people. All the best! Archie.', '2019-06-24 00:14:49'),
(9, 5, 'Dylan', 'Performing on Thursday at 2:30 PM and 4:45 PM, for anyone that is interested.', '2019-06-24 00:19:05'),
(10, 5, 'Ella', 'It\'s a good idea to have your instrument revoiced from time to time to ensure optimum playing quality. Barry at the EMS in Saltaire does any work for me that I need.', '2019-06-24 00:20:21'),
(11, 10, 'Ella', 'She is hauntingly beautiful. The off kilter vibes her music and videos have only made me love her so much. When the party’s over is good.', '2019-06-24 00:23:58'),
(12, 10, 'Alan', 'She looks like my ex who smoked waaay too much weed & looked a zombie 24/7', '2019-06-24 00:24:52');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `title` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `about` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `username`, `title`, `image`, `about`, `timestamp`) VALUES
(1, 'edward344', 'VeganStart Newsletter: Early March', '80839457faff0b8cdd1a62c7e368603d.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Pharetra pharetra massa massa ultricies mi quis hendrerit dolor magna. Urna et pharetra pharetra massa massa ultricies. Id faucibus nisl tincidunt eget nullam non. Ut tristique et egestas quis ipsum suspendisse ultrices. Sit amet facilisis magna etiam tempor orci eu lobortis elementum. Sed risus pretium quam vulputate dignissim suspendisse in est. Nulla at volutpat diam ut venenatis tellus. Ut eu sem integer vitae. Sed odio morbi quis commodo odio. Non blandit massa enim nec.', '2019-06-21 19:49:16'),
(2, 'Sue', 'Smokey Maple Beet Bacon', '2fc7d61e8f844d047709de4968e2f66a.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. In arcu cursus euismod quis viverra. Convallis convallis tellus id interdum. Faucibus nisl tincidunt eget nullam. Sed sed risus pretium quam. Tellus orci ac auctor augue mauris augue. Lorem donec massa sapien faucibus. Ultrices vitae auctor eu augue ut lectus arcu. Viverra vitae congue eu consequat. Nec nam aliquam sem et tortor consequat id porta nibh. Nulla at volutpat diam ut venenatis tellus.', '2019-06-21 23:47:19'),
(3, 'Dylan', 'Our First Month Went By So Fast!', '9fed9aaf973d25d5b900d1abbdccf7fa.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Venenatis urna cursus eget nunc scelerisque. Ipsum consequat nisl vel pretium lectus. Tellus at urna condimentum mattis. Aliquet nibh praesent tristique magna sit amet purus gravida. Semper eget duis at tellus at urna condimentum mattis. Nibh mauris cursus mattis molestie a iaculis. Velit dignissim sodales ut eu. Nec ultrices dui sapien eget mi proin. In ornare quam viverra orci sagittis eu volutpat. Interdum velit euismod in pellentesque.', '2019-06-21 23:52:34'),
(4, 'Ella', 'Quick Fauxtella Spread (aka Vegan Nutella)', '1630ef96f75addabffc00e4858f5ee32.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Aenean et tortor at risus. Volutpat sed cras ornare arcu dui vivamus. Viverra nam libero justo laoreet sit amet cursus. Curabitur vitae nunc sed velit dignissim sodales ut eu. Eu augue ut lectus arcu bibendum at varius vel. At elementum eu facilisis sed. Et netus et malesuada fames ac turpis egestas. Congue eu consequat ac felis donec et. Risus at ultrices mi tempus imperdiet nulla.', '2019-06-22 17:55:51'),
(5, 'Peter', 'Sugar Snap Pea and Carrot Soba Noodles', '298156cfed82d6a871a71e5952fce679.jpeg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut tristique et egestas quis ipsum. Eu consequat ac felis donec et. Mi ipsum faucibus vitae aliquet nec. Diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Adipiscing diam donec adipiscing tristique risus nec. Amet venenatis urna cursus eget nunc. Aliquam sem fringilla ut morbi. Arcu odio ut sem nulla pharetra diam. Tortor vitae purus faucibus ornare suspendisse sed. Justo eget magna fermentum iaculis eu non. Tristique magna sit amet purus gravida quis blandit.', '2019-06-22 17:57:58'),
(6, 'Lisa', 'Vegetable Paella', '42c1a563d1f3f39772607aa1c1794fa9.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Tincidunt lobortis feugiat vivamus at augue. Viverra tellus in hac habitasse platea dictumst vestibulum rhoncus est. Nulla facilisi etiam dignissim diam quis enim lobortis scelerisque. Mauris vitae ultricies leo integer malesuada. Libero nunc consequat interdum varius sit amet mattis. Mauris augue neque gravida in. Donec adipiscing tristique risus nec feugiat in fermentum posuere urna. Lectus quam id leo in vitae. Quis commodo odio aenean sed adipiscing diam donec adipiscing tristique. Ut tellus elementum sagittis vitae et. Mattis ullamcorper velit sed ullamcorper morbi. Molestie nunc non blandit massa enim. Id diam vel quam elementum pulvinar. Fermentum iaculis eu non diam phasellus.', '2019-06-22 18:09:17'),
(7, 'Alan', 'Spicy Thai Peanut Sauce over Roasted Sweet Potatoes and Rice', 'f01fd87516d39da140d1610a698eb913.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Suspendisse in est ante in nibh mauris cursus. Ut tristique et egestas quis ipsum suspendisse. Malesuada bibendum arcu vitae elementum curabitur vitae nunc sed. Sit amet cursus sit amet dictum sit amet justo. Non sodales neque sodales ut etiam. Sit amet risus nullam eget felis eget. Ultrices eros in cursus turpis massa tincidunt. Netus et malesuada fames ac turpis. In nibh mauris cursus mattis molestie a iaculis at erat. Adipiscing elit ut aliquam purus sit amet luctus. Id interdum velit laoreet id. Facilisis mauris sit amet massa vitae tortor. Id faucibus nisl tincidunt eget nullam. Eleifend mi in nulla posuere sollicitudin. Imperdiet proin fermentum leo vel orci porta non pulvinar neque. Lectus sit amet est placerat in egestas erat imperdiet sed. Ornare arcu dui vivamus arcu felis. Diam quam nulla porttitor massa id neque aliquam vestibulum morbi.', '2019-06-22 18:12:07'),
(8, 'Lillian', 'Kale, Black Bean and Avocado Burrito Bowl.', '531942730f60bb3a2755808176157d52.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Tellus in metus vulputate eu. Vitae et leo duis ut diam quam. Vitae congue mauris rhoncus aenean vel elit scelerisque. Facilisis sed odio morbi quis commodo. Nunc id cursus metus aliquam eleifend mi in nulla. Eros donec ac odio tempor orci. Integer malesuada nunc vel risus commodo viverra maecenas accumsan. Amet est placerat in egestas erat imperdiet sed. Vitae elementum curabitur vitae nunc. Semper risus in hendrerit gravida rutrum quisque non tellus. Sit amet venenatis urna cursus eget nunc scelerisque. Nisi est sit amet facilisis magna. Lacinia at quis risus sed vulputate odio ut enim. Enim tortor at auctor urna. Consectetur a erat nam at lectus urna. Tempus urna et pharetra pharetra massa. Lectus sit amet est placerat in.', '2019-06-22 18:14:11'),
(9, 'jasmine', 'Amazing Vegan Mac and Cheese', '41e526da692d6af3eaa0387f8d1216c1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2019-06-22 20:05:44'),
(10, 'Ella', 'Garlic Crackers - Vegan', '2f61c462cad84413d441041ff35cc7b3.jpg', 'Lorem ipsum vegan sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2019-06-24 00:23:07');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `image` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `country` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `about` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `username`, `image`, `email`, `name`, `gender`, `country`, `city`, `about`) VALUES
(1, 'edward344', 'a6fff003c948b09de5b4c8ac8daf0ad0.jpg', 'grandoeduardo64@gmail.com', 'Eduardo Alejandro Grando', 'male', 'Argentina', 'Corrientes', 'Hello everyone, my name is Eduardo but people usually call me Edu. I’m from Argentina, and I live in a small city called Corrientes. My hobbies are playing the clarinet, playing the keyboard and spending a lot of time on social media. I was born on the 6th of January in 1988 in Corrientes, Argentina. Since I was a little kid I have loved watching Hollywood movies and TV shows. My mother tongue is Spanish but I started learning English when I was twenty years old, now I can enjoy watching movies and TV shows in English. I would love to learn more languages like French and Japanese in the future. I have a mild form of Autism called Asperger’s syndrome and because of that I struggle so much making friends. '),
(2, 'Sue', '39ad0f84fefaa4ec4533e03b6a9ee82d.jpg', 'sue.lambert@gmail.com', 'Sue Lambert', 'female', 'United States', 'San Diego', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(3, 'Ella', 'c1d95b922896f148564fb7780e0f5e1b.jpg', 'ella.bell@gmail.com', 'Ella Bell', 'female', 'United Kingdom', 'London', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Tincidunt vitae semper quis lectus. Diam phasellus vestibulum lorem sed. Cras semper auctor neque vitae tempus quam pellentesque nec. Semper risus in hendrerit gravida rutrum quisque non tellus. At in tellus integer feugiat scelerisque varius morbi. In dictum non consectetur a. Id velit ut tortor pretium. Malesuada fames ac turpis egestas integer eget aliquet. Amet mattis vulputate enim nulla aliquet porttitor lacus luctus accumsan. Ultricies mi eget mauris pharetra et ultrices neque. Condimentum lacinia quis vel eros. Orci dapibus ultrices in iaculis nunc sed augue lacus viverra. Mi in nulla posuere sollicitudin aliquam ultrices sagittis orci a. Eu tincidunt tortor aliquam nulla.'),
(4, 'Peter', 'd3a5b1a171c79c24fa78a2fb0fe5e271.png', 'peter.james@gmail.com', 'Peter James', 'male', 'United Arab Emirates', 'Ar-Rams', 'The table below shows a list of every city in the UAE with a population of at least 10,000, listed in descending order. Population figures are updated to the latest officially released numbers and the capitals are shown in bold. Please note these are the population numbers of the cities, and not the emirates, often with the same name.'),
(5, 'Lisa', '4cb87e64fe410730fd185f9db6979117.jpg', 'lisa.langdon@gmail.com', 'Lisa Langdon', 'female', 'Belgium', 'Andenne', 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(6, 'Alan', '709c7cd1afa4ec98840a63c08621703c.png', 'alan.ferguson@gmail.com', 'Alan Ferguson', 'male', 'Indonesia', 'Surabaya', 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.'),
(7, 'Lillian', '43d4c1b659cd3a10574e2b22e96bfd2d.jpg', 'lillian.butler@hotmail.com', 'Lillian Butler', 'female', 'Peru', 'Lima', 'Congue mauris rhoncus aenean vel. Ac ut consequat semper viverra nam libero justo. Proin sed libero enim sed. Lorem ipsum dolor sit amet consectetur adipiscing elit ut aliquam. Sed viverra ipsum nunc aliquet bibendum enim facilisis. '),
(8, 'jasmine', 'afd9ce411b3f91f401dd1b9be5bd5caa.jpg', 'jasmine@gmail.com', 'Jasmine Lipska', 'female', 'Australia', 'Melbourne', 'Jasmine Lipska is a passionate lifestyle YouTuber, Travel Vlogger, Author, Creator, and Host of The Blissful Soul Podcast, here to empower self-love, conscious living and wellbeing through her creative spirit and focus on making a positive impact in the world. She is also the  founder of ‘The Blissful Soul‘ ETSY Shop, and openly shares her life on her growing  YouTube channel of over 240,000 members, featuring healthy lifestyle tips, law of attraction, self-development and bringing light to modern spirituality. As a multi-linguist, Jasmine also shares her love for learning languages, and all of her travel adventures across the world to inspire wholehearted living.'),
(9, 'Dylan', 'b64d3a0608cf0652fae87fc06143cb83.jpeg', 'dylan.murray@gmail.com', 'Dylan Murray', 'male', 'Vietnam', 'Haiphong', 'Natoque penatibus et magnis dis. Mi in nulla posuere sollicitudin aliquam ultrices sagittis orci a. Urna molestie at elementum eu facilisis sed odio morbi. Amet cursus sit amet dictum sit amet justo.'),
(10, 'onision', '9e68cd92088a45e5bed83a0a2cc0a6f9.jpg', 'onision@gmail.com', 'Gregory James Daniel', 'male', 'United States', 'Washington', 'better known online as Onision, is an American YouTuber and controversial internet personality, being described as \"the most controversial YouTuber,\" and \"YouTube\'s most troubled star\". He is most recognizable in mainstream media as the creator of the viral video, \"Banana Song (I\'m A Banana),\" ');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`) VALUES
(1, 'Sue', 'jbs2kg', 'sue.lambert@gmail.com'),
(2, 'Ella', 'yqf4t7', 'ella.bell@gmail.com'),
(3, 'Peter', '3rbms8', 'peter.james@gmail.com'),
(4, 'edward344', 'capitan', 'grandoeduardo64@gmail.com'),
(5, 'Gavin', 'a7whcd', 'gavin.baker@gmail.com'),
(6, 'Lisa', 'd4t7zk', 'lisa.langdon@gmail.com'),
(7, 'Alan', '8z4q9s', 'alan.ferguson@gmail.com'),
(8, 'Lillian', '296ktm', 'lillian.butler@gmail.com'),
(9, 'jasmine', 'lipska', 'jasmine@gmail.com'),
(10, 'Dylan', 'b3fe2d', 'dylan.murray@gmail.com'),
(11, 'onision', 'greg', 'onision@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
