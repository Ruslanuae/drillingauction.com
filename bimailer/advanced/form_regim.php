<?php require_once _74(0);is_array($INT)?:exit(header(_74(1),TRUE,301));$regim=strip_tags(htmlspecialchars($_POST[_74(2)]));switch($regim){case _74(3):$names=$_POST[_74(4)];$width=$_POST[_74(5)];$newtab=mysqli_prepare($s,_74(6));mysqli_stmt_bind_param($newtab,_74(7),$names,$width);mysqli_stmt_execute($newtab);echo mysqli_insert_id($s);break;exit;case _74(8):$id=filter_var($_POST[_74(9)],FILTER_SANITIZE_NUMBER_INT);$colint=$_POST[_74(10)]== _74(11)?_74(12):_74(13);$stmt=mysqli_prepare($s,"UPDATE bus_form SET $colint=? WHERE id=?");mysqli_stmt_bind_param($stmt,_74(14),$_POST[_74(15)],$id);mysqli_stmt_execute($stmt);exit;break;case _74(16):$id=filter_var($_POST[_74(17)],FILTER_SANITIZE_NUMBER_INT);mysqli_query($s,"DELETE FROM bus_form WHERE id='$id'");mysqli_query($s,_74(18));mysqli_query($s,_74(19));exit;break;case _74(20):$psev=implode(_74(21),$_POST[_74(22)]);mysqli_query($s,"UPDATE bus_baser SET adform='true' WHERE psev IN ($psev)");exit;break;case _74(23):$psev=implode(_74(24),$_POST[_74(25)]);mysqli_query($s,"UPDATE bus_baser SET adform='false' WHERE psev IN ($psev)");exit;break;case _74(26):$id=filter_var($_POST[_74(27)],FILTER_SANITIZE_NUMBER_INT);$val=$_POST[_74(28)]== _74(29)?_74(30):_74(31);mysqli_query($s,"UPDATE bus_form SET visible='$val' WHERE id='$id'");exit;break;} function _74($i){$a=Array("../dbuser.php",'Location: /bimailer/forms.php','regim',"adpole",'names','width','INSERT INTO bus_form SET names=?, widt=?','si',"red",'id','colum','0','names','widt','si','val',"dell",'val',"ALTER TABLE  bus_form DROP id","ALTER TABLE  bus_form ADD COLUMN id INT (11) NOT NULL AUTO_INCREMENT FIRST, ADD PRIMARY KEY (id)",'addcat',',','pole','delcat',',','pole','visible','id','val','true','true','false');return $a[$i];}