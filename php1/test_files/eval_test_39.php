<?php
// Eval injection test variation #39
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>