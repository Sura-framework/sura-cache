<?php
declare(strict_types=1);

namespace Sura\Cache\Storages;

use Sura;

/**
 * Cache dummy storage.
 */
class DevNullStorage implements Sura\Cache\Storage
{
	use Sura\SmartObject;

	public function read(string $key): mixed
	{
	}


	public function lock(string $key): void
	{
	}


	public function write(string $key, $data, array $dependencies): void
	{
	}


	public function remove(string $key): void
	{
	}


	public function clean(array $conditions): void
	{
	}
}
