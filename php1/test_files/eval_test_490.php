<?php
// Eval injection test variation #490
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>