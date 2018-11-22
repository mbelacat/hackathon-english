<?php
<<<<<<< HEAD
//Function clear the form enter
=======
//Function qui nettoie les entrées d'un formulaire
>>>>>>> f57902025331fffc6ef47f584a3b08494cb860d1
function clearForm($form) {
  foreach ($form as $key => $value) {
    $form[$key] = htmlspecialchars($value);
  }
  return $form;
}

<<<<<<< HEAD
//Function check if a field is empty
=======
//Function qui vérifie si un champ est vide
>>>>>>> f57902025331fffc6ef47f584a3b08494cb860d1
function isFieldEmpty($form) {
  foreach ($form as $key => $value) {
    if(empty($value)) {
      return "1";
    }
  }
}

<<<<<<< HEAD
//Function check if a field is too short
// function isTooShort($value, $length) {
//   if(strlen($value) < $length) {
//     return "2";
//   }
// }

//Function check if two field are uniform
=======
//Function qui vérifie si un champ est trop court
function isTooShort($value, $length) {
  if(strlen($value) < $length) {
    return "2";
  }
}

//Function qui vérifie si deux champs sont identiques
>>>>>>> f57902025331fffc6ef47f584a3b08494cb860d1
function areIdentical($value1, $value2) {
  if($value1 !== $value2) {
    return "3";
  }
}

<<<<<<< HEAD
//Function check a regex
=======
//Function qui vérifie le respect d'une regex
>>>>>>> f57902025331fffc6ef47f584a3b08494cb860d1
function respectPattern($pattern, $value) {
  if(!preg_match($pattern, $value)) {
    return "4";
  }
}
<<<<<<< HEAD


=======
>>>>>>> f57902025331fffc6ef47f584a3b08494cb860d1
 ?>
