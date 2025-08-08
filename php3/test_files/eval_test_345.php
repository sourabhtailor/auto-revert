<?php
// Eval injection test variation #345
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>