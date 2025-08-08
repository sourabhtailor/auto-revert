<?php
// Eval injection test variation #1446
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>