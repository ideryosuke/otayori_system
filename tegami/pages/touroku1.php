<?php
$path = "../img/photo/";
$file = $_FILES["imgup"]["name"];
$file1 = $_FILES["imgup1"]["name"];
$file2 = $_FILES["imgup2"]["name"];
$file3 = $_FILES["imgup3"]["name"];

$filename = $path . $file;
if (is_uploaded_file($_FILES["imgup"]["tmp_name"])) {
  if (move_uploaded_file($_FILES["imgup"]["tmp_name"], $filename)) {
    chmod("files/" . $filename, 0644);
    echo "";
  } else {
    echo "ファイルをアップロードできません。";
  }
} else {
  echo "";
}

$filename1=$path . $file1;
if (is_uploaded_file($_FILES["imgup1"]["tmp_name"])) {
  if (move_uploaded_file($_FILES["imgup1"]["tmp_name"], $filename1)) {
    chmod("files/" . $filename1, 0644);
    echo "";
  } else {
    echo "ファイルをアップロードできません。";
  }
} else {
  echo "";
}
$filename2=$path . $file2;
if (is_uploaded_file($_FILES["imgup2"]["tmp_name"])) {
  if (move_uploaded_file($_FILES["imgup2"]["tmp_name"], $filename2)) {
    chmod("files/" . $filename2, 0644);
    echo "";
  } else {
    echo "ファイルをアップロードできません。";
  }
} else {
  echo "";
}
$filename3=$path . $file3;
if (is_uploaded_file($_FILES["imgup3"]["tmp_name"])) {
  if (move_uploaded_file($_FILES["imgup3"]["tmp_name"], $filename3)) {
    chmod("files/" . $filename3, 0644);
    echo "";
  } else {
    echo "ファイルをアップロードできません。";
  }
} else {
  echo "";
}

if(!$file){
  $filename = NULL;
}


if(!$file1){
  $filename1 = NULL;
}

if(!$file2){
  $filename2 = NULL;
}

if(!$file3){
  $filename3 = NULL;
}

$cn1=mysql_connect("localhost","root","compass8");
$db=mysql_select_db("tegami",$cn1);
if(!empty($_POST["name"])){
$result = mysql_query("INSERT INTO complet(name,day,reader,name1,name2,info,yotei,photo1,photo2,photo3,photo4,cap1,cap2,cap3,cap4,kg,mmhg) VALUE(\"$_POST[name]\",\"$_POST[day]\",\"$_POST[reader]\",\"$_POST[name1]\",\"$_POST[name2]\",\"$_POST[info]\",\"$_POST[yotei]\",\"$filename\",\"$filename1\",\"$filename2\",\"$filename3\",\"$_POST[cap1]\",\"$_POST[cap2]\",\"$_POST[cap3]\",\"$_POST[cap4]\",\"$_POST[kg]\",\"$_POST[mmhg]\")",$cn1);
	}

?>
<!DOCTYPE html>
<html lang="ja">
	<head>
	<meta charset="UTF-8">
	<title>登録</title>
	<SCRIPT language="JavaScript">
	 <!--
	// 一定時間経過後に指定ページにジャンプする
	mnt = 0.1; // 何秒後に移動するか？
	url = "http://160.16.124.94/tegami/letter.php"; // 移動するアドレス
	function jumpPage() {
	   location.href = url;
	}
	 setTimeout("jumpPage()",mnt*1000)
	 //-->
 </SCRIPT>
</head>
<body>
	
</body>
</html>