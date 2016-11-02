<?php
return array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:references/Resources/Private/Language/locallang_db.xlf:tx_references_domain_model_agency',
		'label' => 'name',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,

		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',

		),
		'searchFields' => 'name,description,uri,',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('references') . 'Resources/Public/Icons/tx_references_domain_model_agency.gif'
	),
	'interface' => array(
		'showRecordFieldList' => 'hidden, name, description, uri',
	),
	'types' => array(
		'1' => array('showitem' => 'hidden;;1, name, description, uri, '),
	),
	'palettes' => array(
		'1' => array('showitem' => ''),
	),
	'columns' => array(

		'hidden' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
			'config' => array(
				'type' => 'check',
			),
		),

		'name' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:references/Resources/Private/Language/locallang_db.xlf:tx_references_domain_model_agency.name',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'description' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:references/Resources/Private/Language/locallang_db.xlf:tx_references_domain_model_agency.description',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 15,
				'eval' => 'trim'
			)
		),
		'uri' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:references/Resources/Private/Language/locallang_db.xlf:tx_references_domain_model_agency.uri',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		
	),
);