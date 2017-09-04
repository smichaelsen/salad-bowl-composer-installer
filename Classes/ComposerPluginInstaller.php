<?php
namespace Smichaelsen\SaladBowlComposerInstaller;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;

class ComposerPluginInstaller implements PluginInterface
{
    public function activate(Composer $composer, IOInterface $io)
    {
    }
}