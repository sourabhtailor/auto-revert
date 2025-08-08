<?php
// Eval injection test variation #23
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>