<?php
// Eval injection test variation #606
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>