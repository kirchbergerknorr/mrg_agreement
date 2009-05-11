<?php

$configData = Mage::getConfig()->getNode('default/agreement_setup')->asArray();
$dateTime = date('Y-m-d H:i:s');

$installer = $this;
$installer->startSetup();

$query = <<< EOF
INSERT INTO `checkout_agreement` (`name`, `content`, `content_height`, `checkbox_text`, `is_active`, `is_html`) VALUES
('AGB', '{{block type="cms/block" block_id="sym_agb"}}', '', 'Hiermit werden die Allgemeinen Geschäftsbedingungen und die Widerrufsbelehrung akzeptiert.', 1, 1);
EOF;
$installer->run($query);
	
$newEntityId = $installer->getConnection()->lastInsertId();
$query = <<< EOF
INSERT INTO `checkout_agreement_store` (`agreement_id`, `store_id`) VALUES ('$newEntityId', '0');
EOF;
$installer->run($query);

$query = <<< EOF
INSERT INTO `cms_page` (`title`, `root_template`, `meta_keywords`, `meta_description`, `identifier`, `content`, `creation_time`, `update_time`, `is_active`, `sort_order`, `layout_update_xml`, `custom_theme`, `custom_theme_from`, `custom_theme_to`) VALUES
('AGB', 'one_column', '', '', 'agb', '{{block type="cms/block" block_id="sym_agb"}}', '$dateTime', '$dateTime', 1, 0, '', '', NULL, NULL);
EOF;
$installer->run($query);
	
$newEntityId = $installer->getConnection()->lastInsertId();
$query = <<< EOF
INSERT INTO `cms_page_store` (`page_id`, `store_id`) VALUES ('$newEntityId', '0');
EOF;

$germanConfig = Mage::getConfig()->getNode('modules/Symmetrics_ConfigGerman');

if($germanConfig->active != 'true')
{
    $query = "INSERT INTO `cms_block` (`title`, `identifier`, `content`, `creation_time`, `update_time`, `is_active`) VALUES ('AGB', 'sym_agb', '', '$dateTime', '$dateTime', 1);";
    $installer->run($query);
    
    $newEntityId = $installer->getConnection()->lastInsertId();
    $query = "INSERT INTO `cms_block_store` (`block_id`, `store_id`) VALUES ('$newEntityId', '0');";
    $installer->run($query);
}

$installer->endSetup();