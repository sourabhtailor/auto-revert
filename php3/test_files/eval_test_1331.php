<?php
// Eval injection test variation #1331
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>