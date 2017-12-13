<?php
namespace Rhubarb\Leaf\Chosen;

trait ChosenLibraryTrait
{
    public function getDeploymentPackage()
    {
        $package = parent::getDeploymentPackage();
        $package->resourcesToDeploy[] = VENDOR_DIR .'/components/jquery/jquery.min.js';
        $package->resourcesToDeploy[] = __DIR__ . '/Resources/chosen.jquery.min.js';
        $package->resourcesToDeploy[] = __DIR__ . '/Resources/chosen.min.css';
        $package->resourcesToDeploy[] = __DIR__ . '/ChosenLibraryViewBridge.js';

        if ($childViewBridge = $this->getViewBridgePath()) {
            $package->resourcesToDeploy[] = $childViewBridge;
        }

        return $package;
    }

    protected function getViewBridgeName()
    {
        return 'ChosenLibraryViewBridge';
    }

    public function getViewBridgePath()
    {
        return null;
    }
}
