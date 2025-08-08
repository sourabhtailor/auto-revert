<?php
// Eval injection test variation #298
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>