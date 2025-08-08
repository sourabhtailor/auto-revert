<?php
// Eval injection test variation #146
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>