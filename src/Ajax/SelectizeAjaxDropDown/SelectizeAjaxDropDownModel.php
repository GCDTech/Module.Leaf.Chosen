<?php

namespace Rhubarb\Leaf\Selectize\Ajax\SelectizeAjaxDropDown;

use Rhubarb\Crown\Events\Event;
use Rhubarb\Leaf\Controls\Common\SelectionControls\SelectionControlModel;

class SelectizeAjaxDropDownModel extends SelectionControlModel
{
    public $searchedEvent;

    public function __construct()
    {
        parent::__construct();

        $this->searchedEvent = new Event();
    }
}
