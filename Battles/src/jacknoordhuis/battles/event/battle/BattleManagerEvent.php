<?php

/*
 * Battles plugin for PocketMine-MP
 *
 * Copyright (C) 2017 JackNoordhuis
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 */

namespace jacknoordhuis\battles\event\battle;

use jacknoordhuis\battles\battle\BattleManager;
use jacknoordhuis\battles\event\BattlesEvent;

class BattleManagerEvent extends BattlesEvent {

	/** @var string */
	private $manager;

	public function __construct(BattleManager $manager) {
		$this->manager = $manager;
		parent::__construct($manager->getPlugin());
	}

	public function getBattleManager() : BattleManager {
		return $this->manager;
	}

}