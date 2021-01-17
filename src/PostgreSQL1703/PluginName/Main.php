<?php
declare(strict_types=1);

namespace PostgreSQL1703\PluginName;

use PostgreSQL1703\PluginName\commands\TestCommand;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat as TF;

class Main extends PluginBase{
    /**
     * @var string $prefix
     */
    public $prefix = "My-Plugin-Prefix ";

    /**
     * @var $instance
     */
    public static $instance;

    /**
     * @return static
     */
    public static function getInstance() : self {
        return self::$instance;
    }

    public function onLoad() : void {
        self::$instance = $this;
        @mkdir($this->getDataFolder());
        $this->getLogger()->alert($this->prefix . TF::DARK_BLUE . "This Plugin is loading!");
    }

    public function onEnable() : void {
        $this->getLogger()->info($this->prefix . TF::DARK_GREEN . "This Plugin is loaded!");
        $this->getLogger()->alert($this->prefix . TF::AQUA . "This Plugin development by PostgreSQL1703!");

        $this->getServer()->getCommandMap()->register("TestCommand", new TestCommand("Test", $this));

        $this->getServer()->getPluginManager()->registerEvents(new EventListener());
    }

    public function onDisable() : void {
        $this->getLogger()->critical($this->prefix . TF::DARK_RED . "This Plugin is disabled!");
    }
}