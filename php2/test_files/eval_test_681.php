<?php
// Eval injection test variation #681
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>