<?php
// Eval injection test variation #1327
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>