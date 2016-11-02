#
# Table structure for table 'tx_references_domain_model_reference'
#
CREATE TABLE tx_references_domain_model_reference (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,

	name varchar(255) DEFAULT '' NOT NULL,
	uri varchar(255) DEFAULT '' NOT NULL,
	teaser text NOT NULL,
	description text NOT NULL,
	media int(11) unsigned NOT NULL default '0',
	county int(11) DEFAULT '0' NOT NULL,
	staff_count int(11) DEFAULT '0' NOT NULL,
	turnover int(11) DEFAULT '0' NOT NULL,
	year varchar(255) DEFAULT '' NOT NULL,
	responsive tinyint(1) unsigned DEFAULT '0' NOT NULL,
	logo int(11) unsigned NOT NULL default '0',
	multilingual tinyint(1) unsigned DEFAULT '0' NOT NULL,
	agency int(11) unsigned DEFAULT '0',
	special tinyint(4) unsigned DEFAULT '0' NOT NULL,
	finished tinyint(4) unsigned DEFAULT '0' NOT NULL,

	tstamp int(11) unsigned DEFAULT '0' NOT NULL,
	crdate int(11) unsigned DEFAULT '0' NOT NULL,
	cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
	deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
	hidden tinyint(4) unsigned DEFAULT '0' NOT NULL,

	PRIMARY KEY (uid),
	KEY parent (pid),

);

#
# Table structure for table 'tx_references_domain_model_agency'
#
CREATE TABLE tx_references_domain_model_agency (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,

	name varchar(255) DEFAULT '' NOT NULL,
	description text NOT NULL,
	uri varchar(255) DEFAULT '' NOT NULL,

	tstamp int(11) unsigned DEFAULT '0' NOT NULL,
	crdate int(11) unsigned DEFAULT '0' NOT NULL,
	cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
	deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
	hidden tinyint(4) unsigned DEFAULT '0' NOT NULL,

	PRIMARY KEY (uid),
	KEY parent (pid),

);

#
# Table structure for table 'tx_references_domain_model_reference'
#
CREATE TABLE tx_references_domain_model_reference (
	categories int(11) unsigned DEFAULT '0' NOT NULL,
);
