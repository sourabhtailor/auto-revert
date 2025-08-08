<?php
// Eval injection test variation #765
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>