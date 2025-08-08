<?php
// Eval injection test variation #343
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>