<?php
// Eval injection test variation #959
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>