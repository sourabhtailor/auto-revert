<?php
// Eval injection test variation #313
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>