<!DOCTYPE html>
<html lang="it" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <title>Db-ex-4</title>
</head>
<body>

  <div class="container">

    <h1>Dati prenotazione ospiti</h1>

    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>Prenotazione_ID</th>
          <th>Ospite_ID</th>
        </tr>
      </thead>
      <tbody>
        <?php include 'database.php'; ?>

        <?php foreach ($datiPrenotazioni as $datoPrenotazione) { ?>
          <tr>
            <td><?php echo $datoPrenotazione['id']; ?></td>
            <td><?php echo $datoPrenotazione['prenotazione_id']; ?></td>
            <td>
              <a href="http://localhost/db-ex-4/ospite.php?ospite_id=<?php echo $datoPrenotazione['ospite_id']; ?>">
                <?php echo $datoPrenotazione['ospite_id']; ?>
              </a>
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>

  </div>
</body>
</html>
