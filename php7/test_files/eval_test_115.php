<?php
// Eval injection test variation #115
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>