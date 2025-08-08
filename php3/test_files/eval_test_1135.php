<?php
// Eval injection test variation #1135
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>