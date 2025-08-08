<?php
// Eval injection test variation #669
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>