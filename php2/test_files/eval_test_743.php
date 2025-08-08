<?php
// Eval injection test variation #743
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>