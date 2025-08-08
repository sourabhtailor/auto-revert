<?php
// Eval injection test variation #444
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>