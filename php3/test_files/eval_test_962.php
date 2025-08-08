<?php
// Eval injection test variation #962
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>