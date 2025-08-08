<?php
// Eval injection test variation #666
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>