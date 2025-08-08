<?php
// Eval injection test variation #723
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>