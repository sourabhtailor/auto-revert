<?php
// Eval injection test variation #877
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>