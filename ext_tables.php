<?php
defined('TYPO3') || die();

TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_schemarecords_domain_model_type');
TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_schemarecords_domain_model_property');

TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('
    <INCLUDE_TYPOSCRIPT: source="DIR:EXT:' . Brotkrueml\SchemaRecords\Extension::KEY . '/Configuration/TSconfig/Page/" extensions="tsconfig">
');

$GLOBALS['TYPO3_CONF_VARS']['SYS']['formEngine']['nodeRegistry'][1584554889] = [
    'nodeName' => 'schemaRecordsTypeLinks',
    'priority' => 40,
    'class' => Brotkrueml\SchemaRecords\FormEngine\Elements\TypeLinks::class,
];
