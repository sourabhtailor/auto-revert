<?php
// Eval injection test variation #1131
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>