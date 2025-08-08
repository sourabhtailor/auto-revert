<?php
// Eval injection test variation #143
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>