<?php
declare(strict_types=1);

namespace instantlyta\fcaclan;


use pocketmine\scheduler\Task;

class UpdateTopClanTask extends Task{
	public function onRun() : void{
		FCAClan::getInstance()->updateTopClan();
	}
}