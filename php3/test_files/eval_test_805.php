<?php
// Eval injection test variation #805
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>