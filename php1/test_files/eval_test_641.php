<?php
// Eval injection test variation #641
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>