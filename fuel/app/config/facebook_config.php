<?php

return array(
	'facebook' => array(
		'init' => array(
			'appId' => '206176352842849',
			'secret' => 'dc3220e4a764dbe41ec9448c1fc114b7'
		),
		'login' => array( 
		    'redirect_uri' => 'http://local.revieww.com/index/callback',
		    'scope' => array('publish_stream',),
		),
		'logout' => array(
			'next' => 'http://local.revieww.com/index/login'
		
		),
		
	),

);