<?php
	// Display Facebook fans count in full text
function fb_fan_count($facebook_name){
	echo "estoy en: fb_fan_count";
	echo "----------------------";
    // Example: https://graph.facebook.com/digimantra
    $data = json_decode(file_get_contents("https://graph.facebook.com/".$facebook_name));
    echo $data;
	echo "<br/>";
    echo $data->likes;
	echo "<br/>";
	echo "----------------------";
}
?>