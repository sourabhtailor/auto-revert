<?php
// Eval injection test variation #578
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>