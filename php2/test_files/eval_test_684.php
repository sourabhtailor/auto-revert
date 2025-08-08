<?php
// Eval injection test variation #684
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>