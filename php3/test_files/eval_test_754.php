<?php
// Eval injection test variation #754
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>