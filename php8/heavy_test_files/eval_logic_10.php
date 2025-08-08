<?php
// Eval with control logic #10
$code = $_GET['run'] ?? 'echo "safe";';
if (strpos($code, 'system') === false) {
    eval($code);
} else {
    echo "Blocked dangerous code.";
}
?>