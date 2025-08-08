<?php
// Eval injection test variation #982
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>