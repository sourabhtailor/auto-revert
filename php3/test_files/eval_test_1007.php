<?php
// Eval injection test variation #1007
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>