<?php
// Eval injection test variation #772
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>