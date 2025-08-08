<?php
// Eval injection test variation #650
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>