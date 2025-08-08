<?php
// Eval injection test variation #810
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>