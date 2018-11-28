<?php

$author_id = $_REQUEST['id'];
$result = Author::delete($author_id);

if ($result) {
    require_once 'templates/admin/forms/answer.php';
} else {
    echo mysqli_error($mysqli);
}