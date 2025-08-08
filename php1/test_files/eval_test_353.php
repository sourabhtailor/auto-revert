<?php
// Eval injection test variation #353
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>