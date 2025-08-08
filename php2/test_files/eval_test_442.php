<?php
// Eval injection test variation #442
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>