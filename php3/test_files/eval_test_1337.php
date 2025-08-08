<?php
// Eval injection test variation #1337
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>