<?php
// Eval injection test variation #337
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>