<?php
// Eval injection test variation #403
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>