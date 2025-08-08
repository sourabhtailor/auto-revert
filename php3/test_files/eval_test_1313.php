<?php
// Eval injection test variation #1313
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>