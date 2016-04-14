<?php

Namespace ImagicalDevs\Cosmetic;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\network\protocol\UseItemPacket;
Use pocketmine\math\Vector3;
use pocketmine\event\server\DataPacketReceiveEvent;
use pocketmine\event\player\PlayerItemHeldEvent;
use pocketmine\level\particle\RedstoneParticle;
use pocketmine\utils\Config;
use pocketmine\level\Level;
use pocketmine\level\particle\HugeExplodeParticle;
use pocketmine\level\particle\WaterParticle;
use pocketmine\level\particle\AngryVillagerParticle;
use pocketmine\entity\Arrow;
use pocketmine\nbt\tag\Float;
use pocketmine\nbt\tag\Compound;
use pocketmine\inventory\Inventory;
use pocketmine\nbt\tag\Enum;
use pocketmine\nbt\tag\Double;
use pocketmine\entity\Entity;
use pocketmine\item\Item;

Class Main extends PluginBase implements Listener{
       
     public function onEnable(){
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->getLogger()->info("§aCosmeticMenu by ImagicalDevs loaded ;D!");
        }
public function onPacketReceived(DataPacketReceiveEvent $event){
            $pk = $event->getPacket();
            $player = $event->getPlayer();
            if($pk instanceof UseItemPacket and $pk->face === 0xff) {
             $block = $player->getLevel()->getBlock($player->floor()->subtract(0, 1));
            $item = $player->getInventory()->getItemInHand();
            $pos = new Vector3($player->getX() + 1, $player->getY() + 1, $player->getZ());
            $particle = new RedstoneParticle($pos, 5);  
            $particle2 = new HugeExplodeParticle($pos, 5);
            $particle3 = new WaterParticle($pos, 12);
            $particle4 = new AngryVillagerParticle($pos, 5);
            $level = $player->getLevel();
if($item->getId() == 341){
     $level->addParticle($particle);
     $level->addParticle($particle2);
     $level->addParticle($particle3);
     $level->addParticle($particle4);
   }
   if($item->getId() == 347){
$player->getInventory()->removeItem(Item::get(ITEM::CLOCK));
   $player->getInventory()->addItem(Item::get(ITEM::SLIMEBALL));
}
   if($item->getid() == 260){
$player->getInventory()->removeItem(Item::get(ITEM::SLIMEBALL));
$player->getInventory()->addItem(Item::get(ITEM::BED));
   $player->getInventory()->addItem(Item::get(ITEM::REDSTONE));
   $player->getInventory()->addItem(Item::get(ITEM::FISHING_ROD));
}
if($item->getId() == 355){
$player->getInventory()->removeItem(Item::get(ITEM::BED));
$player->getInventory()->removeItem(Item::get(ITEM::FISHING_ROD));
$player->getInventory()->removeItem(Item::get(ITEM::REDSTONE));
   $player->getInventory()->addItem(Item::get(ITEM::CLOCK));
}
   if($item->getId() == 346){
						$nbt = new Compound ( "", [ 
				"Pos" => new Enum ( "Pos", [ 
						new Double ( "", $player->x ),
						new Double ( "", $player->y + $player->getEyeHeight () ),
						new Double ( "", $player->z ) 
				] ),
				"Motion" => new Enum ( "Motion", [ 
						new Double ( "", - \sin ( $player->yaw / 180 * M_PI ) *\cos ( $player->pitch / 180 * M_PI ) ),
						new Double ( "", - \sin ( $player->pitch / 180 * M_PI ) ),
						new Double ( "",\cos ( $player->yaw / 180 * M_PI ) *\cos ( $player->pitch / 180 * M_PI ) ) 
				] ),
				"Rotation" => new Enum ( "Rotation", [ 
						new Float ( "", $player->yaw ),
						new Float ( "", $player->pitch ) 
				] ) 
		] );
                                                
                  
		
		$f = 1.5;
		$snowball = Entity::createEntity ( "Egg", $player->chunk, $nbt, $player );
		$snowball->setMotion ( $snowball->getMotion ()->multiply ( $f ) );
		$snowball->spawnToAll ();
		}
	}
  }
	public function onPlayerItemHeldEvent(PlayerItemHeldEvent $e){
		$i = $e->getItem();
		$p = $e->getPlayer();
			if($i->getId() == 331){
     $p->sendPopup("§l§eParticle§dBomb");
  }
  if($i->getId() == 346){
     $p->sendPopup("§l§6Egg§bLauncher");
 }
if($i->getId() == 347){
     $p->sendPopup("§l§dCosmetic§eMenu");
  }
if($i->getId() == 341){
     $p->sendPopup("§l§6Gadgets");
  }
if($i->getId() == 355){      $p->sendPopup("§l§7Back...");   } 
}
}
