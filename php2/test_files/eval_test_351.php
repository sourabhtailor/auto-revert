<?php
// Eval injection test variation #351
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>