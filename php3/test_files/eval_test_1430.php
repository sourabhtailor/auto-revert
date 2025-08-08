<?php
// Eval injection test variation #1430
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>