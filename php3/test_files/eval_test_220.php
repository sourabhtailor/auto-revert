<?php
// Eval injection test variation #220
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>