<?php
// Eval injection test variation #619
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>