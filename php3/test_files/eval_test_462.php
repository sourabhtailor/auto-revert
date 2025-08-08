<?php
// Eval injection test variation #462
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>