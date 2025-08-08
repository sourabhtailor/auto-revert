<?php
// Eval injection test variation #1156
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>