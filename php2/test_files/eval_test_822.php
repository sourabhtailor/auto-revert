<?php
// Eval injection test variation #822
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>