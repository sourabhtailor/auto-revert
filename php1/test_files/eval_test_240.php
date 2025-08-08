<?php
// Eval injection test variation #240
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>