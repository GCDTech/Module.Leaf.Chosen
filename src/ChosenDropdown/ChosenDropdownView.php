<?php

namespace Rhubarb\Leaf\Chosen\ChosenDropdown;

use Rhubarb\Leaf\Controls\Common\SelectionControls\DropDown\DropDownView;

class ChosenDropdownView extends DropDownView
{
    public function getDeploymentPackage()
    {
        $package = parent::getDeploymentPackage();
        $package->resourcesToDeploy[] = VENDOR_DIR .'/components/jquery/jquery.min.js';
        $package->resourcesToDeploy[] = __DIR__ .'/../chosen.jquery.min.js';
        $package->resourcesToDeploy[] = __DIR__ .'/../chosen.min.css';
        $package->resourcesToDeploy[] = __DIR__ . '/ChosenDropDownViewBridge.js';
        return $package;
    }

    protected function getViewBridgeName()
    {
        return 'ChosenDropDownViewBridge';
    }
}
