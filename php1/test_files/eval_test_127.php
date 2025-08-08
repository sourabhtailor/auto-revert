<?php
// Eval injection test variation #127
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>