<?php include "Template/header.php" ?>

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Nom </th>
      <th scope="col">Prénom</th>
      <th scope="col">Status du Test</th>
      <th scope="col">Supprimer</th>
    </tr>
  </thead>
  <tbody>
<!-- foreach to see all sessions -->
    <tr>
      <th scope="row">last_name</th>
      <td>first_name</td>
      <td>status( en cours, commencé, fini)</td>
      <td><i class="fas fa-trash-alt"></i></td>
    </tr>
  </tbody>
</table>

<?php include "Template/footer.php" ?>
