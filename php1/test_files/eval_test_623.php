<?php
// Eval injection test variation #623
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>