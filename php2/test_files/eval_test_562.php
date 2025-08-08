<?php
// Eval injection test variation #562
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>