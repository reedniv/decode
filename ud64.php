<?php
//if (strpos($i1i, "Obfuscation provided by Unknowndevice64 - Free Online PHP Obfuscator") == false) {
//header("Location: http://ud64.com/"); die(); }

// don't judge, it works
// it's pretty easy to decrypt, try it yourself! Deobfuscator UD64

if (empty($argv[1])) die("Usage: $argv[0] <file>\n");
$coder = array("ssl"=>array("verify_peer"=>false,"verify_peer_name"=>false));
preg_match('/c0m\("([^"]+)/', file_get_contents($argv[1], false, stream_context_create($coder)), $ud64);
echo "<?php\n\n".gzinflate(convert_uudecode(base64_decode(gzinflate(base64_decode(str_rot13($ud64[1]))))))."?>\n";
?>
