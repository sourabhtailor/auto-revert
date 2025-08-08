<?php
// Eval injection test variation #991
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>