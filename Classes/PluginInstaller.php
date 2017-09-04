<?php
namespace Smichaelsen\SaladBowlComposerInstaller;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;

class PluginInstaller extends PluginInterface
{
    public function activate(Composer $composer, IOInterface $io)
    {
    }
}