<?php
// Eval injection test variation #869
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>