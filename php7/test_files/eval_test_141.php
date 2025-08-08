<?php
// Eval injection test variation #141
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>