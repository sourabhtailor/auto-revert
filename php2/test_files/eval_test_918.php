<?php
// Eval injection test variation #918
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>