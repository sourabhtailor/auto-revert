<?php
// Eval injection test variation #880
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>