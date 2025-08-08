<?php
// Eval injection test variation #828
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>