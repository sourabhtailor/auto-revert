<?php
// Eval injection test variation #537
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>