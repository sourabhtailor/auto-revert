<?php
// Eval injection test variation #203
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>