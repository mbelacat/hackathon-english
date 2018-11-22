<?php
//Function qui nettoie les entrées d'un formulaire
function clearForm($form) {
  foreach ($form as $key => $value) {
    $form[$key] = htmlspecialchars($value);
  }
  return $form;
}

//Function qui vérifie si un champ est vide
// function isFieldEmpty($form) {
//   foreach ($form as $key => $value) {
//     if(empty($value)) {
//       return true;
//     }
//   }
// }


//Function qui vérifie le respect d'une regex
function respectPattern($pattern, $value) {
  if(!preg_match($pattern, $value)) {
    return "4";
  }
}
 ?>
