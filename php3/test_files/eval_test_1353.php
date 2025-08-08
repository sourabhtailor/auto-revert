<?php
// Eval injection test variation #1353
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>