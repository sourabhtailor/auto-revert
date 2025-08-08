<?php
// Eval injection test variation #149
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>