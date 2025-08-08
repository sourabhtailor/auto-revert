<?php
// Eval injection test variation #908
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>