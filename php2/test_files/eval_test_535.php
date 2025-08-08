<?php
// Eval injection test variation #535
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>