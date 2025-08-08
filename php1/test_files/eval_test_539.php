<?php
// Eval injection test variation #539
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>