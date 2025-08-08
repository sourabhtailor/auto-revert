<?php
// Eval injection test variation #631
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>