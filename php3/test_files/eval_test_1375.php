<?php
// Eval injection test variation #1375
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>