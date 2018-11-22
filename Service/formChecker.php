<?php
//Function clear the form enter
function clearForm($form) {
  foreach ($form as $key => $value) {
    $form[$key] = htmlspecialchars($value);
  }
  return $form;
}

//Function check if a field is empty
function isFieldEmpty($form) {
  foreach ($form as $key => $value) {
    if(empty($value)) {
      return "1";
    }
  }
}

//Function check if a field is too short
// function isTooShort($value, $length) {
//   if(strlen($value) < $length) {
//     return "2";
//   }
// }

//Function check if two field are uniform
function areIdentical($value1, $value2) {
  if($value1 !== $value2) {
    return "3";
  }
}

//Function check a regex
function respectPattern($pattern, $value) {
  if(!preg_match($pattern, $value)) {
    return "4";
  }
}


 ?>
