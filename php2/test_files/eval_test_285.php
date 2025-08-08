<?php
// Eval injection test variation #285
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>