<?php
// Eval injection test variation #218
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>