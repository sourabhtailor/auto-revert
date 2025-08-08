<?php
// Eval injection test variation #779
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>