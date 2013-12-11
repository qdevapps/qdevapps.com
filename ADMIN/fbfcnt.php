<?php
	// Display Facebook fans count in full text
?>
 <!DOCTYPE html>
<html>
<head>
<title>qdevapps.com || fbfcnt.php</title>
<meta http-equiv="Content-Type" content="text/html" charset="*-CH" />
</head>
<body>
<?php
fb_fan_count("pvgenp");
?>
<?php
	// Display Facebook fans count in full text
function fb_fan_count($facebook_name){
	echo "estoy en: fb_fan_count";
	echo "----------------------";
    $data = json_decode(file_get_contents("https://graph.facebook.com/".$facebook_name));
    echo $data->likes;
	echo "----------------------";
}
?>
</body>
</html>