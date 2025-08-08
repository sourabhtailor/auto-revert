<?php
// Eval injection test variation #591
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>