<?php
// Eval injection test variation #369
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>