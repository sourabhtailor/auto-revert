<?php
// Eval injection test variation #965
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>