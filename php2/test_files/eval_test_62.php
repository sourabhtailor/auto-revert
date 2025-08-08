<?php
// Eval injection test variation #62
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>