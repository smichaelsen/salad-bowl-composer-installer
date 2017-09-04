<?php

namespace Smichaelsen\SaladBowlComposerInstaller;

use Composer\Installer\LibraryInstaller;

class FrameworkPluginInstaller extends LibraryInstaller
{
    public function supports($packageType)
    {
        return $packageType === 'salad-bowl-plugin';
    }
}