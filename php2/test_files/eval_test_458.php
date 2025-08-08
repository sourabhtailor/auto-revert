<?php
// Eval injection test variation #458
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>