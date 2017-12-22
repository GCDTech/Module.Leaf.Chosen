<?php

namespace Rhubarb\Leaf\Chosen\Ajax\ChosenAjaxDropDown;

use Rhubarb\Leaf\Chosen\ChosenDropdown\ChosenDropdownView;

class ChosenAjaxDropDownView extends ChosenDropdownView
{
    protected function getViewBridgeName()
    {
        return 'ChosenAjaxDropDownViewBridge';
    }

    public function getViewBridgePath()
    {
        return __DIR__ . '/ChosenAjaxDropDownViewBridge.js';
    }
}
