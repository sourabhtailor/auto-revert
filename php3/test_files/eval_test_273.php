<?php
// Eval injection test variation #273
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>