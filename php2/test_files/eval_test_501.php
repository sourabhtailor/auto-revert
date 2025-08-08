<?php
// Eval injection test variation #501
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>