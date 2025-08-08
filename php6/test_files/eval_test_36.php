<?php
// Eval injection test variation #36
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>