<?php
// Eval injection test variation #1457
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>