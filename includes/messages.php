<?php
  if(isset($_SESSION['loginErro'])) {
    echo "<div class=\"uk-alert-danger\" uk-alert>";
    echo "<a class=\"uk-alert-close\" uk-close></a>";
    echo "<p>";
    echo $_SESSION['loginErro'];
    unset($_SESSION['loginErro']);
    echo "</p>";  
    echo "</div>";

  } ;
