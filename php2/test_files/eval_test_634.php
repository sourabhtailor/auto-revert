<?php
// Eval injection test variation #634
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>