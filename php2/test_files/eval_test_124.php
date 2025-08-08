<?php
// Eval injection test variation #124
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>