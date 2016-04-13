<?php

Namespace ImagicalDevs\Cosmetic;
use pocketmine\plugin\PluginBase;
use pocketmine\network\protocol\UseItemPacket;
Use pocketmine\math\Vector3;
use pocketmine\event\server\DataPacketReceiveEvent;
use pocketmine\event\player\PlayerItemHeldEvent;

Class Main extends PluginBase{
public function onPacketReceived(DataPacketReceiveEvent $event){
            $pk = $event->getPacket();
            $player = $event->getPlayer();
            if($pk instanceof UseItemPacket and $pk->face === 0xff) {
             $block = $player->getLevel()->getBlock($player->floor()->subtract(0, 1));
            $item = $player->getInventory()->getItemInHand();
            $pos = new Vector3($player->getX(), $player->getY(), $player->getZ());
            $particle = new DustParticle(new Vector3($pos), 5, 0, 0);  
            $level = $player->getLevel();
if($item->getId() == 341){
     $level->addParticle($particle, $pos);
   }
  }
 }
	public function onPlayerItemHeldEvent(PlayerItemHeldEvent $e){
		$i = $e->getItem();
		$p = $e->getPlayer();
		if($i instanceof Item){
			switch ($i->getId()){
				case 341:
     $p->sendPopup("§eParticle§dBomb");
   }
  }
 }
}
