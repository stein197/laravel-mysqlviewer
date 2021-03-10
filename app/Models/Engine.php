<?php

namespace App\Models;

class Engine extends Entity {

	public static array $_COLUMNS = [
		'COMMENT', 'SUPPORT', 'TRANSACTIONS'
	];

	public static array $_ACTIONS = [];

	public function id(): string {
		return $this->ENGINE;
	}

	public function delete(): void {}

	public function update(array $data): void {}

	public static function create(array $data): ?Entity {
		return null;
	}

	public static function read(string $id, array $data = []): ?Entity {
		return null;
	}

	protected static function listQuery(array $data = []): string {
		return 'SELECT * FROM `information_schema`.`ENGINES`';
	}
}
