<?php

$events->listen('book.request', 'TitanTrade\Handlers\TradeEventHandler@onRequest');