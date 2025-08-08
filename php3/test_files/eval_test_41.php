<?php
// Eval injection test variation #41
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>