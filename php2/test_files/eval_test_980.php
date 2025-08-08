<?php
// Eval injection test variation #980
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>