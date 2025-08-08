<?php
// Eval injection test variation #627
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>