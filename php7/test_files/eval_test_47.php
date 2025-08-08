<?php
// Eval injection test variation #47
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>