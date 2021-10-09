<?php
echo filetype("abc.txt");
echo "<br>";

echo filesize("abc.txt");
echo "<br>";

echo date("Y-m-d",fileatime("abc.txt"));
echo "<br>";

echo"<pre>";
print_r(stat("abc.txt"));
echo "<br>";

echo file_get_contents("abc.txt");
echo"<br>";

print_r(file("abc.txt"));
echo"<br>";

file_put_contents("a.txt", "ajsjjsjssjsj,ajajskks");
echo "<br>";

$aaa=fopen("abc.txt", "r");
echo fread($aaa, filesize("abc.txt"));
fclose($aaa);
echo "<br>";


$handle=fopen("abc.txt", "r");
fread($handle, 9);
echo ftell($handle);
rewind($handle);
echo"<br>";
echo ftell($handle);

$file=fopen("abc.txt", "r");
while(!feof($file)){
	echo fgetc($file);
}
fclose($file);
?>