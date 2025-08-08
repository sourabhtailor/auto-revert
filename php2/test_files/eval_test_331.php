<?php
// Eval injection test variation #331
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>