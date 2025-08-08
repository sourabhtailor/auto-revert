<?php
// Eval injection test variation #270
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>