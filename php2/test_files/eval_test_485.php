<?php
// Eval injection test variation #485
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>