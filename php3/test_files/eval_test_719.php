<?php
// Eval injection test variation #719
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>