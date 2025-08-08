<?php
// Eval injection test variation #398
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>