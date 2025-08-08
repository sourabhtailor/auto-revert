<?php
// Eval injection test variation #762
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>