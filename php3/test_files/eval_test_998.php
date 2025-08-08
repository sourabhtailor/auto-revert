<?php
// Eval injection test variation #998
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>