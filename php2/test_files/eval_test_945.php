<?php
// Eval injection test variation #945
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>