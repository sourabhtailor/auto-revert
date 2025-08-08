<?php
// Eval injection test variation #794
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>