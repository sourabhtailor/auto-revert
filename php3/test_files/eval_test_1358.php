<?php
// Eval injection test variation #1358
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>