<?php
// Eval injection test variation #671
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>