<?php

class KojiroMike_RandomOrderId_Model_Random implements Mage_Eav_Model_Entity_Increment_Interface {
    /**
     * Get a random value as the next increment id
     */
    public function getNextId()
    {
        return mt_rand();
    }
}
