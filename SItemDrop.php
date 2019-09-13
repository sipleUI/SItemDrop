<?php
/**
 * @name SItemDrop
 * @main siple\sitemdrop\SItemDrop
 * @author ["siple"]
 * @version 0.1
 * @api 3.9.1
 * @description This plugin is made by siple.
 */


namespace siple\sitemdrop;

use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use pocketmine\event\player\PlayerDropItemEvent;

class SItemDrop extends PluginBase implements Listener{

    public function onEnable ()
	{
    
		   $this->getLogger()->info ('아이템 드랍방지');
	    $this->getServer()->getPluginManager()->registerEvents($this, $this);
	
	}
  
  
	  public function Drop(PlayerDropItemEvent $event) { 
      $player = $event->getPlayer();

      $event->setCancelled(true);
      $player->sendPopup('아이템 드랍방지');

          }
      }
?>
      