<?php

namespace Rhubarb\Leaf\Selectize\Ajax\SelectizeAjaxDropDown;

use Rhubarb\Leaf\Selectize\SelectizeDropdown\SelectizeDropdownView;

class SelectizeAjaxDropDownView extends SelectizeDropdownView
{
    protected function getViewBridgeName()
    {
        return 'SelectizeAjaxDropDownViewBridge';
    }

    public function getViewBridgePath()
    {
        return __DIR__ . '/SelectizeAjaxDropDownViewBridge.js';
    }
}
