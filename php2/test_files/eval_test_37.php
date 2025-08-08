<?php
// Eval injection test variation #37
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>