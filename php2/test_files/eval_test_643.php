<?php
// Eval injection test variation #643
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>