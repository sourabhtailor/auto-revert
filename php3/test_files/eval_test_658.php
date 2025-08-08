<?php
// Eval injection test variation #658
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>