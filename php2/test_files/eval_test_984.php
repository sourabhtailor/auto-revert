<?php
// Eval injection test variation #984
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>