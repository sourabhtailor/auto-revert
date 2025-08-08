<?php
// Eval injection test variation #77
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>