<?php

namespace Rhubarb\Leaf\Selectize\SelectizeMultiSelect;

use Rhubarb\Leaf\Controls\Common\SelectionControls\MultiSelect\MultiSelectDropDown;

class SelectizeMultiSelect extends MultiSelectDropDown
{
    protected function getViewClass()
    {
        return SelectizeMultiSelectView::class;
    }

    protected function onModelCreated()
    {
        parent::onModelCreated();

        $this->model->supportsMultipleSelection = true;
    }

    public function getValue()
    {
        $value = $this->model->value;
        if (!is_array($value)) {
            if ($this->model->value) {
                $value = [$value];
            } else {
                $value = [];
            }
        }

        return $value;
    }
}
