<?php
// Eval injection test variation #90
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>