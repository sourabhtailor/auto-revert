<?php
// Eval injection test variation #548
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>