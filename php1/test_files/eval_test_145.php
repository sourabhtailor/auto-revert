<?php
// Eval injection test variation #145
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>