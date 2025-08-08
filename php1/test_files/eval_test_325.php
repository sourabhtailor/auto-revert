<?php
// Eval injection test variation #325
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>