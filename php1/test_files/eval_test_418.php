<?php
// Eval injection test variation #418
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>