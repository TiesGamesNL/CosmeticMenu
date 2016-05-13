<?php

Namespace ImagicalDevs\Cosmetic;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\network\protocol\UseItemPacket;
use pocketmine\math\Vector3;
use pocketmine\event\server\DataPacketReceiveEvent;
use pocketmine\event\player\PlayerItemHeldEvent;
use pocketmine\level\particle\RedstoneParticle;
use pocketmine\utils\Config;
use pocketmine\level\Level;
use pocketmine\level\particle\HugeExplodeParticle;
use pocketmine\level\particle\WaterParticle;
use pocketmine\level\particle\AngryVillagerParticle;
use pocketmine\entity\Arrow;
use pocketmine\nbt\tag\FloatTag;
use pocketmine\nbt\tag\CompoundTag;
use pocketmine\inventory\Inventory;
use pocketmine\nbt\tag\EnumTag;
use pocketmine\nbt\tag\DoubleTag;
use pocketmine\entity\Entity;
use pocketmine\item\Item;

Class Main extends PluginBase implements Listener{
       
     public function onEnable(){
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->getLogger()->info("§aCosmeticMenu by ImagicalDevs loaded ;D!");
        }
}
//CosmeticMenu
   if($item->getId() == 347){
      $player->getInventory()->removeItem(Item::get(ITEM::CLOCK));
      $player->getInventory()->addItem(Item::get(ITEM::SLIMEBALL));
      $player->getInventory()->addItem(Item::get(ITEM::REDSTONE));
}
//Gadgets
   if($item->getid() == 341){
       $player->getInventory()->removeItem(Item::get(ITEM::CLOCK));
      $player->getInventory()->removeItem(Item::get(ITEM::SLIMEBALL));
      $player->getInventory()->removeItem(Item::get(ITEM::REDSTONE));
      $player->getInventory()->addItem(Item::get(ITEM::FISHING_ROD));
      $player->getInventory()->addItem(Item::get(ITEM::BED))     
}
//Partical
   if($item->getid() == 331){
       $player->getInventory()->removeItem(Item::get(ITEM::CLOCK));
      $player->getInventory()->removeItem(Item::get(ITEM::SLIMEBALL));
      $player->getInventory()->removeItem(Item::get(ITEM::REDSTONE));
      $player->getInventory()->addItem(Item::get(ITEM::LAPISLAZULE));
      $player->getInventory()->addItem(Item::get(ITEM::ORANGEDYE));
      $player->getInventory()->addItem(Item::get(ITEM::ROSERED));
      $player->getInventory()->addItem(Item::get(ITEM::BONEMEAL));
      $player->getInventory()->addItem(Item::get(ITEM::BED))
}
//Back
   if($item->getId() == 355){
      $player->getInventory()->removeItem(Item::get(ITEM::BED));
      $player->getInventory()->removeItem(Item::get(ITEM::SLIMEBALL));
      $player->getInventory()->removeItem(Item::get(ITEM::REDSTONE));
      $player->getInventory()->removeItem(Item::get(ITEM::FISHING_ROD));
      $player->getInventory()->removeItem(Item::get(ITEM::LAPISLAZULE));
      $player->getInventory()->removeItem(Item::get(ITEM::ORANGEDYE));
      $player->getInventory()->removeItem(Item::get(ITEM::ROSERED));
      $player->getInventory()->removeItem(Item::get(ITEM::BONEMEAL));
      $player->getInventory()->addItem(Item::get(ITEM::CLOCK));
}
	public function onPlayerItemHeldEvent(PlayerItemHeldEvent $e){
		$i = $e->getItem();
		$p = $e->getPlayer();
     if($i->getId() == 347){
     $p->sendPopup("§l§dCosmetic§eMenu");
     }
   //Gadgets
     if($i->getId() == 341){
     $p->sendPopup("§l§6Gadgets");
     }
     if($i->getId() == 346){
     $p->sendPopup("§l§6Egg§bLauncher");
     }
     if($i->getId() == 378){
     $p->sendPopup("§l§6EnderPearl");
     }
     if($i->getId() == 258){
     $p->sendPopup("§l§BunnyHop");
     }
     if($i->getId() == 288){
     $p->sendPopup("§l§6FlyTime");
     }
     if($i->getId() == 352){
     $p->sendPopup("§l§6LightingStick");
     } 
   //Partical
     if($i->getId() == 331){
     $p->sendPopup("§l§bParticals");
     }
     if($i->getId() == 351:4){
     $p->sendPopup("§l§6Water");
     }
     if($i->getId() == 351:14){
     $p->sendPopup("§l§6Fire");
     }
     if($i->getId() == 351:1){
     $p->sendPopup("§l§6Hearts");
     }
     if($i->getId() == 351:15){
     $p->sendPopup("§l§6Smoke");
     }
     //Back
  if($i->getId() == 355){     
     $p->sendPopup("§l§7Back...");  
  } 
}
}
