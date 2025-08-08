<?php
// Eval injection test variation #252
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>