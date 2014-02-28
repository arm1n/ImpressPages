<?php
/**
 * @package ImpressPages

 *
 */
namespace Ip\Internal\InlineManagement;


class Event
{
    public static function ipInit()
    {

        if (ipIsManagementState()) {
            if (ipConfig()->isDebugMode()) {
                ipAddJs('Ip/Internal/InlineManagement/assets/src/inlineManagement.js');
                ipAddJs('Ip/Internal/InlineManagement/assets/src/inlineManagementControls.js');
                ipAddJs('Ip/Internal/InlineManagement/assets/src/inlineManagementImage.js');
                ipAddJs('Ip/Internal/InlineManagement/assets/src/inlineManagementLogo.js');
                ipAddJs('Ip/Internal/InlineManagement/assets/src/inlineManagementText.js');
                ipAddJs('Ip/Internal/InlineManagement/assets/src/jquery.fontselector.js');
            } else {
                ipAddJs('Ip/Internal/InlineManagement/assets/inlineManagement.min.js');
            }

            ipAddJsVariable('ipModInlineManagementControls', ipView('view/management/controls.php')->render());

            ipAddJs('Ip/Internal/Core/assets/admin/plupload/plupload.full.js');
            ipAddJs('Ip/Internal/Core/assets/admin/plupload/plupload.browserplus.js');
            ipAddJs('Ip/Internal/Core/assets/admin/plupload/plupload.gears.js');

            ipAddJs('Ip/Internal/Upload/assets/jquery.ip.uploadImage.js');
            ipAddJs('Ip/Internal/Upload/assets/jquery.ip.uploadFile.js');

            ipAddCss('Ip/Internal/Core/assets/js/jquery-colorpicker/colorpicker.css');
            ipAddJs('Ip/Internal/Core/assets/js/jquery-colorpicker/colorpicker.js');
        }
    }
}

