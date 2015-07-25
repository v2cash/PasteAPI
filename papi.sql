/*
	    ____  ___    ____  ____
	   / __ \/   |  / __ \/  _/
      / /_/ / /| | / /_/ // /  
     / ____/ ___ |/ ____// /   
	/_/   /_/  |_/_/   /___/   
	Paste API By 2cash

*/

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

CREATE TABLE IF NOT EXISTS `pastes` (
  `id` int(11) NOT NULL,
  `pasteid` text NOT NULL,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `ip` varchar(11) NOT NULL,
  `date` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `pastes`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `pastes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
