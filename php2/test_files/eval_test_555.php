<?php
// Eval injection test variation #555
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>