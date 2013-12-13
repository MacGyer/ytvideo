-- ********************************************************
-- *                                                      *
-- * IMPORTANT NOTE                                       *
-- *                                                      *
-- * Do not import this file manually but use the Contao  *
-- * install tool to create and maintain database tables! *
-- *                                                      *
-- ********************************************************


-- --------------------------------------------------------


-- 
-- Table `tl_ytvideo`
-- 

CREATE TABLE `tl_ytvideo` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `tstamp` int(10) unsigned NOT NULL default '0',
  `title` varchar(255) NOT NULL default '',
  `description` text NULL,
  `videoId` varchar(20) NOT NULL default '0',
  `width` int(10) NOT NULL default '480',
  `height` int(10) NOT NULL default '360',
  `autohide` tinyint(1) unsigned NOT NULL default '2',
  `autoplay` tinyint(1) unsigned NOT NULL default '0',
  `color` varchar(5) NOT NULL default 'red',
  `controls` tinyint(1) unsigned NOT NULL default '1',
  `reloop` tinyint(1) unsigned NOT NULL default '0',
  `modestbranding` tinyint(1) unsigned NOT NULL default '0',
  `rel` tinyint(1) unsigned NOT NULL default '1',
  `showinfo` tinyint(1) unsigned NOT NULL default '1',
  `theme` varchar(5) NOT NULL default 'dark',
  `cssClass` varchar(255) NOT NULL default '',
  `published` char(1) NOT NULL default '',
  `start` varchar(10) NOT NULL default '',
  `stop` varchar(10) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Table `tl_content`
-- 

CREATE TABLE `tl_content` (
  `ytvideo` int(10) unsigned NOT NULL default '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Table `tl_module`
-- 

CREATE TABLE `tl_module` (
  `ytvideo` int(10) unsigned NOT NULL default '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;