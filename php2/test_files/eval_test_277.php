<?php
// Eval injection test variation #277
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>