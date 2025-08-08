<?php
// Eval injection test variation #593
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>