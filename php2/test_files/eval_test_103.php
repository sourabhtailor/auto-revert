<?php
// Eval injection test variation #103
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>