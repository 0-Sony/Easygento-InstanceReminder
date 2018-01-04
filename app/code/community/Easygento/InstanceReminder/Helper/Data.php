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
    const XML_PATH_EASYGENTO_INSTANCEREMINDER_INSTANCE_REMINDER_CUSTOM_INSTANCE = 'easygento_instancereminder/instance_reminder/custom_instance';
    const XML_PATH_EASYGENTO_INSTANCEREMINDER_INSTANCE_REMINDER_DEVELOP = 'easygento_instancereminder/instance_reminder/dev';
    const XML_PATH_EASYGENTO_INSTANCEREMINDER_INSTANCE_REMINDER_PREPROD = 'easygento_instancereminder/instance_reminder/preprod';
    const XML_PATH_EASYGENTO_INSTANCEREMINDER_INSTANCE_REMINDER_PRODUCTION = 'easygento_instancereminder/instance_reminder/production';
    const XML_PATH_EASYGENTO_INSTANCEREMINDER_INSTANCE_REMINDER_CUSTOM = 'easygento_instancereminder/instance_reminder/custom';

// Easygento Tag NEW_CONST

// Easygento Tag NEW_VAR

    /**
     * @return boolean
     */
    public function isEnabled()
    {
        return Mage::getStoreConfigFlag(self::XML_PATH_EASYGENTO_INSTANCEREMINDER_INSTANCE_REMINDER_ENABLED);
    }

    /**
     * @return mixed
     */
    public function getInstance()
    {
        return Mage::getStoreConfig(self::XML_PATH_EASYGENTO_INSTANCEREMINDER_INSTANCE_REMINDER_INSTANCE);
    }

    /**
     * @return mixed
     */
    public function getInstanceName()
    {
        if (Mage::getStoreConfig(self::XML_PATH_EASYGENTO_INSTANCEREMINDER_INSTANCE_REMINDER_INSTANCE) == 'custom') {
            return Mage::getStoreConfig(self::XML_PATH_EASYGENTO_INSTANCEREMINDER_INSTANCE_REMINDER_CUSTOM_INSTANCE);
        }
        return Mage::getStoreConfig(self::XML_PATH_EASYGENTO_INSTANCEREMINDER_INSTANCE_REMINDER_INSTANCE);

    }

    /**
     * @return mixed
     */
    public function getColorByInstance()
    {
        $instance = $this->getInstance();
        return '#' . Mage::getStoreConfig(constant('self::XML_PATH_EASYGENTO_INSTANCEREMINDER_INSTANCE_REMINDER_' . strtoupper($instance)));
    }

    /**
     * @return bool
     */
    public function isAdminLoginPage()
    {
        return Mage::registry('easygento_ir') ? true : false;
    }

// Easygento Tag NEW_METHOD

}