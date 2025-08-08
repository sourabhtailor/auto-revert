<?php
// Eval injection test variation #584
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>