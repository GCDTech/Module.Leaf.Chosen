<?php

namespace Rhubarb\Leaf\Chosen\ChosenAjaxMultiSelect;

use Rhubarb\Crown\Events\Event;
use Rhubarb\Leaf\Controls\Common\SelectionControls\SelectionControlModel;

class ChosenAjaxMultiSelectModel extends SelectionControlModel
{
    public $searchedEvent;

    public function __construct()
    {
        parent::__construct();

        $this->searchedEvent = new Event();
    }
}
