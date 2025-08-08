<?php
// Eval injection test variation #875
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>