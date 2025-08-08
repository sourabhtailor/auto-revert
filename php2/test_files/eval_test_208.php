<?php
// Eval injection test variation #208
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>