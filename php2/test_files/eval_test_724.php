<?php
// Eval injection test variation #724
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>