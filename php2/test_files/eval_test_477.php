<?php
// Eval injection test variation #477
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>