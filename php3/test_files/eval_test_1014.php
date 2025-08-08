<?php
// Eval injection test variation #1014
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>