<?php
// Eval injection test variation #199
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>