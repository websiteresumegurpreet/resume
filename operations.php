<?php


function inputFields($placeholder, $name, $value, $type)
{

  $ele = " <div class=\"form-group my-3\">

<input type='$type' class=\"form-control\" placeholder='$placeholder' name='$name' value='$value'>


</div>";

  echo ($ele);
}



?>;
