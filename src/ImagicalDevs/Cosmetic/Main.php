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
   $player->getInventory()->addItem(Item::get(ITEM::APPLE));
   $player->getInventory()->addItem(Item::get(ITEM::DIAMOND_HELMET));
}
   if($item->getid() == 260){
$player->getInventory()->removeItem(Item::get(ITEM::APPLE));
$player->getInventory()->removeItem(Item::get(ITEM::DIAMOND_HELMET));
$player->getInventory()->addItem(Item::get(ITEM::BED));
   $player->getInventory()->addItem(Item::get(ITEM::SLIMEBALL));
   $player->getInventory()->addItem(Item::get(ITEM::FISHING_ROD));
}
if($item->getid() == 310){
$player->getInventory()->removeItem(Item::get(ITEM::APPLE));
$player->getInventory()->removeItem(Item::get(ITEM::DIAMOND_HELMET));
$player->getInventory()->addItem(Item::get(ITEM::DIAMOND_CHESTPLATE));
   $player->getInventory()->addItem(Item::get(ITEM::IRON_CHESTPLATE));
   $player->getInventory()->addItem(Item::get(ITEM::GOLD_CHESTPLATE));
   $player->getInventory()->addItem(Item::get(ITEM::CHAIN_CHESTPLATE));
   $player->getInventory()->addItem(Item::get(ITEM::LEATHER_TUNIC));
}
if($item->getid() == 311){
$player->getInventory()->removeItem(Item::get(ITEM::DIAMOND_CHESTPLATE));
   $player->getInventory()->removeItem(Item::get(ITEM::IRON_CHESTPLATE));
   $player->getInventory()->removeItem(Item::get(ITEM::GOLD_CHESTPLATE));
   $player->getInventory()->removeItem(Item::get(ITEM::CHAIN_CHESTPLATE));
   $player->getInventory()->removeItem(Item::get(ITEM::LEATHER_TUNIC));
   $player->getInventory()->addItem(Item::get(ITEM::BED));
   $player->getInventory()->addItem(Item::get(ITEM::DIAMOND_HELMET));
   $player->getInventory()->addItem(Item::get(ITEM::DIAMOND_CHESTPLATE));
   $player->getInventory()->addItem(Item::get(ITEM::DIAMOND_LEGGINGS));
   $player->getInventory()->addItem(Item::get(ITEM::DIAMOND_BOOTS));
   }
   elseif($item->getid() == 303){
$player->getInventory()->removeItem(Item::get(ITEM::DIAMOND_CHESTPLATE));
   $player->getInventory()->removeItem(Item::get(ITEM::IRON_CHESTPLATE));
   $player->getInventory()->removeItem(Item::get(ITEM::GOLD_CHESTPLATE));
   $player->getInventory()->removeItem(Item::get(ITEM::CHAIN_CHESTPLATE));
   $player->getInventory()->removeItem(Item::get(ITEM::LEATHER_TUNIC));
   $player->getInventory()->addItem(Item::get(ITEM::BED));
   $player->getInventory()->addItem(Item::get(ITEM::CHAIN_HELMET));
   $player->getInventory()->addItem(Item::get(ITEM::CHAIN_CHESTPLATE));
   $player->getInventory()->addItem(Item::get(ITEM::CHAIN_LEGGINGS));
   $player->getInventory()->addItem(Item::get(ITEM::CHAIN_BOOTS));
   }
   elseif($item->getid() == 307){
$player->getInventory()->removeItem(Item::get(ITEM::DIAMOND_CHESTPLATE));
   $player->getInventory()->removeItem(Item::get(ITEM::IRON_CHESTPLATE));
   $player->getInventory()->removeItem(Item::get(ITEM::GOLD_CHESTPLATE));
   $player->getInventory()->removeItem(Item::get(ITEM::CHAIN_CHESTPLATE));
   $player->getInventory()->removeItem(Item::get(ITEM::LEATHER_TUNIC));
   $player->getInventory()->addItem(Item::get(ITEM::BED));
   $player->getInventory()->addItem(Item::get(ITEM::IRON_HELMET));
   $player->getInventory()->addItem(Item::get(ITEM::IRON_CHESTPLATE));
   $player->getInventory()->addItem(Item::get(ITEM::IRON_LEGGINGS));
   $player->getInventory()->addItem(Item::get(ITEM::IRON_BOOTS));
   }
   elseif($item->getid() == 315){
$player->getInventory()->removeItem(Item::get(ITEM::DIAMOND_CHESTPLATE));
   $player->getInventory()->removeItem(Item::get(ITEM::IRON_CHESTPLATE));
   $player->getInventory()->removeItem(Item::get(ITEM::GOLD_CHESTPLATE));
   $player->getInventory()->removeItem(Item::get(ITEM::CHAIN_CHESTPLATE));
   $player->getInventory()->removeItem(Item::get(ITEM::LEATHER_TUNIC));
   $player->getInventory()->addItem(Item::get(ITEM::BED));
   $player->getInventory()->addItem(Item::get(ITEM::GOLD_HELMET));
   $player->getInventory()->addItem(Item::get(ITEM::GOLD_CHESTPLATE));
   $player->getInventory()->addItem(Item::get(ITEM::GOLD_LEGGINGS));
   $player->getInventory()->addItem(Item::get(ITEM::GOLD_BOOTS));
   }
   elseif($item->getid() == 299){
$player->getInventory()->removeItem(Item::get(ITEM::DIAMOND_CHESTPLATE));
   $player->getInventory()->removeItem(Item::get(ITEM::IRON_CHESTPLATE));
   $player->getInventory()->removeItem(Item::get(ITEM::GOLD_CHESTPLATE));
   $player->getInventory()->removeItem(Item::get(ITEM::CHAIN_CHESTPLATE));
   $player->getInventory()->removeItem(Item::get(ITEM::LEATHER_TUNIC));
   $player->getInventory()->addItem(Item::get(ITEM::BED));
   $player->getInventory()->addItem(Item::get(ITEM::LEATHER_CAP));
   $player->getInventory()->addItem(Item::get(ITEM::LEATHER_TUNIC));
   $player->getInventory()->addItem(Item::get(ITEM::LEATHER_PANTS));
   $player->getInventory()->addItem(Item::get(ITEM::LEATHER_BOOTS));
   }
if($item->getId() == 355){
$player->getInventory()->removeItem(Item::get(ITEM::BED));
$player->getInventory()->removeItem(Item::get(ITEM::FISHING_ROD));
$player->getInventory()->removeItem(Item::get(ITEM::SLIMEBALL));
$player->getInventory()->removeItem(Item::get(ITEM::GOLD_HELMET));
   $player->getInventory()->removeItem(Item::get(ITEM::GOLD_CHESTPLATE));
   $player->getInventory()->removeItem(Item::get(ITEM::GOLD_LEGGINGS));
   $player->getInventory()->removeItem(Item::get(ITEM::GOLD_BOOTS));
$player->getInventory()->removeItem(Item::get(ITEM::DIAMOND_HELMET));
   $player->getInventory()->removeItem(Item::get(ITEM::DIAMOND_CHESTPLATE));
   $player->getInventory()->removeItem(Item::get(ITEM::DIAMOND_LEGGINGS));
   $player->getInventory()->removeItem(Item::get(ITEM::DIAMOND_BOOTS));
$player->getInventory()->removeItem(Item::get(ITEM::IRON_HELMET));
   $player->getInventory()->removeItem(Item::get(ITEM::IRON_CHESTPLATE));
   $player->getInventory()->removeItem(Item::get(ITEM::IRON_LEGGINGS));
   $player->getInventory()->removeItem(Item::get(ITEM::IRON_BOOTS));
$player->getInventory()->removeItem(Item::get(ITEM::CHAIN_HELMET));
   $player->getInventory()->removeItem(Item::get(ITEM::CHAIN_CHESTPLATE));
   $player->getInventory()->removeItem(Item::get(ITEM::CHAIN_LEGGINGS));
   $player->getInventory()->removeItem(Item::get(ITEM::CHAIN_BOOTS));
$player->getInventory()->removeItem(Item::get(ITEM::LEATHER_CAP));
   $player->getInventory()->removeItem(Item::get(ITEM::LEATHER_TUNIC));
   $player->getInventory()->removeItem(Item::get(ITEM::LEATHER_PANTS));
   $player->getInventory()->removeItem(Item::get(ITEM::LEATHER_BOOTS));
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
			if($i->getId() == 341){
     $p->sendPopup("§l§eParticle§dBomb");
  }
  if($i->getId() == 346){
     $p->sendPopup("§l§6Egg§bLauncher");
 }
 if($i->getId() == 310){
     $p->sendPopup("§l§bArmour");
     }
if($i->getId() == 347){
     $p->sendPopup("§l§dCosmetic§eMenu");
  }
if($i->getId() == 260){
     $p->sendPopup("§l§6Gadgets");
  }
if($i->getId() == 355){      $p->sendPopup("§l§7Back...");   } }
}
