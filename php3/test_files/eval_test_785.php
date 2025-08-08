<?php
// Eval injection test variation #785
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>