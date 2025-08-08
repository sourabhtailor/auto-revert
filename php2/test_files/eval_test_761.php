<?php
// Eval injection test variation #761
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>