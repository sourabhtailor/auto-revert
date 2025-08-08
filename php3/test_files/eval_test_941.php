<?php
// Eval injection test variation #941
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>