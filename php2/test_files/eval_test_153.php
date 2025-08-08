<?php
// Eval injection test variation #153
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>