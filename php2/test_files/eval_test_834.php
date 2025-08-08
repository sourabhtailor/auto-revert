<?php
// Eval injection test variation #834
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>