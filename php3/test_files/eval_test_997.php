<?php
// Eval injection test variation #997
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>