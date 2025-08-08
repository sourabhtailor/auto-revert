<?php
// Eval injection test variation #65
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>