<?php
// Eval injection test variation #235
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>