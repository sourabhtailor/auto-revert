<?php
// Eval injection test variation #1141
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>