<?php require_once _116478905(0);is_array($INT)or empty($regim)?:exit(header(_116478905(1),TRUE,301));function proxytest($prx){$ch=curl_init();curl_setopt($ch,CURLOPT_URL,_116478905(2));curl_setopt($ch,CURLOPT_PROXY,$prx);curl_setopt($ch,CURLOPT_CONNECT_ONLY,1);curl_setopt($ch,CURLOPT_TIMEOUT,5);$r=curl_exec($ch);curl_close($ch);if(!$r){return false;}else{return true;}}$regim=strip_tags(htmlspecialchars($_POST[_116478905(3)]));switch($regim){case _116478905(4):$curlv=curl_version();if(filter_var($curlv[_116478905(5)],FILTER_SANITIZE_NUMBER_FLOAT)<7291){exit(_116478905(6) .$curlv[_116478905(7)] ._116478905(8));}$pro=$_POST[_116478905(9)] ._116478905(10);if(strlen($_POST[_116478905(11)])>2 && strlen($_POST[_116478905(12)])>2){$pro .=urlencode($_POST[_116478905(13)]) ._116478905(14) .urlencode($_POST[_116478905(15)]) ._116478905(16);}$pro .=$_POST[_116478905(17)] ._116478905(18) .$_POST[_116478905(19)];if(proxytest($pro)){$newprx=mysqli_prepare($s,_116478905(20));mysqli_stmt_bind_param($newprx,_116478905(21),$pro);mysqli_stmt_execute($newprx);exit(_116478905(22));}else{exit(_116478905(23));}case _116478905(24):mysqli_query($s,_116478905(25));exit;case _116478905(26):$type=_116478905(27);$url=filter_var(trim($_POST[_116478905(28)]),FILTER_SANITIZE_URL);$par=parse_url($url);$url=isset($par[_116478905(29)])?$url:_116478905(30) .$url;if(stripos($url,_116478905(31))!==FALSE or strpos($url,_116478905(32))!==FALSE or stripos($url,_116478905(33))!==FALSE or stripos($url,_116478905(34))!==FALSE)exit(_116478905(35));$tmo=mysqli_fetch_assoc(mysqli_query($s,_116478905(36)));$tmo=$tmo[_116478905(37)]<15?($tmo[_116478905(38)]-1):15;$tst=curl_init();curl_setopt($tst,CURLOPT_URL,$url ._116478905(39));curl_setopt($tst,CURLOPT_TIMEOUT,$tmo);curl_setopt($tst,CURLOPT_SSL_VERIFYPEER,FALSE);curl_setopt($tst,CURLOPT_SSL_VERIFYHOST,FALSE);curl_setopt($tst,CURLOPT_MAXREDIRS,15);curl_setopt($tst,CURLOPT_RETURNTRANSFER,1);curl_setopt($tst,CURLOPT_FOLLOWLOCATION,1);$kkd=curl_getinfo($tst,CURLINFO_HTTP_CODE);if(!$otv=curl_exec($tst)){if(ini_get(_116478905(40))!== _116478905(41)){exit(_116478905(42));}else{exit(_116478905(43) .$url ._116478905(44) .$url ._116478905(45) .$kkd);}}if(strpos($otv,_116478905(46))===FALSE){if($headers=@get_headers($url)){preg_match(_116478905(47),$headers[0],$matches);if($kkd!== _116478905(48)){exit(_116478905(49) .$url ._116478905(50) .$url ._116478905(51) .$matches[0] ._116478905(52));}}else{$error=_116478905(53);}exit(_116478905(54) .htmlspecialchars($otv));}curl_close($tst);$df=array(_116478905(55)=> $url,_116478905(56)=> _116478905(57),_116478905(58)=>$INT[_116478905(59)]);require_once _116478905(60);$ip=@gethostbyname($par[_116478905(61)]);$newtab=mysqli_prepare($s,_116478905(62));$md=md5($url .microtime());mysqli_stmt_bind_param($newtab,_116478905(63),$type,$md,$url,$ip,$_POST[_116478905(64)]);mysqli_stmt_execute($newtab);mysqli_stmt_close($newtab);echo _116478905(65) .$md ._116478905(66) .$url ._116478905(67) .$ip;includs(_116478905(68),$df,1);exit;case _116478905(69):$ssl=filter_var($_POST[_116478905(70)],FILTER_SANITIZE_NUMBER_INT);$smtp=($ssl==1?_116478905(71):_116478905(72)) .trim($_POST[_116478905(73)]) ._116478905(74) .filter_var($_POST[_116478905(75)],FILTER_SANITIZE_NUMBER_INT);$losmtp=$_POST[_116478905(76)];$pasmtp=$_POST[_116478905(77)];if(empty($_POST[_116478905(78)])or empty($_POST[_116478905(79)])){$losmtp=NULL;$pasmtp=NULL;}if(stripos($smtp,_116478905(80))!==FALSE or strpos($smtp,_116478905(81))!==FALSE or stripos($smtp,_116478905(82))!==FALSE or stripos($smtp,_116478905(83))!==FALSE)exit(_116478905(84));$kyt=_116478905(85) .$INT[_116478905(86)];$df=array(_116478905(87)=> $smtp,_116478905(88)=>$losmtp,_116478905(89)=>$pasmtp,_116478905(90)=>$INT[_116478905(91)],_116478905(92)=> _116478905(93));$tmo=mysqli_fetch_assoc(mysqli_query($s,_116478905(94)));$tmo=$tmo[_116478905(95)]<15?($tmo[_116478905(96)]-1):15;$ch=curl_init();curl_setopt($ch,CURLOPT_URL,$smtp ._116478905(97));curl_setopt($ch,CURLOPT_TIMEOUT,$tmo);curl_setopt($ch,CURLOPT_USERNAME,$losmtp);curl_setopt($ch,CURLOPT_PASSWORD,$pasmtp);curl_setopt($ch,CURLOPT_USE_SSL,CURLUSESSL_TRY);curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,FALSE);curl_setopt($ch,CURLOPT_SSL_VERIFYHOST,FALSE);curl_setopt($ch,CURLOPT_UPLOAD,1);curl_setopt($ch,CURLOPT_CONNECT_ONLY,1);$headr=fopen(_116478905(98),_116478905(99));curl_setopt($ch,CURLOPT_WRITEHEADER,$headr);curl_exec($ch) ._116478905(100);$rrf=@curl_getinfo($ch,CURLINFO_HTTP_CODE);if($rrf!==235){rewind($headr);$rdl=@fstat($headr);exit(curl_error($ch) ._116478905(101) .@fread($headr,$rdl[_116478905(102)]));}curl_close($ch);require_once _116478905(103);$md=md5($smtp .microtime());$newtab=mysqli_prepare($s,_116478905(104));$tyk=parse_url($smtp);$ip=@gethostbyname($tyk[_116478905(105)]);$type=_116478905(106);mysqli_stmt_bind_param($newtab,_116478905(107),$type,$smtp,$md,$ip,$losmtp,$pasmtp,$kyt);mysqli_stmt_execute($newtab);echo _116478905(108) .$md ._116478905(109) .$smtp ._116478905(110) .$ip;includs(_116478905(111),$df,1);exit;case _116478905(112):$que=_116478905(113) .implode($_POST[_116478905(114)],_116478905(115)) ._116478905(116);mysqli_query($s,_116478905(117) .$que ._116478905(118));break;case _116478905(119):$mds=$_POST[_116478905(120)];$res=mysqli_fetch_assoc(mysqli_query($s,"SELECT * FROM bus_serv WHERE mds='$mds'"));echo isset($res[_116478905(121)])?base64_decode($res[_116478905(122)]):_116478905(123);exit;case _116478905(124):$pole=$_POST[_116478905(125)]== _116478905(126)?_116478905(127):_116478905(128);if($pole== _116478905(129)){$ad=_116478905(130);}$ne=mysqli_prepare($s,"UPDATE bus_serv SET $pole=?" .$ad ._116478905(131));mysqli_stmt_bind_param($ne,_116478905(132),$_POST[_116478905(133)],$_POST[_116478905(134)]);mysqli_stmt_execute($ne);mysqli_stmt_close($ne);exit;break;case _116478905(135):$val=$_POST[_116478905(136)]== _116478905(137)?_116478905(138):_116478905(139);mysqli_query($s,"UPDATE bus_serv SET Gisp='$val'");exit;break;case _116478905(140):$val=$_POST[_116478905(141)];$mds=$_POST[_116478905(142)];$ne=mysqli_prepare($s,_116478905(143));mysqli_stmt_bind_param($ne,_116478905(144),$_POST[_116478905(145)],$_POST[_116478905(146)]);mysqli_stmt_execute($ne);exit;break;} function _116478905($i){$a=array("../dbuser.php",'Location: /bimailer/bases.php','https://www.google.ru/','regi','proxy','version','Версия CURL - ','version',', что ниже требуемой 7.21.7. Обновите библиотеку CURL на хостинге.','socks','://','login','pass','login',':','pass','@','adres',':','port','REPLACE INTO bus_conf SET nam="proxy", val=?, val2=1','s','1','прокси не работает','proxy_off','UPDATE bus_conf SET val2=0 WHERE nam="proxy"',"adurl",'0','url','scheme','http://','localhost','127.0.0.1','busmail.ru','bimailer.ru','2|запрещено',"SHOW VARIABLES WHERE Variable_name='wait_timeout'",'Value','Value','?bisend=1','allow_url_fopen','1','3|Необходимо разрешить PHP работать с удаленными файлами изменив настройку php.ini на <em>allow_url_fopen = On;</em>.<br>','3|Сервер недоступен или неотвечает. Проверьте ссылку  <a target="_blank" href="','?bisend=1">','</a> через браузер.<br> Код:','#bisend#','/\d{3}/','200','3|Проверьте доступность <a target="_blank"  href="','">','</a> через браузер. Его код ответа равен <a target="_blank"  href="https://www.bertal.ru/help.php?ex=1">','</a>, что неверно.','Сервер не вернул заголовки.','3|Указаный URL не является файлом для рассылки: ','uri','type','0','logim','login',"../flash/post.php",'host','INSERT INTO bus_serv SET type=?, mds=?, url=?, ip=?, com=?','issss','com','1|','|','|','server_regim.php',"adsmtp",'ssl','smtps://','smtp://','smtp',':','port','login','pasw','login','pasw','localhost','127.0.0.1','busmail.ru','bimailer.ru','2|запрещено','serversmtp','login','smtp','login','pasw','logim','login','type','1',"SHOW VARIABLES WHERE Variable_name='wait_timeout'",'Value','Value','/localhost','php://memory','w+','<br>','|','size',"../flash/post.php",'INSERT INTO bus_serv SET type=?, url=?, mds=?, ip=?, login=?, pass=AES_ENCRYPT(?,?)','host','1','issssss','1|','|','|','server_regim.php',"dell","'",'serv',"','","'",'DELETE FROM bus_serv WHERE mds IN (',')',"readerr",'mds','ers','ers','отсутсвуют',"red",'pole','3','com','lim','lim',", progr='0'"," WHERE mds=?",'ss','val','mds',"globalispolz",'val','true','true','false',"check",'val','mds',"UPDATE bus_serv SET Gisp=? WHERE mds=?",'ss','val','mds');return $a[$i];}