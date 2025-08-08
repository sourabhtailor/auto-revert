<?php
// Eval injection test variation #607
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>