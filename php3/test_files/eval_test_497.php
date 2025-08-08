<?php
// Eval injection test variation #497
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>