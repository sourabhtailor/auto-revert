<?php
// Eval injection test variation #610
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>