<?php
// Eval injection test variation #853
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>