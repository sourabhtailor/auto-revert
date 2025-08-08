<?php
// Eval injection test variation #244
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>