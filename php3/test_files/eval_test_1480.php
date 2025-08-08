<?php
// Eval injection test variation #1480
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>