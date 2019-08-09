<?php
namespace anirudh246\staffchat;
	
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerChatEvent;
use pocketmine\utils\TextFormat;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
 
class main extends PluginBase implements Listener
{
     public function onLoad(){
	}
	public function onEnable(){
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
    }
	public function onDisable(){
		
   }
	
	
  public function staffMessage(PlayerChatEvent $ev){
	  
	$array = explode(" ",$message); 
        array_shift($array); 
        $message = implode(); 
	
	  if($array[0] === ".sc"){
	  
	  } 
	  $message = $ev->getMessage();
      foreach(Server::getInstance()->getLoggedInPlayers() as $player){
        if($player->hasPermission("hgk.staffchat.see")) $player->sendMessage(TextFormat::RED("$message"));
	     TextFormat::colorize("§l§4".$player->getName()." > §r§7".$message);
    }
  }
        
}
