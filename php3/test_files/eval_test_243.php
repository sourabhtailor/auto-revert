<?php
// Eval injection test variation #243
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>