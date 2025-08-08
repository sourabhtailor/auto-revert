<?php
// Eval injection test variation #109
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>