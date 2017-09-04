<?php
namespace Smichaelsen\SaladBowlComposerInstaller;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;

class PluginInstaller implements PluginInterface
{
    public function activate(Composer $composer, IOInterface $io)
    {
    }
}