<?php
// Eval injection test variation #204
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>