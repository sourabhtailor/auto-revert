<?php
// Eval injection test variation #349
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>