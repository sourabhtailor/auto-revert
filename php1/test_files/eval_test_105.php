<?php
// Eval injection test variation #105
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>