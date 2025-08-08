<?php
// Eval injection test variation #1067
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>