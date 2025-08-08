<?php
// Eval injection test variation #1406
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>