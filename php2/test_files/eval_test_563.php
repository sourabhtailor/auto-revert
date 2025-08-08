<?php
// Eval injection test variation #563
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>