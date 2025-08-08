<?php
// Eval injection test variation #814
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>