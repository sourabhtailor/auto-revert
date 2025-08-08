<?php
// Eval injection test variation #581
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>