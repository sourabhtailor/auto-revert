<?php
// Eval injection test variation #409
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>