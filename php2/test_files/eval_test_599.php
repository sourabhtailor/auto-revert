<?php
// Eval injection test variation #599
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>