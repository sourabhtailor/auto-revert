<?php
// Eval injection test variation #654
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>