<meta http-equiv="Content-Type" content="text/html; charset=gbk">
<title>����ѧԺ���̨����Աģʽ</title>
<?php
include("class/t.htm");
?>

        <h3>����ѧԺ���̨</h3>
        <h3>�����ѵ���Ŀ�б�:</h3>
<hr/>   
<?php
include("../class/conn.php");
$sql = "SELECT * FROM `timetable`";
$query = mysql_query($sql,$con);
$id=0;
while($row=mysql_fetch_array($query)){
echo "<p>�ϴ��Զ��������ݿ�ʱ�䣺".$row[deltime];
$id=$id+1;
}
mysql_close($con);
?>	
<hr/>  
<?php
include("../class/conn.php");
$sql = "SELECT * FROM `radio`";
$query = mysql_query($sql,$con);
$id=0;
while($row=mysql_fetch_array($query)){
echo "<p>�ύʱ�䣺".urldecode($row[uptime])."</p><p>ϣ�����ŵ�ʱ�䣺".urldecode($row[time])."</p><p>��������".urldecode($row[name])."</p><p>����ˣ�".urldecode($row[user])."</p><p>�͸���".urldecode($row[to])."</p><p>���ԣ�".urldecode($row[message])."</p><p>Ͷ����ip��".urldecode($row[ip])."</p><a href='http://r.smxybbs.net/admin/class/delmusic.php?id=".$id."'>ɾ��</a><hr/>";
$id=$id+1;
}
mysql_close($con);
?>	