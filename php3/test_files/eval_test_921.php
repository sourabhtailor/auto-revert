<?php
// Eval injection test variation #921
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>