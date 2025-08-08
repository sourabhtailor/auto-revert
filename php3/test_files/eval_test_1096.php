<?php
// Eval injection test variation #1096
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>