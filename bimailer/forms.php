<!doctype html><html lang="ru"><head><meta charset="utf-8" /><title>BiMailer</title><meta name="author" content="BusMail.ru"><link rel="shortcut icon" type="image/x-icon" href="/bimailer/images/icon.png"><link rel="stylesheet" href="/bimailer/extra/style.css"><link rel="stylesheet" href="/bimailer/extra/menu.css"><link rel="stylesheet" href="/bimailer/extra/table.css"><script src="/bimailer/extra/jquery.js"></script><script src="/bimailer/extra/allsite.js"></script><script src="/bimailer/extra/form.js"></script><style>select{	width:460px;}.modal td:first-child{}		</style></head><?php require_once _5a2(0);is_array($INT)?:require_once _5a2(1); ?><body><?php require_once _5a2(2); ?><h1>Используемые категории</h1><section><center><table cellpadding="0" cellspacing="1" border="0"><tr><th><span data-title="Список баз адресов, которые можно использовать в форме подписки, как категории">Не используемые категории</span></th><th></th><th><span data-title="Названия списков email используются, как категории в форме подписки">Используемые категории</span></th></tr><tr><td><select name="noisp" size="7" multiple><?php $conf=mysqli_fetch_assoc(mysqli_query($s,_5a2(3)));$falseForm=mysqli_query($s,_5a2(4));while($rowF=mysqli_fetch_assoc($falseForm)){if($rowF[_5a2(5)]==$conf[_5a2(6)]){$not=_5a2(7);$not1=_5a2(8);}else{unset($not,$not1);}echo"<option value='{$rowF[_5a2(9)]}' $not>$not1" .htmlspecialchars($rowF[_5a2(10)],ENT_QUOTES) ._5a2(11);} ?> </select></td><td style="width:60px; text-align:center;"><img src="images/but/form_add.png" style="cursor:pointer;"><br><br><img src="images/but/form_del.png" style="cursor:pointer;"></td><td style="width:40px; vertical-align:central;"><select name="isp" size="7" multiple><?php $trueForm=mysqli_query($s,_5a2(12));while($rowT=mysqli_fetch_assoc($trueForm)){if($rowT[_5a2(13)]==$conf[_5a2(14)]){$not=_5a2(15);$not1=_5a2(16);}else{unset($not,$not1);}echo"<option value='{$rowT[_5a2(17)]}' $not>$not1" .htmlspecialchars($rowT[_5a2(18)],ENT_QUOTES) ._5a2(19);} ?>  </select></td></tr></table></center><p>Перенесите минимум один список в <strong>Используемые категории</strong>, иначе форма подписки работать не будет.</p></section><h1>Редактор формы подписки</h1><?php $joy=mysqli_query($s,_5a2(20));while($form=mysqli_fetch_assoc($joy)){$m=$form[_5a2(21)];unset($form[_5a2(22)]);$arrForm[$m]=$form;} ?><section><center><table cellpadding="0" cellspacing="1" border="0" class="modal"><tr><th width="250">Название поля</th><th>Просмотр</th><th width="70">Ширина</th><th>Показ</th></tr><!--  --------------------КАТЕГОРИЯ ------------------------><tr <?=$arrForm[1][_5a2(23)]== _5a2(24)?_5a2(25):NULL?> id="a1"><td><?=$arrForm[1][_5a2(26)]?></td><td><select name="cat" style="width:<?=$arrForm[1][_5a2(27)]?>px;"><?php if(mysqli_data_seek($trueForm,0)){while($rowI=mysqli_fetch_assoc($trueForm)){if($rowI[_5a2(28)]==$conf[_5a2(29)]){$not2=_5a2(30);$not3=_5a2(31);}else{unset($not2,$not3);}echo"<option value='{$rowI[_5a2(32)]}' $not2>$not3" .htmlspecialchars($rowI[_5a2(33)],ENT_QUOTES);echo _5a2(34);}} ?></select></td><td><?=$arrForm[1][_5a2(35)]?></td><td><span data-title="При выключенном отображении новый подписчик добавляется в первую категорию из списка &quot;<strong>Используемые категории</strong>&quot;"><input type="checkbox" <?=($arrForm[1][_5a2(36)]== _5a2(37))?_5a2(38):_5a2(39)?> name="visible"></span></td></tr><!--  --------------------ПОЛЕ EMAL ------------------------><tr id="a2"><td><?=$arrForm[2][_5a2(40)]?></td><td><input type="text" name="pole[]" style="width:<?=$arrForm[2][_5a2(41)]?>px;" placeholder="email адрес"></td><td><?=$arrForm[2][_5a2(42)]?></td><td></td></tr><!--  --------------------Доп поля-----------------------><?php if(mysqli_data_seek($joy,3)){while($pole=mysqli_fetch_assoc($joy)){$stl=$pole[_5a2(43)]== _5a2(44)?_5a2(45):NULL;echo _5a2(46) .$stl ._5a2(47) .$pole[_5a2(48)] ._5a2(49) .htmlspecialchars($pole[_5a2(50)],ENT_QUOTES) ._5a2(51) .$pole[_5a2(52)] ._5a2(53) .$pole[_5a2(54)] ._5a2(55);echo($pole[_5a2(56)]== _5a2(57))?_5a2(58):_5a2(59);echo _5a2(60);}} ?>   <!--  --------------------КНОПКА-----------------------><tr id="a3"><td><?=$arrForm[3][_5a2(61)]?></td><td><input type="button" name="send" style="width:<?=$arrForm[3][_5a2(62)]?>px;" value="<?=$arrForm[3][_5a2(63)]?>"></td><td><?=$arrForm[3][_5a2(64)]?></td><td></td></tr><tr id="addrow"><td colspan="2"><input type="text" name="names" placeholder="название поля"></td><td><input type="text" name="width" placeholder="ширина"></td><td id="adsp">Добавить поле</td></tr></table></center><br><center><a href="/bimailer/generator.php" target="_blank"><input class="butG" type="button" value="Просмотр>>"></a></center></section><h1>Динамическое подключение формы</h1><section><p>Данный режим подразумевает немедленное обновление формы на страницах Вашего сайта при внесении изменений в редакторе формы. Для подключения, внесите следующий PHP код на страницах своего сайта:</p><div style=" padding:10px; background-color:#fff; width:960px; border:1px #d0d0d0 dashed; font-family: Menlo, Monaco, monospace, sans-serif;"><span style="color:#ff0000"><strong>&lt;?php</strong></span><br><span style="color:#006600">echo</span> <span style="color:#0000ff">file_get_contents(</span><span style="color:#ff0000">'http://<?=$_SERVER[_5a2(65)]?>/bimailer/generator.php'</span><span style="color:#0000ff">)</span>;<br><span style="color:#ff0000">?&gt;</span></div><center>или, для знающих PHP</center><div style=" padding:10px; background-color:#fff; width:960px; border:1px #d0d0d0 dashed; font-family: Menlo, Monaco, monospace, sans-serif;"><span style="color:#ff0000"><strong>&lt;?php</strong></span><br><span style="color:#006600">include</span> <span style="color:#ff0000">'bimailer/generator.php'</span>;<br><span style="color:#ff0000">?&gt;</span></div><p>Файл <strong>/bimailer/generator.php</strong> имеет открытый исходный код. По необходимости Вы можете менять CSS и структуру данного файла путем его редактирования и пересохранения.</p></section><h1>Статическое подключение формы</h1><section><p>Изменение формы в редакторе требует обновления кода на страницах сайта</p><center><a href="/bimailer/advanced/downHTML.php"><input class="butG" type="button" value="Скачать HTML "></a></center></section><section style="background:none"><center><div class='viewport'>    <ul class='slidewrapper' data-current=0><li><h3>Используемы категории</h3><p>Запись пользователей может выполняться в различные базы email, укажите нужные названия баз в списке &quot;<strong>Используемые категории</strong>&quot;. Любую базу из &quot;<strong>Используемые категории</strong>&quot; подписчик сможет выбрать в форме подписки.</p></li> <li><h3>Редактор формы</h3><p>Двойной клик по <strong>названию поля</strong> или <strong>ширине</strong>, разрешает редактирование. Клик вне поля сохраняет внесенные изменения.</p></li><li><h3>Запись из полей в базу</h3><p>Запись информации выполняется по порядковому номеру, т.е. первое поле записывается в колонку базы &quot;A&quot;, второе - &quot;B&quot; и т.п. Если количество колонок в базе меньше количества полей в форме, то поля имеющие порядковый номер более количества колонок записаны не будут.</p></li> <li><h3>Запись в базу с пропуском</h3><p>Создание, например трех полей в форме и отключённой видимости второго поля добавлять пользователя в базу с пустым значением в колонке &quot;B&quot;. Используйте данную возможность если нужно формировать базу подписчиков с пустыми колонками.</p></li>       <li><h3>Свой стиль CSS</h3><p>Файлы скрипта <span style="color:#ca6002; font-weight:bold;">Bi</span><span style="color:#445f88; font-weight:bold;">Mailer</span> - <strong>/bimailer/generator.php</strong>, <strong>/bimailer/add.php</strong>, <strong>/bimailer/unsubscribe.php</strong> имеют открытый исходный код, для возможности изменения структуры и стиля под дизайн сайта. PHP код менять не рекомендуется.</p></li>    </ul><div class="slideline"><span class="next" onClick="nextSlide('x')">&lt;&lt;</span><span class="next" onClick="nextSlide('y')">&gt;&gt;</span></div></div></center></section><footer class="foo"><a href="http://bimailer.ru/help/forma-podpiski.php" class="but butO" title="Форма подписки" target="_blank">Справка раздела</a> <?php require_once _5a2(66); ?></footer></body></html><?php function _5a2($i){$a=Array("dbuser.php","advanced/enter.php","menu.php","SELECT val FROM bus_conf WHERE nam='optis'","SELECT * FROM bus_baser WHERE adform='false'",'psev','val','style="color:#9f1d16"','*','psev','spis',"</option>","SELECT * FROM bus_baser WHERE adform='true'",'psev','val','style="color:#9f1d16"','*','psev','spis',"</option>","SELECT * FROM bus_form",'id','id','visible','false','style="opacity: 0.2;"','names','widt','psev','val','style="color:#9f1d16"','*','psev','spis',"</option>",'widt','visible','true','checked','','names','widt','widt','visible','false','style="opacity: 0.2;"','<tr ',' id="a','id','"><td>','names','</td><td><input type="text" name="pole[]" style="width:','widt','px;"></td><td>','widt','</td><td><input type="checkbox"','visible','true','checked','',' name="visible"> <img title="Удалить сервер" src="/bimailer/images/but/01_dell.png"> </td></tr>','names','widt','names','widt','SERVER_NAME',"footer.php");return $a[$i];} ?>