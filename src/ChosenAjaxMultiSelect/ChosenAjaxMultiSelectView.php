<?php

namespace Rhubarb\Leaf\Chosen\ChosenAjaxMultiSelect;

use Rhubarb\Leaf\Chosen\ChosenDropdown\ChosenDropdownView;

class ChosenAjaxMultiSelectView extends ChosenDropdownView
{
    protected function getViewBridgeName()
    {
        return 'ChosenAjaxMultiSelectViewBridge';
    }

    public function getViewBridgePath()
    {
        return __DIR__ . '/ChosenAjaxMultiSelectViewBridge.js';
    }
}
