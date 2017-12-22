<?php

namespace Rhubarb\Leaf\Chosen\Ajax\ChosenAjaxDropDown;

use Rhubarb\Crown\Events\Event;
use Rhubarb\Leaf\Controls\Common\SelectionControls\SelectionControlModel;

class ChosenAjaxDropDownModel extends SelectionControlModel
{
    public $searchedEvent;

    public function __construct()
    {
        parent::__construct();

        $this->searchedEvent = new Event();
    }
}
