<?php

namespace Syams255;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerItemHeldEvent;

class ItemID extends PluginBase implements Listener {

        public $slogan = "Â§fÂ§l[§e☞ITEM ID☜§f]";
        
	public function onEnable()
	{
		  $this->getLogger()->info("Â§eItemsID by Syams255[S255][S225]");
                  $this->getServer()->getPluginManager()->registerEvents($this ,$this);
        }
        
        public function ItemHeld(PlayerItemHeldEvent $event)
        {
            $pl = $event->getPlayer();
            if($pl->isOp())
            {
            $pl->sendTip($this->slogan . " " . $event->getItem()->getId() . "Â§b:Â§f" . $event->getItem()->getDamage());
            }
        }

}
