<?php
// Eval injection test variation #12
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>