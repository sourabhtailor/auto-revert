<?php
// Eval injection test variation #983
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>