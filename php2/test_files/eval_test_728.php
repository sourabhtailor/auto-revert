<?php
// Eval injection test variation #728
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>