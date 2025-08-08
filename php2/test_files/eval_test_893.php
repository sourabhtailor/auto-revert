<?php
// Eval injection test variation #893
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>