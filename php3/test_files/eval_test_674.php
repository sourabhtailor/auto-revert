<?php
// Eval injection test variation #674
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>