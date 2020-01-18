-- Set MySQL timezone to UTC
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET GLOBAL time_zone = "+00:00";
-- Table structure for table `chatters`
CREATE TABLE IF NOT EXISTS `chatters` (
  `name` text NOT NULL,
  `seen` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
-- Table structure for table `messages`
CREATE TABLE IF NOT EXISTS `messages` (
  `name` text NOT NULL,
  `msg` text NOT NULL,
  `posted` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;