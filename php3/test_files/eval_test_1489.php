<?php
// Eval injection test variation #1489
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>