<?php

namespace Rhubarb\Leaf\Selectize\SelectizeMultiSelect;

use Rhubarb\Leaf\Controls\Common\SelectionControls\MultiSelect\MultiSelect;

class SelectizeMultiSelect extends MultiSelect
{
    protected function getViewClass()
    {
        return SelectizeMultiSelectView::class;
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
