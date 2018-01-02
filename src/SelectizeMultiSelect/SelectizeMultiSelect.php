<?php

namespace Rhubarb\Leaf\Selectize\SelectizeMultiSelect;

use Rhubarb\Leaf\Controls\Common\SelectionControls\MultiSelect\MultiSelect;

class SelectizeMultiSelect extends MultiSelect
{
    protected function getViewClass()
    {
        return SelectizeMultiSelectView::class;
    }
}
