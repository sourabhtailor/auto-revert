<?php
// Eval injection test variation #56
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>