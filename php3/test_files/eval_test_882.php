<?php
// Eval injection test variation #882
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>