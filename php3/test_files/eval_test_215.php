<?php
// Eval injection test variation #215
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>