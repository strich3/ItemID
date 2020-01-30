<?php

namespace Syams255;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerItemHeldEvent;

class ItemID extends PluginBase implements Listener {

        public $slogan = "§aItem§eID";
        
	public function onEnable()
	{
		  $this->getLogger()->info("ItemID By strich 3");
                  $this->getServer()->getPluginManager()->registerEvents($this ,$this);
        }
        
        public function ItemHeld(PlayerItemHeldEvent $event)
        {
            $pl = $event->getPlayer();
            if($pl->isOp())
            {
            $pl->sendTip($this->slogan . " " . $event->getItem()->getId() . ":" . $event->getItem()->getDamage());
            }
        }

}
