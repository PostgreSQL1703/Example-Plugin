<?php
declare(strict_types=1);

namespace PostgreSQL1703\PluginName\commands;

use PostgreSQL1703\PluginName\Main;
use pocketmine\command\CommandSender;
use pocketmine\command\PluginCommand;
use pocketmine\command\PluginIdentifiableCommand;
use pocketmine\utils\TextFormat as TF;
use pocketmine\Player;

class TestCommand extends PluginCommand implements PluginIdentifiableCommand{
    /**
     * TestCommand constructor.
     * @param string $name
     * @param Main $owner
     */
    public function __construct(string $name, Main $owner){
        parent::__construct($name, $owner);
    }

    /**
     * @param CommandSender $sender
     * @param string $label
     * @param array $args
     * @return bool|mixed|void
     */
    public function execute(CommandSender $sender, string $label, array $args){
        if(!$sender instanceof Player){
            $sender->sendMessage($this->getPlugin()->prefix . TF::DARK_RED . "Please use this Command in the In-Game Chat!");
            return;
        }
        //Code
    }
}