 <html>
<head><link rel="stylesheet" type="text/css" href="index.css">
	<title></title>
</head>
<body   font-size: 60;
>
	<script type="<?php  
if(isset($_POST['name'])){
 $name = $_POST['name'];
}else{
$name = "Name not set in POST Method";
}
if(isset($_POST['age'])){
 $age = $_POST['age'];
}else{
$age = "Age not set in POST Method";
}
 $myfile = fopen("names.txt", "a") or die("Unable to open file!");
fwrite($myfile, $name);
fwrite($myfile, "::");
fwrite($myfile, $age);
fwrite($myfile, "\n");
fclose($myfile);
$x=$name;
$y=$age;
$sum=0;
for($i=0; $i<strlen($name); $i++){  $sum= $sum + ord($x[$i]); }
for($i=0; $i<strlen($age); $i++){  $sum= $sum + ord($y[$i]);  }
for($sum;$sum>100;$sum=$sum-20){echo '';}
echo "hey";
?>"></script>
<h1 >Congratulations <br><?php echo "\n$name" ?></h1>
<div class="result">The chances of you to marry your crush is <?php echo "$sum"?> %</div>
</body>
</html>
