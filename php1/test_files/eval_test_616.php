<?php
// Eval injection test variation #616
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>