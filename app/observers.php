<?php

Event::listen('book.request', 'TitanTrade\Handlers\TradeEventHandler@onRequest');