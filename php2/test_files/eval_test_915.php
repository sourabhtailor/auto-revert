<?php
// Eval injection test variation #915
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>