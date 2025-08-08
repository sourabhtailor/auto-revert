<?php
// Eval injection test variation #532
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>