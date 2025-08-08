<?php
// Eval injection test variation #1207
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>