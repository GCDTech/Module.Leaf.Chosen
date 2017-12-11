<?php

namespace Rhubarb\Leaf\Chosen\ChosenDropdown;

use Rhubarb\Leaf\Controls\Common\SelectionControls\DropDown\DropDown;

class ChosenDropdown extends DropDown {
    protected function getViewClass()
    {
        return ChosenDropdownView::class;
    }
}
