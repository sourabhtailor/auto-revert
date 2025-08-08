<?php
// Eval injection test variation #1441
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>