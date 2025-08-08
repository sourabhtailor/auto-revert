<?php
// Eval injection test variation #692
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>