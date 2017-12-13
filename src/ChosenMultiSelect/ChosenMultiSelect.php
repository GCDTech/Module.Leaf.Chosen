<?php

namespace Rhubarb\Leaf\Chosen\ChosenMultiSelect;

use Rhubarb\Leaf\Controls\Common\SelectionControls\MultiSelect\MultiSelect;

class ChosenMultiSelect extends MultiSelect
{
    protected function getViewClass()
    {
        return ChosenMultiSelectView::class;
    }
}
