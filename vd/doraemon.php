<?php
$word = array(
  "https://i.imgur.com/OyKCvTa.mp4",
  "https://i.imgur.com/jKObWGi.mp4",
  "https://imgur.com/EQGbtKN.mp4",
  "https://imgur.com/Ree5XRl.mp4",
  "https://imgur.com/BNBGEq9.mp4",
  "https://imgur.com/4IvzuHi.mp4",
  "https://imgur.com/6psPrUg.mp4",
  "https://imgur.com/pPzvqR8.mp4",
  "https://imgur.com/U7vxol2.mp4",
  "https://imgur.com/RcMRkgi.mp4",
  "https://i.imgur.com/Q5Hqz0g.mp4",
  "https://i.imgur.com/LvVVWHz.mp4",
  "https://imgur.com/IR1I4MP.mp4",
  "https://i.imgur.com/4moinjQ.mp4",
  "https://i.imgur.com/DJhF7Ro.mp4",
  "https://i.imgur.com/reEyRbl.mp4",
  "https://imgur.com/eTUwgPe.mp4",
  "https://i.imgur.com/agf7vGq.mp4",
  "https://imgur.com/qu6Hkhn.mp4",
  "https://i.imgur.com/d6rpRbn.mp4",
  "https://i.imgur.com/KbyZfuP.mp4",
  "https://i.imgur.com/1WDZClM.mp4",
  "https://imgur.com/t58D9j1.mp4",
  "https://i.imgur.com/0Idu7uy.mp4",
  "https://imgur.com/ZVCQyfU.mp4",
  "https://imgur.com/mBM0NA2.mp4",
  "https://i.imgur.com/535uthh.mp4",
  "https://i.imgur.com/D43EemD.mp4",
  "https://i.imgur.com/oMKTYS0.mp4",
  "https://i.imgur.com/1ytLZnc.mp4",
  "https://i.imgur.com/y1hiQ75.mp4",
  "https://imgur.com/7PPYVlS.mp4",
  "https://i.imgur.com/iuIF6oi.mp4",
  "https://imgur.com/JCRB7cQ.mp4",
  "https://imgur.com/Zk02VQM.mp4",
  "https://i.imgur.com/fpO1xmF.mp4",
  "https://i.imgur.com/YfvCtXE.mp4",
  "https://i.imgur.com/S7d7VDW.mp4",
  "https://imgur.com/oMQtlh0.mp4",
  "https://i.imgur.com/yTkIbEs.mp4",
  "https://imgur.com/CUDUKXQ.mp4",
  "https://imgur.com/Ytv5CWG.mp4",
  "https://imgur.com/iZn5PqB.mp4",
  "https://imgur.com/rc8bGVJ.mp4",
  "https://imgur.com/XKcoGB5.mp4",
  "https://imgur.com/EktRPBo.mp4",
  "https://imgur.com/JYbmXAa.mp4",
  "https://imgur.com/tlNuKLD.mp4",
  "https://imgur.com/rqUxQCq.mp4",
  "https://imgur.com/UK58Hup.mp4"
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