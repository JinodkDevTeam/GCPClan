<?php
declare(strict_types=1);

namespace instantlyta\fcaclan\event;


use pocketmine\event\player\PlayerEvent;
use pocketmine\player\Player;

class ClanChangeEvent extends PlayerEvent{
	protected string $clanName;

	public function __construct(Player $player, string $clanName){
		$this->player = $player;
		$this->clanName = $clanName;
	}
}