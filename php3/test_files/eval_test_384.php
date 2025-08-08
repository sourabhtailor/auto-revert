<?php
// Eval injection test variation #384
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>