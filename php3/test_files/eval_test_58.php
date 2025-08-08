<?php
// Eval injection test variation #58
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>