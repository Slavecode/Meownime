<title>Meownime</title>
<center>
<font color="green" size="4">
<br>
<pre>
  __  __                    _   _ _                
 |  \/  | ___  _____      _| \ | (_)_ __ ___   ___ 
 | |\/| |/ _ \/ _ \ \ /\ / /  \| | | '_ ` _ \ / _ \
 | |  | |  __/ (_) \ V  V /| |\  | | | | | | |  __/
 |_|  |_|\___|\___/ \_/\_/ |_| \_|_|_| |_| |_|\___|
                                                                                        
</pre>
</font>
<form action="meownime.php" method="get">
<link href="http://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet" type="text/css">
<input type="text" style="width:20%;" placeholder="https://meownime.com/gotoubun-yome-sub-indo/" name="url"><br>
<input type="submit" name="mek" value=">">
</form>
</center>
<body bgcolor="black" > 
<style>
.memek {
  margin: auto;
  width: 70%;
  border: 4px solid crimson;
  padding: 3px;
}

.percent {
  width: 20%;
  background-color: silver;
  border: 1px solid red;
}

span { 
    display:block;
    width:90%;
    word-wrap:break-word;
}

</style>
<?php
	function wordFilter($text)
{
    $filtered_text = $text;
    $filtered_text = str_replace('https://www.facebook.com/meownime/?ref=bookmarks', '   ', $filtered_text);
    $filtered_text = str_replace('https://disqus.com/?ref_noscript', '   ', $filtered_text);
	$filtered_text = str_replace('http://colorlib.com/', '   ', $filtered_text);
	$filtered_text = str_replace('http://wordpress.org/', '   ', $filtered_text);
	$filtered_text = str_replace('[comments powered by Disqus.]', '', $filtered_text);
	$filtered_text = str_replace('[Colorlib]', '', $filtered_text);
	$filtered_text = str_replace('[WordPress]', '', $filtered_text);
	$filtered_text = str_replace('[Fanpage]', '   ', $filtered_text);
    // ... and so on
    return $filtered_text;
}

if(isset($_GET['mek'])){

$url = $_GET['url'];
$pUrl = parse_url($url);

// Load the HTML into a DOMDocument
$doc = new DOMDocument;
@$doc->loadHTMLFile($url);

// Look for all the 'a' elements
$links = $doc->getElementsByTagName('a');
echo '<font face=consolas color=green><center><h1>'.$url.'</h1></center>';
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
	
  echo wordFilter('<center><a href="'.$link->getAttribute('href').'" rel="nofollow" target="_blank"><font size=2 face=consolas color=royalblue><span>' .$link->getAttribute('href').'</div></font></a></span>');

	echo wordFilter('['.$link->textContent.']<p>');
    $numLinks++;

}

/* echo "Count: $numLinks\n"; */
echo "</font>";
}
