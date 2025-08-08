<?php
// Eval injection test variation #976
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>