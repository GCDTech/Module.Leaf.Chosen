<?php

namespace Rhubarb\Leaf\Chosen\ChosenAjaxMultiSelect;

use Rhubarb\Crown\Events\Event;
use Rhubarb\Leaf\Chosen\ChosenMultiSelect\ChosenMultiSelect;

class ChosenAjaxMultiSelect extends ChosenMultiSelect
{
    /** @var ChosenAjaxMultiSelectModel $model */
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
        return ChosenAjaxMultiSelectView::class;
    }

    protected function createModel()
    {
        return new ChosenAjaxMultiSelectModel();
    }

    protected function onModelCreated()
    {
        parent::onModelCreated();

        $this->model->searchedEvent->attachHandler(function($searchQuery) {
            $this->searchedEvent->raise($searchQuery);
        });
    }
}
