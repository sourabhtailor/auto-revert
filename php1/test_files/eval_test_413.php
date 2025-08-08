<?php
// Eval injection test variation #413
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>