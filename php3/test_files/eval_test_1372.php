<?php
// Eval injection test variation #1372
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>