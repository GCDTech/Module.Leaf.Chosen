<?php

namespace Rhubarb\Leaf\Selectize\Ajax\SelectizeAjaxDropDown;

use Rhubarb\Crown\Events\Event;
use Rhubarb\Leaf\Selectize\SelectizeDropdown\SelectizeDropdown;

class SelectizeAjaxDropDown extends SelectizeDropdown
{
    /** @var SelectizeAjaxDropDownModel $model */
    protected $model;

    /** @var Event $searchedEvent */
    public $searchedEvent;

    public function __construct($name = null)
    {
        $this->searchedEvent = new Event();

        parent::__construct($name, null);
    }

    protected function getViewClass()
    {
        return SelectizeAjaxDropDownView::class;
    }

    protected function createModel()
    {
        return new SelectizeAjaxDropDownModel();
    }

    protected function onModelCreated()
    {
        parent::onModelCreated();

        $this->model->searchedEvent->attachHandler(function($searchQuery) {
            return $this->searchedEvent->raise($searchQuery);
        });
    }
}
