<?php
// Eval injection test variation #925
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>