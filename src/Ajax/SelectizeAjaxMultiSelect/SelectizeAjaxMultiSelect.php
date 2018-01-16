<?php

namespace Rhubarb\Leaf\Selectize\Ajax\SelectizeAjaxMultiSelect;

use Rhubarb\Leaf\Selectize\Ajax\SelectizeAjaxDropDown\SelectizeAjaxDropDown;

class SelectizeAjaxMultiSelect extends SelectizeAjaxDropDown
{
    protected function supportsMultipleSelection()
    {
        return true;
    }

    protected function onModelCreated()
    {
        parent::onModelCreated();

        $this->model->addHtmlAttribute("multiple", "multiple");
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
