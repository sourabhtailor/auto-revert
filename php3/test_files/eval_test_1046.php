<?php
// Eval injection test variation #1046
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>