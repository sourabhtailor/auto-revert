<?php
// Eval injection test variation #1451
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>