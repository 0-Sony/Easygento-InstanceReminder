/**
 * This file is part of Easygento_InstanceReminder for Magento.
 *
 * @license http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 * @author Phuong LE <sony@menincode.com> <Menincode>
 * @category Easygento
 * @package Easygento_InstanceReminder
 */

var instanceReminder = Class.create({
    initialize: function () {
        Event.observe(window, 'scroll', this.checkMageToolbar);
    },
    checkMageToolbar: function () {
        $$('.content-header-floating').each(function (e) {
            if (e.visible()) {
                $('easygento_ir').setStyle({'position': 'absolute'});
            } else {
                $('easygento_ir').setStyle({'position': 'fixed'});
            }
        });
    }
});
new instanceReminder();