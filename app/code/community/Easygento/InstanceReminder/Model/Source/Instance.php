<?php
/**
 * This file is part of Easygento_InstanceReminder for Magento.
 *
 * @license http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 * @author Phuong LE <sony@menincode.com> <@>
 * @category Easygento
 * @package Easygento_InstanceReminder
 * @copyright Copyright (c) 2017 Easygento (Menincode)
 */

/**
 * Source_Instance Model
 * @package Easygento_InstanceReminder
 */
class Easygento_InstanceReminder_Model_Source_Instance
{

// Easygento Tag NEW_CONST

// Easygento Tag NEW_VAR

    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
        return array(
            array('value' => 'develop', 'label'=> Mage::helper('easygento_instancereminder')->__('Develop')),
            array('value' => 'preprod', 'label'=> Mage::helper('easygento_instancereminder')->__('Preprod')),
            array('value' => 'production', 'label'=> Mage::helper('easygento_instancereminder')->__('Production')),
        );
    }

    /**
     * Get options in "key-value" format
     *
     * @return array
     */
    public function toArray()
    {
        return array(
            'develop' => Mage::helper('easygento_instancereminder')->__('Develop'),
            'preprod' => Mage::helper('easygento_instancereminder')->__('Preprod'),
            'production' => Mage::helper('easygento_instancereminder')->__('Production'),
        );
    }
// Easygento Tag NEW_METHOD

}