<?php
// Eval injection test variation #741
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>