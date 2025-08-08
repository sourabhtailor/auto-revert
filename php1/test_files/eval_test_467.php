<?php
// Eval injection test variation #467
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>