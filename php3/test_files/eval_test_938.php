<?php
// Eval injection test variation #938
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>