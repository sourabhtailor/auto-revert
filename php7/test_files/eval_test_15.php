<?php
// Eval injection test variation #15
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>