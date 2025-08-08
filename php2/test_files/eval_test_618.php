<?php
// Eval injection test variation #618
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>