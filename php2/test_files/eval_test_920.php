<?php
// Eval injection test variation #920
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>