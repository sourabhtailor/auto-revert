<?php
// Eval injection test variation #1369
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>