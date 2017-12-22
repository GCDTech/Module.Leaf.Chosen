<?php

namespace Rhubarb\Leaf\Chosen\Ajax\ChosenAjaxDropDown;

use Rhubarb\Crown\Events\Event;
use Rhubarb\Leaf\Chosen\ChosenDropdown\ChosenDropdown;

class ChosenAjaxDropDown extends ChosenDropdown
{
    /** @var ChosenAjaxDropDownModel $model */
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
        return ChosenAjaxDropDownView::class;
    }

    protected function createModel()
    {
        return new ChosenAjaxDropDownModel();
    }

    protected function onModelCreated()
    {
        parent::onModelCreated();

        $this->model->searchedEvent->attachHandler(function($searchQuery) {
            $this->searchedEvent->raise($searchQuery);
        });
    }
}
