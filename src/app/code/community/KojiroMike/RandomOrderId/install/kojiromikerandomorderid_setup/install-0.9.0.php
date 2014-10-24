<?php
/**
 * Use a function to guarantee control of scope in an include,
 * as well as to provide type hinting.
 */
return call_user_func(function(Mage_Eav_Model_Entity_Setup $installer, Varien_Db_Adapter_Interface $conn) {
    $installer->startSetup();
    $installer->updateEntityType('sales/order', 'increment_model', 'kojiromike/random');
    $installer->endSetup();
}, $this, $conn);
