<?php
// Eval injection test variation #986
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>