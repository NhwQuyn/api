<?php
$word = array(  "https://i.imgur.com/lwZy7ds.mp4",
  );
$api = array_rand($word);
$apivip = $word [$api];
$loli = array(
"data" => $apivip,
"count" => count($word),
"author" => "I'mZ",
);
$rdimg = json_encode($loli , JSON_UNESCAPED_UNICODE);

$i = ['\/v\/','\/'];
$t = ['/v/','/'];
$j = str_replace($i, $t, $rdimg);
echo $j;








~run api.sendMessage(JSON.stringify(`link
link`.split('\n'),0,4),event.threadID)