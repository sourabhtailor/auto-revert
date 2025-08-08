<?php
// Eval injection test variation #613
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>