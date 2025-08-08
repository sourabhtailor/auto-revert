<?php
// Eval injection test variation #757
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>