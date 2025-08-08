<?php
// Eval injection test variation #439
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>