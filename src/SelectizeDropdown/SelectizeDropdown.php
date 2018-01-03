<?php

namespace Rhubarb\Leaf\Selectize\SelectizeDropdown;

use Rhubarb\Leaf\Controls\Common\SelectionControls\DropDown\DropDown;

class SelectizeDropdown extends DropDown
{
    protected function getViewClass()
    {
        return SelectizeDropdownView::class;
    }

    protected function onModelCreated()
    {
        parent::onModelCreated();

        $this->setPlaceholderText('Please Select');
    }

    public function setPlaceholderText($placeholderText)
    {
        $this->model->addHtmlAttribute("data-placeholder", $placeholderText);
    }
}
