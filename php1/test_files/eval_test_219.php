<?php
// Eval injection test variation #219
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>