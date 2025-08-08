<?php
// Eval injection test variation #820
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>