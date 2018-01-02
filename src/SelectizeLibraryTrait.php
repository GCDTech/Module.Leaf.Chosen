<?php
namespace Rhubarb\Leaf\Selectize;

trait SelectizeLibraryTrait
{
    public function getDeploymentPackage()
    {
        $package = parent::getDeploymentPackage();
        $package->resourcesToDeploy[] = VENDOR_DIR .'/components/jquery/jquery.min.js';
        $package->resourcesToDeploy[] = __DIR__ . '/Resources/selectize.min.js';
        $package->resourcesToDeploy[] = __DIR__ . '/Resources/selectize.css';
        $package->resourcesToDeploy[] = __DIR__ . '/SelectizeLibraryViewBridge.js';

        if ($childViewBridge = $this->getViewBridgePath()) {
            $package->resourcesToDeploy[] = $childViewBridge;
        }

        return $package;
    }

    protected function getViewBridgeName()
    {
        return 'SelectizeLibraryViewBridge';
    }

    public function getViewBridgePath()
    {
        return null;
    }
}
