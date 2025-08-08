<?php
// Eval injection test variation #943
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>