<?php
// Eval injection test variation #59
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>