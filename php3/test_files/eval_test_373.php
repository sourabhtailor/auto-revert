<?php
// Eval injection test variation #373
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>