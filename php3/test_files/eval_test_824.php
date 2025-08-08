<?php
// Eval injection test variation #824
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>