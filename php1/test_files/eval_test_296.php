<?php
// Eval injection test variation #296
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>