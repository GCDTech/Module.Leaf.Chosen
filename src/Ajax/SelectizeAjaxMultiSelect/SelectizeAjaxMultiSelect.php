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
    }

    public function getValue()
    {
        $value = $this->model->value;
        if (!is_array($value)) {
            $value = [$value];
        }

        return $value;
    }
}
