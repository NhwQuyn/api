<?php
$word = array(
"https://files.catbox.moe/wyc2zk.mp4",
"https://files.catbox.moe/hm6cxn.mp4",
"https://files.catbox.moe/a6pb93.mp4",
"https://files.catbox.moe/8xvh6v.mp4",
"https://files.catbox.moe/br5s69.mp4",
"https://files.catbox.moe/lfcj3m.mp4",
"https://files.catbox.moe/bfb8dl.mp4",
"https://files.catbox.moe/3vbpqz.mp4",
"https://files.catbox.moe/yelccs.mp4",
"https://files.catbox.moe/07oh2y.mp4",
"https://files.catbox.moe/7v2f4w.mp4",
"https://files.catbox.moe/qsl2xt.mp4",
"https://files.catbox.moe/m1outw.mp4",
"https://files.catbox.moe/zj4m8x.mp4",
"https://files.catbox.moe/vqlfsa.mp4",
"https://files.catbox.moe/cae2sg.mp4",
"https://files.catbox.moe/b119u3.mp4",
"https://files.catbox.moe/tbmsgk.mp4",
"https://files.catbox.moe/tbmsgk.mp4",
"https://files.catbox.moe/40a7cv.mp4",
"https://files.catbox.moe/0rb46l.mp4",
"https://files.catbox.moe/s5z24o.mp4",
"https://files.catbox.moe/jvux62.mp4",
"https://files.catbox.moe/jvux62.mp4",
"https://files.catbox.moe/86t3x1.mp4",
"https://files.catbox.moe/l6e9ru.mp4",
"https://files.catbox.moe/7xniug.mp4",
"https://files.catbox.moe/huchr5.mp4",
"https://files.catbox.moe/2gmw73.mp4",
"https://files.catbox.moe/wy8sla.mp4",
"https://files.catbox.moe/58s77v.mp4",
"https://files.catbox.moe/58s77v.mp4",
"https://files.catbox.moe/f6xvq8.mp4",
"https://files.catbox.moe/lev392.mp4",
"https://files.catbox.moe/piywjc.mp4",
"https://files.catbox.moe/9umtgc.mp4",
"https://files.catbox.moe/axojbp.mp4",
"https://files.catbox.moe/rl6kq2.mp4",
"https://files.catbox.moe/kd7x9s.mp4",
"https://files.catbox.moe/yrcwv0.mp4",
"https://files.catbox.moe/kjbr9f.mp4"
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