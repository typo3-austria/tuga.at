
#
# Table structure for table 'tx_theme_session'
#
CREATE TABLE tx_theme_session (
    uid int(11) NOT NULL auto_increment,
    pid int(11) DEFAULT '0' NOT NULL,

    reference int(11) unsigned DEFAULT '0',
    title varchar(255) DEFAULT '' NOT NULL,
    description text,
    link varchar(255) DEFAULT '' NOT NULL,
    speaker int(11) unsigned DEFAULT '0' NOT NULL,

    tstamp int(11) unsigned DEFAULT '0' NOT NULL,
    crdate int(11) unsigned DEFAULT '0' NOT NULL,
    cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
    deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
    hidden tinyint(4) unsigned DEFAULT '0' NOT NULL,
    starttime int(11) unsigned DEFAULT '0' NOT NULL,
    endtime int(11) unsigned DEFAULT '0' NOT NULL,
    sorting int(11) DEFAULT '0' NOT NULL,

    PRIMARY KEY (uid),
    KEY parent (pid),
);

CREATE TABLE tt_content (
   tx_theme_sessions int(11) unsigned DEFAULT '0' NOT NULL,
   location varchar(255) DEFAULT '' NOT NULL
);

CREATE TABLE pages (
   meetup_time int(11) unsigned DEFAULT '0' NOT NULL,
   meetup_link varchar(255) DEFAULT '' NOT NULL,
   meetup_sponsor varchar(255) DEFAULT '' NOT NULL
);
