<?php
// Eval injection test variation #987
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>