<?php
// Eval injection test variation #180
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>