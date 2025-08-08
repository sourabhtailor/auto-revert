<?php
// Eval injection test variation #923
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>