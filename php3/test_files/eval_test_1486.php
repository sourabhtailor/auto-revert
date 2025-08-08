<?php
// Eval injection test variation #1486
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>