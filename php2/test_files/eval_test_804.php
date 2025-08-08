<?php
// Eval injection test variation #804
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>