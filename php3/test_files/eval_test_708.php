<?php
// Eval injection test variation #708
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>