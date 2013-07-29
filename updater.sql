-- phpMyAdmin SQL Dump
-- version 2.8.2.4
-- http://www.phpmyadmin.net
-- 
-- Host: localhost:3306
-- Erstellungszeit: 09. Januar 2011 um 12:31
-- Server Version: 5.0.51
-- PHP-Version: 5.2.6
-- 
-- Datenbank: `mp_app`
-- 

-- --------------------------------------------------------

-- 
-- Tabellenstruktur für Tabelle `reportex`
-- 

CREATE TABLE IF NOT EXISTS `reportex` (
  `id` int(11) NOT NULL auto_increment,
  `version` varchar(300) default NULL,
  `build` varchar(300) default NULL,
  `serialhash` varchar(300) default NULL,
  `os` int(11) NOT NULL default '-1',
  `osname` varchar(1000) default NULL,
  `osarch` varchar(250) default NULL,
  `osversion` varchar(1000) default NULL,
  `vmvendor` varchar(1000) default NULL,
  `vmversion` varchar(1000) default NULL,
  `username` varchar(1000) NOT NULL,
  `userdir` text NOT NULL,
  `ip` varchar(100) NOT NULL,
  `hostaddress` varchar(1000) NOT NULL,
  `useragent` varchar(1000) NOT NULL,
  `referred` varchar(1000) NOT NULL,
  `environment` text,
  `databaselog` text,
  `log` text,
  `pluginlog` text,
  `created` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ;

-- 
-- Daten für Tabelle `reportex`
-- 


-- --------------------------------------------------------

-- 
-- Tabellenstruktur für Tabelle `reportex_bp`
-- 

CREATE TABLE IF NOT EXISTS `reportex_bp` (
  `id` int(11) NOT NULL auto_increment,
  `version` varchar(300) default NULL,
  `build` varchar(300) default NULL,
  `serialhash` varchar(300) default NULL,
  `os` int(11) NOT NULL default '-1',
  `osname` varchar(1000) default NULL,
  `osarch` varchar(250) default NULL,
  `osversion` varchar(1000) default NULL,
  `vmvendor` varchar(1000) default NULL,
  `vmversion` varchar(1000) default NULL,
  `username` varchar(1000) NOT NULL,
  `userdir` text NOT NULL,
  `ip` varchar(100) NOT NULL,
  `hostaddress` varchar(1000) NOT NULL,
  `useragent` varchar(1000) NOT NULL,
  `referred` varchar(1000) NOT NULL,
  `environment` text,
  `databaselog` text,
  `log` text,
  `pluginlog` text,
  `created` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
);

-- 
-- Daten für Tabelle `reportex_bp`
-- 


-- --------------------------------------------------------

-- 
-- Tabellenstruktur für Tabelle `reportex_web`
-- 

CREATE TABLE IF NOT EXISTS `reportex_web` (
  `id` int(11) NOT NULL auto_increment,
  `version` varchar(300) default NULL,
  `build` varchar(300) default NULL,
  `serialhash` varchar(300) default NULL,
  `os` int(11) NOT NULL default '-1',
  `osname` varchar(1000) default NULL,
  `osarch` varchar(250) default NULL,
  `osversion` varchar(1000) default NULL,
  `vmvendor` varchar(1000) default NULL,
  `vmversion` varchar(1000) default NULL,
  `username` varchar(1000) NOT NULL,
  `userdir` text NOT NULL,
  `ip` varchar(100) NOT NULL,
  `hostaddress` varchar(1000) NOT NULL,
  `useragent` varchar(1000) NOT NULL,
  `referred` varchar(1000) NOT NULL,
  `environment` text,
  `databaselog` text,
  `log` text,
  `pluginlog` text,
  `created` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ;

-- 
-- Daten für Tabelle `reportex_web`
-- 


-- --------------------------------------------------------

-- 
-- Tabellenstruktur für Tabelle `updatecheck`
-- 

CREATE TABLE IF NOT EXISTS `updatecheck` (
  `id` int(11) NOT NULL auto_increment,
  `version` varchar(300) default NULL,
  `build` varchar(300) default NULL,
  `serialhash` varchar(300) default NULL,
  `os` int(11) NOT NULL default '-1',
  `osname` varchar(1000) default NULL,
  `osarch` varchar(250) default NULL,
  `osversion` varchar(1000) default NULL,
  `vmvendor` varchar(1000) default NULL,
  `vmversion` varchar(1000) default NULL,
  `username` varchar(1000) NOT NULL,
  `userdir` text NOT NULL,
  `ip` varchar(100) NOT NULL,
  `hostaddress` varchar(1000) NOT NULL,
  `useragent` varchar(1000) NOT NULL,
  `referred` varchar(1000) NOT NULL,
  `created` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
);

-- 
-- Daten für Tabelle `updatecheck`
-- 


-- --------------------------------------------------------

-- 
-- Tabellenstruktur für Tabelle `updatecheck_bp`
-- 

CREATE TABLE IF NOT EXISTS `updatecheck_bp` (
  `id` int(11) NOT NULL auto_increment,
  `version` varchar(300) default NULL,
  `build` varchar(300) default NULL,
  `serialhash` varchar(300) default NULL,
  `os` int(11) NOT NULL default '-1',
  `osname` varchar(1000) default NULL,
  `osarch` varchar(250) default NULL,
  `osversion` varchar(1000) default NULL,
  `vmvendor` varchar(1000) default NULL,
  `vmversion` varchar(1000) default NULL,
  `username` varchar(1000) NOT NULL,
  `userdir` text NOT NULL,
  `ip` varchar(100) NOT NULL,
  `hostaddress` varchar(1000) NOT NULL,
  `useragent` varchar(1000) NOT NULL,
  `referred` varchar(1000) NOT NULL,
  `created` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
)  ;


-- --------------------------------------------------------

-- 
-- Tabellenstruktur für Tabelle `updatecheck_web`
-- 

CREATE TABLE IF NOT EXISTS `updatecheck_web` (
  `id` int(11) NOT NULL auto_increment,
  `version` varchar(300) default NULL,
  `build` varchar(300) default NULL,
  `serialhash` varchar(300) default NULL,
  `os` int(11) NOT NULL default '-1',
  `osname` varchar(1000) default NULL,
  `osarch` varchar(250) default NULL,
  `osversion` varchar(1000) default NULL,
  `vmvendor` varchar(1000) default NULL,
  `vmversion` varchar(1000) default NULL,
  `username` varchar(1000) NOT NULL,
  `userdir` text NOT NULL,
  `ip` varchar(100) NOT NULL,
  `hostaddress` varchar(1000) NOT NULL,
  `useragent` varchar(1000) NOT NULL,
  `referred` varchar(1000) NOT NULL,
  `created` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
);

-- 
-- Daten für Tabelle `updatecheck_web`
-- 


-- --------------------------------------------------------

-- 
-- Tabellenstruktur für Tabelle `uploadlog`
-- 

CREATE TABLE IF NOT EXISTS `uploadlog` (
  `id` int(11) NOT NULL auto_increment,
  `version` varchar(300) default NULL,
  `build` varchar(300) default NULL,
  `serialhash` varchar(300) default NULL,
  `os` int(11) NOT NULL default '-1',
  `osname` varchar(1000) default NULL,
  `osarch` varchar(250) default NULL,
  `osversion` varchar(1000) default NULL,
  `vmvendor` varchar(1000) default NULL,
  `vmversion` varchar(1000) default NULL,
  `username` varchar(1000) NOT NULL,
  `userdir` text NOT NULL,
  `ip` varchar(100) NOT NULL,
  `hostaddress` varchar(1000) NOT NULL,
  `useragent` varchar(1000) NOT NULL,
  `referred` varchar(1000) NOT NULL,
  `environment` text,
  `databaselog` text,
  `log` text,
  `pluginlog` text,
  `created` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
);

-- --------------------------------------------------------

-- 
-- Tabellenstruktur für Tabelle `uploadlog_bp`
-- 

CREATE TABLE IF NOT EXISTS `uploadlog_bp` (
  `id` int(11) NOT NULL auto_increment,
  `version` varchar(300) default NULL,
  `build` varchar(300) default NULL,
  `serialhash` varchar(300) default NULL,
  `os` int(11) NOT NULL default '-1',
  `osname` varchar(1000) default NULL,
  `osarch` varchar(250) default NULL,
  `osversion` varchar(1000) default NULL,
  `vmvendor` varchar(1000) default NULL,
  `vmversion` varchar(1000) default NULL,
  `username` varchar(1000) NOT NULL,
  `userdir` text NOT NULL,
  `ip` varchar(100) NOT NULL,
  `hostaddress` varchar(1000) NOT NULL,
  `useragent` varchar(1000) NOT NULL,
  `referred` varchar(1000) NOT NULL,
  `environment` text,
  `databaselog` text,
  `log` text,
  `pluginlog` text,
  `created` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
);

-- 
-- Daten für Tabelle `uploadlog_bp`
-- 


-- --------------------------------------------------------

-- 
-- Tabellenstruktur für Tabelle `uploadlog_web`
-- 

CREATE TABLE IF NOT EXISTS `uploadlog_web` (
  `id` int(11) NOT NULL auto_increment,
  `version` varchar(300) default NULL,
  `build` varchar(300) default NULL,
  `serialhash` varchar(300) default NULL,
  `os` int(11) NOT NULL default '-1',
  `osname` varchar(1000) default NULL,
  `osarch` varchar(250) default NULL,
  `osversion` varchar(1000) default NULL,
  `vmvendor` varchar(1000) default NULL,
  `vmversion` varchar(1000) default NULL,
  `username` varchar(1000) NOT NULL,
  `userdir` text NOT NULL,
  `ip` varchar(100) NOT NULL,
  `hostaddress` varchar(1000) NOT NULL,
  `useragent` varchar(1000) NOT NULL,
  `referred` varchar(1000) NOT NULL,
  `environment` text,
  `databaselog` text,
  `log` text,
  `pluginlog` text,
  `created` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
);
