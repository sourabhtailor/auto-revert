<?php
// Eval injection test variation #18
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>