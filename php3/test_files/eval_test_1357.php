<?php
// Eval injection test variation #1357
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>