<?php
// Eval injection test variation #721
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>