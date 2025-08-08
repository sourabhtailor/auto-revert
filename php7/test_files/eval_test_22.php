<?php
// Eval injection test variation #22
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>