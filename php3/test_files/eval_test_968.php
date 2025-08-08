<?php
// Eval injection test variation #968
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>