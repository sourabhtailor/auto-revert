<?php
// Eval injection test variation #751
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>