<?php
// Eval injection test variation #1064
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>