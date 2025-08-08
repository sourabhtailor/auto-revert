<?php
// Eval injection test variation #642
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>