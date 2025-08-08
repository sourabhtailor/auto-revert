<?php
// Eval injection test variation #419
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>