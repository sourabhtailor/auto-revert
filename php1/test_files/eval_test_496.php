<?php
// Eval injection test variation #496
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>