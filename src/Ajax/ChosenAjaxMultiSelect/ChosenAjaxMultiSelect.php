<?php

namespace Rhubarb\Leaf\Chosen\Ajax\ChosenAjaxMultiSelect;

use Rhubarb\Leaf\Chosen\Ajax\ChosenAjaxDropDown\ChosenAjaxDropDown;

class ChosenAjaxMultiSelect extends ChosenAjaxDropDown
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
}
