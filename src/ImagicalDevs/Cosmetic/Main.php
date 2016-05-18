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
use pocketmine\nbt\tag\FloatTag;
use pocketmine\nbt\tag\CompoundTag;
use pocketmine\inventory\Inventory;
use pocketmine\nbt\tag\EnumTag;
use pocketmine\nbt\tag\DoubleTag;
use pocketmine\entity\Entity;
use pocketmine\item\Item;
use pocketmine\Player;
use pocketmine\block\Air;
use pocketmine\network\protocol\AddItemEntityPacket;

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
//Items
   if($item->getId() == 347){
      $player->getInventory()->removeItem(Item::get(ITEM::CLOCK));
      $player->getInventory()->addItem(Item::get(ITEM::MINECART));
      $player->getInventory()->addItem(Item::get(ITEM::GLOWSTONE));
}
//Gadgets
   if($item->getid() == 328){
       $player->getInventory()->removeItem(Item::get(ITEM::CLOCK));
      $player->getInventory()->removeItem(Item::get(ITEM::MINECART));
      $player->getInventory()->removeItem(Item::get(ITEM::GLOWSTONE));
      $player->getInventory()->addItem(Item::get(ITEM::FISHING_ROD));
      $player->getInventory()->addItem(Item::get(ITEM::BED))     
}
//Partical
   if($item->getid() == 348){
       $player->getInventory()->removeItem(Item::get(ITEM::CLOCK));
      $player->getInventory()->removeItem(Item::get(ITEM::MINECART));
      $player->getInventory()->removeItem(Item::get(ITEM::GLOWSTONE));
      $player->getInventory()->addItem(Item::get(ITEM::LAPISLAZULE));
      $player->getInventory()->addItem(Item::get(ITEM::ORANGEDYE));
      $player->getInventory()->addItem(Item::get(ITEM::ROSERED));
      $player->getInventory()->addItem(Item::get(ITEM::BONEMEAL));
      $player->getInventory()->addItem(Item::get(ITEM::BED))
}
//Back
   if($item->getId() == 355){
      $player->getInventory()->removeItem(Item::get(ITEM::BED));
      $player->getInventory()->removeItem(Item::get(ITEM::MINECART));
      $player->getInventory()->removeItem(Item::get(ITEM::GLOWSTONE));
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
	 //ItemNames
     if($i->getId() == 347){
     $p->sendPopup("§l§dCosmetic§eMenu");
     }
     //Gadgets
     if($i->getId() == 328){
     $p->sendPopup("§l§6Gadgets");
     }
     if($i->getId() == 346){
     $p->sendPopup("§l§6Egg§bLauncher");
     }
     if($i->getId() == 332){
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
     if($i->getId() == 348){
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
//ItemUse
//Gadgets
//EggLauncher

  if($item->getId() == 346){
						$nbt = new Compound ( "", [ 
				"Pos" => new Enum ( "Pos", [ 
						new Double ( "", $player->x ),
						new Double ( "", $player->y + $player->getEyeHeight () ),
						new Double ( "", $player->z ) 
				] ),
				"Motion" => new Enum ( "Motion", [ 
                                                new Double ( "", - \sin ( $player- >yaw / 180 * M_PI ) *\cos ( $player->pitch / 180 * M_PI ) ),
						new Double ( "", - \sin ( $player->pitch / 180 * M_PI ) ),
						new Double ( "",\cos ( $player->yaw / 180 * M_PI ) *\cos ( $player->pitch / 180 * M_PI ) ) 
				] ),
				"Rotation" => new Enum ( "Rotation", [ 
						new Float ( "", $player->yaw ),
						new Float ( "", $player->pitch ) 
				] ) 
		] );
                                                
                  
		     $motion = 2 % 100;
		$f = $motion;
		$snowball = Entity::createEntity ( "Egg", $player->chunk, $nbt, $player );
		$snowball->setMotion ( $snowball->getMotion ()->multiply ( $f ) );
		$snowball->spawnToAll ();
	}
//EnderPearl
/**@var Item*/
	private $item;
	/**@var int*/
	protected $damage = 0;

	public function onUpdate($currentTick) {
        if ($this->closed) {
            return false;
        }
        $this->timings->startTiming();
        $hasUpdate = parent::onUpdate($currentTick);
		
		if ($this->shootingEntity instanceof Player) {
			$bb = $this->getBoundingBox();
			if((count($this->level->getCollisionBlocks($bb, true)) > 0 || $this->hadCollision) && $hasUpdate){
				$x = round($this->x);
				$z = round($this->z);
				
				$iterNum = 0;
				while (!($this->level->getBlock(new Vector3($x, round($this->y), $z)) instanceof Air)) {
					$x = $x > $this->shootingEntity->x ? $x - 1 : $x + 1;
					$z = $z > $this->shootingEntity->z ? $z - 1 : $z + 1;
					if ($iterNum < 5) {
						$iterNum++;
					} else {
						break;
					}
				}
				$y = round($this->y + $this->shootingEntity->height);
				
				$this->shootingEntity->teleport(new Vector3($x, $y, $z));
				
				$this->kill();
				$hasUpdate = false;
			}
		}
		
		$this->timings->stopTiming();
        
        return $hasUpdate;
    }
	
	public function spawnTo(Player $player) {
		$pk = new AddItemEntityPacket;
		$pk->eid = $this->getID();
		$pk->x = $this->x;
		$pk->y = $this->y;
		$pk->z = $this->z;
		$pk->yaw = $this->yaw;
		$pk->pitch = $this->pitch;
		$pk->item = Item::get(Item::EGG);
		$pk->speedX = $this->motionX;
		$pk->speedY = $this->motionY;
		$pk->speedZ = $this->motionZ;
		$player->dataPacket($pk);

		$this->item = $pk->item;

		Entity::spawnTo($player);
	}
/**
* BunnyHop-Little is asigned on this
* FlyPower
* LightingStick
* Particals-Emerald is asigned on this
*/
}
}
