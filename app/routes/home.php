<?php

$app->get('/', function() use ($app) {
	$api = new \Mailchimp\Mailchimp('MAILCHIMP_API_KEY');
	$result = $api->get(
        'lists/MAILCHIMP_LIST_ID/members', [
        	'count' => 50
        ]
      );
    $app->render('home.html', array(
    	'api_text' => var_export($result, true),
    	'api' => $result['members']

   	));
	
});
