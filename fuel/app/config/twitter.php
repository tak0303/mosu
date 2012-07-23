<?php
/**
 * Enter your API keys below.  You get your API keys by creating an
 * app on https://dev.twitter.com/apps/new.
 */
return array(
	'active' => Fuel::$env,

	'development' => array(
		'twitter_consumer_key'     => 'QFpfRkEjsgDrUOhPDM0qg',
		'twitter_consumer_secret'  => 'VVZNxAt5kdcLrTHytbyXM9NYiWzh3nepLUXKjWiLk',
	),
	'production' => array(
		'twitter_consumer_key'     => isset($_SERVER['TWITTER_CONSUMER_KEY']) ? $_SERVER['TWITTER_CONSUMER_KEY'] : null,
		'twitter_consumer_secret'  => isset($_SERVER['TWITTER_CONSUMER_SECRET']) ? $_SERVER['TWITTER_CONSUMER_SECRET'] : null,
	),
);
