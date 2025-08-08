<?php
// Eval injection test variation #464
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>