<?php
// Eval injection test variation #1328
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>