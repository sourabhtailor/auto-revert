<?php
// Eval injection test variation #798
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>