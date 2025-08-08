<?php
// Eval injection test variation #11
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>