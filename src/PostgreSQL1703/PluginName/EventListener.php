<?php
declare(strict_types=1);

namespace PostgreSQL1703\PluginName;

use PostgreSQL1703\PluginName\Main;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\utils\TextFormat as TF;

class EventListener implements Listener{
    /**
     * @var Main
     */
    private $plugin;

    /**
     * EventListener constructor.
     * @param Main $plugin
     */
    public function __construct(Main $plugin){
        $this->plugin = $plugin;
    }

    /**
     * @param PlayerJoinEvent $event
     */
    public function onJoin(PlayerJoinEvent $event) : void {
        $player = $event->getPlayer();
        // Code
    }
}