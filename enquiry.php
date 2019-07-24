
<?
$subject="from ".$_GET['name'];
$subject="from ".$_GET['phone'];
$headers= "From: ".$_GET['email']."\n";
 $headers.='Content-type: text/html; charset=iso-8859-1';
mail("suhail@gsearch.co.in, yazdan.suhail@gmail.com", $subject,  "
<html>
<head>
 <title>Contact letter</title>
</head>
<body>

<br>
  ".$_GET['message']."
</body>
</html>" , $headers);
echo ("Your message was successfully sent!");
?>
<script>
	resizeTo(300, 300)
	//window.close()
</script>