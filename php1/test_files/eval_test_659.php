<?php
// Eval injection test variation #659
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>