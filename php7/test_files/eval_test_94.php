<?php
// Eval injection test variation #94
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>