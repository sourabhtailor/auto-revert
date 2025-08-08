<?php
// Eval injection test variation #425
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>