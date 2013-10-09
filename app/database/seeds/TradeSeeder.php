<?php

class TradeSeeder 
extends DatabaseSeeder
{

	public function run()
	{
		$trades = [
			[
				"pending" => 0
			],
			[
				"pending" => 1
			]

		];

		foreach ($trades as $trade) {
			Trade::create($trade);
		}
	}

}