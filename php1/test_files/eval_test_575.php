<?php
// Eval injection test variation #575
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>