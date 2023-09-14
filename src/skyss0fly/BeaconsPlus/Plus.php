<?php

namespace skyss0fly\BeaconsPlus;

use pocketmine\blocks\Beacon;
use pocketmine\plugin\PluginBase;


class Main extends PluginBase{

  public function getBeacons(){
$this->file_get_contents("Beacons.yml");
    $this->loadBeacons();
    
  }

  public function construct() {
    $commands = 'bp';
    $subcommands = 'ui', 'manager';
    $permissions = 'BeaconsPlus.ui', 'BeaconsPlus.manager';

    $this->getPluginManager()->registerCommands($commands);
    $this->getPluginManager()->registerSubcommands($subcommands);
    $this->getPluginManager()->registerPermissions($permissions);
    
}
