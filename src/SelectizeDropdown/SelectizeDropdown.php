<?php

namespace Rhubarb\Leaf\Selectize\SelectizeDropdown;

use Rhubarb\Leaf\Controls\Common\SelectionControls\DropDown\DropDown;

class SelectizeDropdown extends DropDown
{
    protected function getViewClass()
    {
        return SelectizeDropdownView::class;
    }
}
