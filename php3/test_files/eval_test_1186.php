<?php
// Eval injection test variation #1186
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>