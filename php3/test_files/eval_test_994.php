<?php
// Eval injection test variation #994
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>