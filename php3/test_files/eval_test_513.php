<?php
// Eval injection test variation #513
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>