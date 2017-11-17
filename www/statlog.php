<?php

$config = SimpleSAML_Configuration::getInstance();
$statconfig = SimpleSAML_Configuration::getConfig('module_statistics.php');

sspmod_statistics_AccessCheck::checkAccess($statconfig);

$aggr = new sspmod_statistics_Aggregator();
$const = $aggr->getConsent();

$t = new SimpleSAML_XHTML_Template($config, 'statistics:statlog-tpl.php');
$t->data['consent'] =  $const;
$t->show();

