<?php
// Eval injection test variation #952
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>