<?php
// Eval injection test variation #946
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>