<center>
<font color="green" size="4">
<br>
<pre>
     _          _ _        _    _ 
    / \   _ __ (_) |_ ___ | | _(_)
   / _ \ | '_ \| | __/ _ \| |/ / |
  / ___ \| | | | | || (_) |   <| |
 /_/   \_\_| |_|_|\__\___/|_|\_\_|
</pre>
</font>
<font size='5'>*</font>
<a href="main.php" rel="nofollow" target="_blank">
<font face='Consolas' size='3' color='green'><b>Show index to get content.</b></font></span></a>
<br><br>
<form action="anitoki.php" method="get">
<input type="text" style="width:25%;" placeholder="http://anitoki.com/2019/02/gotoubun-no-hanayome-06-subtitle-indonesia/" name="url"><br>
<input type="submit" name="mek" value=">">
</form>
</center>
<body bgcolor="black" > 
<style>

</style>
<center>

<?php
function wordFilter($text)
{
    $filtered_text = $text;
    $filtered_text = str_replace('https://bit.ly/2CKmh0I', '', $filtered_text);
    $filtered_text = str_replace('https://goo.gl/VPNecd', '', $filtered_text);
	$filtered_text = str_replace('[]', '', $filtered_text);
	$filtered_text = str_replace('https://disqus.com/?ref_noscript', '', $filtered_text);
	$filtered_text = str_replace('[comments powered by Disqus.]', '', $filtered_text);
	$filtered_text = str_replace('[Colorlib]', '', $filtered_text);
	$filtered_text = str_replace('https://www.facebook.com/sharer/sharer.php?u=', '', $filtered_text);
	$filtered_text = str_replace('https://twitter.com/share?url=', '   ', $filtered_text);
	$filtered_text = str_replace('[ Facebook]', '', $filtered_text);
	$filtered_text = str_replace('[  Twitter]', '', $filtered_text);
	$filtered_text = str_replace('[ Google+]', '   ', $filtered_text);
	$filtered_text = str_replace('https://plus.google.com/share?url=', '   ', $filtered_text);
    $filtered_text = str_replace('#', '', $filtered_text);
    $filtered_text = str_replace('[Back to Top]', '', $filtered_text);
	$filtered_text = str_replace('http://anitoki.com/about-2/', '', $filtered_text);
	$filtered_text = str_replace('http://anitoki.com/dcma/', '', $filtered_text);
	$filtered_text = str_replace('http://anitoki.com/privacy-policy/', '', $filtered_text);
	$filtered_text = str_replace('https://bit.ly/2CKmh0I', '', $filtered_text);
    $filtered_text = str_replace('[]', '', $filtered_text);
	$filtered_text = str_replace('[ ]', '', $filtered_text);
	$filtered_text = str_replace('javascript:void(0);', '', $filtered_text);
	$filtered_text = str_replace('[☰]', '', $filtered_text);
	$filtered_text = str_replace('[About]', '', $filtered_text);
	$filtered_text = str_replace('[DMCA]', '', $filtered_text);
	$filtered_text = str_replace('[Privacy Policy]', '<h1>GET</H1>
	', $filtered_text);
	$filtered_text = str_replace('[ ]', '/', $filtered_text);
    // ... and so on
    return $filtered_text;
}

$url = $_GET['url'];
$pUrl = parse_url($url);
$dom = new DOMDocument();
@$dom->loadHTML($html);
// Load the HTML into a DOMDocument
$doc = new DOMDocument;
@$doc->loadHTMLFile($url);
// Look for all the 'a' elements
$links = $doc->getElementsByTagName('a');
$numLinks = 0;
foreach ($links as $link) {

    // Exclude if internal link
    $href = $link->getAttribute('href');

    if (substr($href, 0, 2) === '//') {
        // Deal with protocol relative URLs as found on Wikipedia
        $href = $pUrl['scheme'] . ':' . $href;
    }

    $pHref = @parse_url($href);
    if (!$pHref || !isset($pHref['host']) ||
        strtolower($pHref['host']) === strtolower($pUrl['host'])
    ) {
        continue;
    }

    // Increment counter otherwise
    echo wordFilter('<center><font face=consolas size=2><a href="'.$link->getAttribute('href').'" rel="nofollow" target="_blank"><font size=2 face=consolas color=lime>' .$link->getAttribute('href').'</a></font>');
	  echo wordFilter('<br><font size=2 face=consolas color=green>['.$link->textContent.']<p></font>');
    $numLinks++;

}

echo "Count: $numLinks\n";

$main =
			'PD9waHANCmVjaG8nPGJvZHkgYmdjb2xvcj0iYmxhY2siPiAnOw0KZnVuY3Rpb24gd29yZEZpbHRlcigkdGV4dCkNCnsNCgllY2hvJzxmb250IGZhY2U9Y29uc29sYXM+JzsNCiAgICAkZmlsdGVyZWRfdGV4dCA9ICR0ZXh0Ow0KCQ0KDQogICAgJGZpbHRlcmVkX3RleHQgPSBzdHJfcmVwbGFjZSgnIycsICcnLCAkZmlsdGVyZWRfdGV4dCk7DQogICAgJGZpbHRlcmVkX3RleHQgPSBzdHJfcmVwbGFjZSgnW0JhY2sgdG8gVG9wXScsICcnLCAkZmlsdGVyZWRfdGV4dCk7DQoNCgkkZmlsdGVyZWRfdGV4dCA9IHN0cl9yZXBsYWNlKCdodHRwOi8vYW5pdG9raS5jb20vYWJvdXQtMi8nLCAnJywgJGZpbHRlcmVkX3RleHQpOw0KCSRmaWx0ZXJlZF90ZXh0ID0gc3RyX3JlcGxhY2UoJ2h0dHA6Ly9hbml0b2tpLmNvbS9kY21hLycsICcnLCAkZmlsdGVyZWRfdGV4dCk7DQoJJGZpbHRlcmVkX3RleHQgPSBzdHJfcmVwbGFjZSgnaHR0cDovL2FuaXRva2kuY29tL3ByaXZhY3ktcG9saWN5LycsICcnLCAkZmlsdGVyZWRfdGV4dCk7DQoNCgkNCgkkZmlsdGVyZWRfdGV4dCA9IHN0cl9yZXBsYWNlKCdodHRwczovL2JpdC5seS8yQ0ttaDBJJywgJycsICRmaWx0ZXJlZF90ZXh0KTsNCiAgICAkZmlsdGVyZWRfdGV4dCA9IHN0cl9yZXBsYWNlKCdbXScsICcnLCAkZmlsdGVyZWRfdGV4dCk7DQoJJGZpbHRlcmVkX3RleHQgPSBzdHJfcmVwbGFjZSgnWyBdJywgJycsICRmaWx0ZXJlZF90ZXh0KTsNCgkkZmlsdGVyZWRfdGV4dCA9IHN0cl9yZXBsYWNlKCdqYXZhc2NyaXB0OnZvaWQoMCk7JywgJycsICRmaWx0ZXJlZF90ZXh0KTsNCgkkZmlsdGVyZWRfdGV4dCA9IHN0cl9yZXBsYWNlKCdb4piwXScsICcnLCAkZmlsdGVyZWRfdGV4dCk7DQoJDQoJJGZpbHRlcmVkX3RleHQgPSBzdHJfcmVwbGFjZSgnW0Fib3V0XScsICcnLCAkZmlsdGVyZWRfdGV4dCk7DQoJJGZpbHRlcmVkX3RleHQgPSBzdHJfcmVwbGFjZSgnW0RNQ0FdJywgJycsICRmaWx0ZXJlZF90ZXh0KTsNCgkkZmlsdGVyZWRfdGV4dCA9IHN0cl9yZXBsYWNlKCdbUHJpdmFjeSBQb2xpY3ldJywgJzxoMT5HRVQ8L0gxPg0KCScsICRmaWx0ZXJlZF90ZXh0KTsNCgkkZmlsdGVyZWRfdGV4dCA9IHN0cl9yZXBsYWNlKCdbIF0nLCAnLycsICRmaWx0ZXJlZF90ZXh0KTsNCgkNCgkNCgkNCgkgICAgcmV0dXJuICRmaWx0ZXJlZF90ZXh0Ow0KfQ0KDQoNCiR1cmwgPSAnaHR0cDovL2FuaXRva2kuY29tLyc7DQokcFVybCA9IHBhcnNlX3VybCgkdXJsKTsNCg0KLy8gTG9hZCB0aGUgSFRNTCBpbnRvIGEgRE9NRG9jdW1lbnQNCiRkb2MgPSBuZXcgRE9NRG9jdW1lbnQ7DQpAJGRvYy0+bG9hZEhUTUxGaWxlKCR1cmwpOw0KDQovLyBMb29rIGZvciBhbGwgdGhlICdhJyBlbGVtZW50cw0KJGxpbmtzID0gJGRvYy0+Z2V0RWxlbWVudHNCeVRhZ05hbWUoJ2EnKTsNCg0KJG51bUxpbmtzID0gMDsNCmZvcmVhY2ggKCRsaW5rcyBhcyAkbGluaykgew0KDQogICAgLy8gRXhjbHVkZSBpZiBub3QgYSBsaW5rIG9yIGhhcyAnbm9mb2xsb3cnDQogICAgcHJlZ19tYXRjaF9hbGwoJy9cUysvJywgc3RydG9sb3dlcigkbGluay0+Z2V0QXR0cmlidXRlKCdyZWwnKSksICRyZWwpOw0KICAgIGlmICghJGxpbmstPmhhc0F0dHJpYnV0ZSgnaHJlZicpIHx8IGluX2FycmF5KCdub2ZvbGxvdycsICRyZWxbMF0pKSB7DQogICAgICAgIGNvbnRpbnVlOw0KICAgIH0NCg0KICAgDQoNCiAgICAgICAvLyBJbmNyZW1lbnQgY291bnRlciBvdGhlcndpc2UNCiAgICBlY2hvIHdvcmRGaWx0ZXIoJzxmb250IGZhY2U9Y29uc29sYXM+PGNlbnRlcj4NCgk8YSBocmVmPSInLiRsaW5rLT5nZXRBdHRyaWJ1dGUoJ2hyZWYnKS4nIiByZWw9Im5vZm9sbG93IiB0YXJnZXQ9Il9ibGFuayI+PGZvbnQgc2l6ZT0yIGZhY2U9Y29uc29sYXMgY29sb3I9cm95YWxibHVlPicgLiRsaW5rLT5nZXRBdHRyaWJ1dGUoJ2hyZWYnKS4nPC9kaXY+PC9mb250PjwvYT4nKTsNCg0KCWVjaG8gd29yZEZpbHRlcignPGZvbnQgY29sb3I9Z3JlZW4+IFsnLiRsaW5rLT50ZXh0Q29udGVudC4nXTwvZm9udD48YnI+Jyk7DQogICAgJG51bUxpbmtzKys7DQoNCn0NCj8+
			';
			$file = fopen("main.php","w+");
			$write = fwrite ($file ,base64_decode($main));	
?>
