<?php
// Eval injection test variation #533
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>