<!doctype html><html lang="ru"><head><meta charset="utf-8" /><title>Сообщения BiMailer</title><meta name="author" content="BusMail.ru"><link rel="shortcut icon" type="image/x-icon" href="/bimailer/images/icon.png"><link rel="stylesheet" href="/bimailer/extra/style.css"><link rel="stylesheet" href="/bimailer/extra/menu.css"><script src="/bimailer/extra/jquery.js"></script><script src="/bimailer/extra/allsite.js"></script><script>function messclean(hash){	$.post("/bimailer/advanced/oneparam.php", {'param':'delsysmess', 'hash':hash}, function(){		$('#'+hash).next().remove();		$('#'+hash).remove();		}		)	}</script><style>section{	position:relative;	padding-right:25px;	text-align:justify;}.dellmess{	position:absolute;	right:5px;	cursor:pointer;}</style></head><?php require_once _1846658185(0);mysqli_query($s,_1846658185(1));is_array($INT)?:require_once _1846658185(2); ?><body><?php require_once _1846658185(3);$fiok=mysqli_query($s,_1846658185(4));while($rw=mysqli_fetch_assoc($fiok)){echo _1846658185(5) .$rw[_1846658185(6)] ._1846658185(7) .base64_decode($rw[_1846658185(8)]) ._1846658185(9) .$rw[_1846658185(10)] ._1846658185(11);echo _1846658185(12) .$rw[_1846658185(13)] ._1846658185(14) .base64_decode($rw[_1846658185(15)]) ._1846658185(16);} ?><footer class="foo"><?php require_once _1846658185(17); ?></footer></body></html><?php function _1846658185($i){$a=Array("dbuser.php","UPDATE bus_mess SET smotr='1'","advanced/enter.php","menu.php",'SELECT * FROM bus_mess ORDER BY date DESC','<h1 id="','hash','">','them',' <span class="miniH">','date','</span></h1>','<section><img onclick="messclean(\'','hash','\');" src="/bimailer/images/dell.png" class="dellmess" />','mess',' </section>',"footer.php");return $a[$i];} ?>