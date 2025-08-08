<?php
// Eval injection test variation #981
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>