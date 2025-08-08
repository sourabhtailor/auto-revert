<?php
// Eval injection test variation #1218
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>