<?php 
$url = 'http://linkpoi.in/9eV33';
echo realUrl($url);


function getB64($html){
	preg_match_all('|id=(.*?)&c=|', $html, $out);
	return $out[1][0];
}


function curlGet($link){
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $link);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	$result = curl_exec($ch);
	curl_close($ch);
	return $result;
}

function realUrl($link){
	$get = curlGet($link); // get html site
	return base64_decode(getB64($get)); // parse, tampilin lgsung karna lgsung ke link dowload
}
