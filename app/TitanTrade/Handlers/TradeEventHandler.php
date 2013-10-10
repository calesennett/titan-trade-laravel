<?php namespace TitanTrade\Handlers;

use Mail;
use User;
use Book;

class TradeEventHandler 
{
	public function onRequest(Book $book, User $loggedIn, User $bookOwner)
	{
		$book = $book->toArray();
		$loggedIn = $loggedIn->toArray();
		$bookOwner = $bookOwner->toArray();
		Mail::queue('emails.request', [$book, $loggedIn, $bookOwner], function($message) use ($bookOwner, $loggedIn, $book)
		{
			$message->from('calesennett@gmail.com', 'Titan Trade');
    		$message->to($bookOwner['email'], $bookOwner['username'])->subject($loggedIn['username'] . " wants your book!");
		});
	}
}