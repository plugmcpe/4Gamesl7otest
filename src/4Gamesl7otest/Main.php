<?php
namespace 4Gamel7otest
use pocketmine\plugin\PluginBase;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
class Main extends PluginBase{

public function onEnable(){
 $this->getServer()->getLogger()->info("plugin has been enable");
 $this->getLogger()->info("plugin by GroupPluginer");
  }
  public function onDisable(){
   $this->getServer()->getLogger()->info("plugin has been disable");
   }
  }
