<?php
$seconds_to_cache = 3600;
$ts = gmdate("D, d M Y H:i:s", time() + $seconds_to_cache) . " GMT";
header("Expires: $ts");
header("Pragma: cache");
header("Cache-Control: max-age=$seconds_to_cache");
header("Content-type: application/json");

$arr = [
    "name" => "Dom",
    "age" => 46,
    "occupation" => "Web Developer"
];

echo json_encode($arr);

?>