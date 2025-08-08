<?php
// Eval injection test variation #966
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>