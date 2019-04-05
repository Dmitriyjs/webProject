<?php

print "Привет, ";
print $_POST['name'];
print "!";
/*
print <<<_HTML_
<form method="post"> action='$_SERVER[PHP_SELF]'>
Введите имя (2): <input type="text" name="name">
<br>
<button type=""submit>Скажи привет (2)</button>
</form>
_HTML_;
*/
?>
