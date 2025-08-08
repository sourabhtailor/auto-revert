<?php
// Eval injection test variation #31
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>