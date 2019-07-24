  <?php
namespace anirudh246/StaffChat
	
use pocketmine/plugin/PluginBase;
use pocketmine/event/Listener;
use pocketmine/event/player/PlayerChatEvent;
use pocketmine/utils/TextFormat;
use pocketmine/command/Command;
use pocketmine/command/CommandSender;
 
class main extends PluginBase implements Listener
{
     public function onLoad(){
	}
	public function onEnable(){
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
		$this->getServer()->getScheduler()->scheduleRepeatingTask(new BroadcastPluginTask($this), 120);
    }
	public function onDisable(){
		
   }
	
	
  public function staffMessage(PlayerChatEvent $ev){
	  
	$array = explode(" ",$msg); 
        array_shift($array); 
        $msg = implode(); 
	
	  if($array[0] === ".sc"){
	  
	  } 
	  $msg = $ev->getMessage();
      foreach(Server::getInstance()->getLoggedInPlayers() as $player){
        if($player->hasPermission("hgk.staffchat.see")) $player->sendMessage(TextFormat::RED("$msg"));
	     TextFormat::colorize("§l§4".$player->getName()." > §r§7".$message);
    }
  }
        
}
