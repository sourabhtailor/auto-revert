<?php
// Eval injection test variation #932
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>