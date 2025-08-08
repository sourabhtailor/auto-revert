<?php
// Eval injection test variation #792
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>