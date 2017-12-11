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
 * Data Helper
 * @package Easygento_InstanceReminder
 */
class Easygento_InstanceReminder_Helper_Data extends Mage_Core_Helper_Abstract
{

    const XML_PATH_EASYGENTO_INSTANCEREMINDER_INSTANCE_REMINDER_ENABLED = 'easygento_instancereminder/instance_reminder/enabled';
    const XML_PATH_EASYGENTO_INSTANCEREMINDER_INSTANCE_REMINDER_INSTANCE = 'easygento_instancereminder/instance_reminder/instance';
    const XML_PATH_EASYGENTO_INSTANCEREMINDER_INSTANCE_REMINDER_DEV = 'easygento_instancereminder/instance_reminder/dev';
    const XML_PATH_EASYGENTO_INSTANCEREMINDER_INSTANCE_REMINDER_PREPROD = 'easygento_instancereminder/instance_reminder/preprod';
    const XML_PATH_EASYGENTO_INSTANCEREMINDER_INSTANCE_REMINDER_PRODUCTION = 'easygento_instancereminder/instance_reminder/production';
// Easygento Tag NEW_CONST

// Easygento Tag NEW_VAR

    /**
     * @return boolean
     */
    public function isEnabled()
    {
        return Mage::getStoreConfig(self::XML_PATH_EASYGENTO_INSTANCEREMINDER_INSTANCE_REMINDER_ENABLED);
    }

    /**
     * @return int
     */
    public function getInstance()
    {
        return Mage::getStoreConfig(self::XML_PATH_EASYGENTO_INSTANCEREMINDER_INSTANCE_REMINDER_INSTANCE);
    }

    /**
     * @return mixed
     */
    public function getColorByInstance()
    {
        $instance = $this->getInstance();
        switch ($instance) {
            case 'develop':
                return '#' . Mage::getStoreConfig(self::XML_PATH_EASYGENTO_INSTANCEREMINDER_INSTANCE_REMINDER_DEV);
            case 'preprod':
                return '#' . Mage::getStoreConfig(self::XML_PATH_EASYGENTO_INSTANCEREMINDER_INSTANCE_REMINDER_PREPROD);
            case 'production':
                return '#' . Mage::getStoreConfig(self::XML_PATH_EASYGENTO_INSTANCEREMINDER_INSTANCE_REMINDER_PRODUCTION);
        }

    }
// Easygento Tag NEW_METHOD

}