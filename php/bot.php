<?php

// example: https://github.com/onlinetuts/line-bot-api/blob/master/php/example/chapter-01.php

include ('line-bot-api/php/line-bot.php');

$channelSecret = 'd722d15adac439cc9e341a9ee7def277';
$access_token  = 'yx2RLbuSr395YaXKY78anUrJOXFLQQa9sw2m5lYF9ulOQwVA6ck3aJ9ft7C9a0txWMTFXu06RYhLrrlmm2HXiiWnBC2CPe99tRX3VyQ4IlX4jJDOb5F+etuBb2sCcXlAoakB76v/nV45uwRQN+0Y+gdB04t89/1O/w1cDnyilFU';

$bot = new BOT_API($channelSecret, $access_token);
	
if (!empty($bot->isEvents)) {
		
	$bot->replyMessageNew($bot->replyToken, json_encode($bot->message));

	if ($bot->isSuccess()) {
		echo 'Succeeded!';
		exit();
	}

	// Failed
	echo $bot->response->getHTTPStatus . ' ' . $bot->response->getRawBody(); 
	exit();

}
