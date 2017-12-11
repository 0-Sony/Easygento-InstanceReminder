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
 * Observer Model
 * @package Easygento_InstanceReminder
 */
class Easygento_InstanceReminder_Model_Observer extends Mage_Core_Model_Abstract
{

// Agence-Soon Tag NEW_CONST

// Agence-Soon Tag NEW_VAR

    public function setFlag(Varien_Event_Observer $observer)
    {
        if (!Mage::registry('easygento_ir')) {
            Mage::register('easygento_ir', true);
        }
    }

// Agence-Soon Tag NEW_METHOD

}