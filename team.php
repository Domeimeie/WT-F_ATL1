<?php $currentPage = 'Team'; ?>
<!DOCTYPE html>
<html lang="de">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Team</title>
  <link rel="stylesheet" href="style/style.css">
  <link rel="stylesheet" href="style/navigation.css">
  <link rel="stylesheet" href="style/footer.css">
  <link rel="stylesheet" href="style/team.css">
  <link rel="icon" type="image/x-icon" href="/media/favicon.png">
</head>

<body>
  <?php include'navigation.php'; ?>
  <main class="content">
  <div class="employee">
      <picture class="employeePicture">
        <img src="media/employees/dominique.png"
          alt="CEO Dominique">
      </picture>
      <div class="employeeDesc">
        <h2>Dominique</h2>
        <h4>President/CEO/CFO/COO/CIO</h4>
      </div>
    </div>
    <div class="employee">
      <picture class="employeePicture">
        <img src="media/employees/ymhitra.png"
          alt="Employee Y'mhitra">
      </picture>
      <div class="employeeDesc">
        <h2>Y'mhitra</h2>
        <h4>Head of Marketing</h4>
      </div>
    </div>
    <div class="employee">
      <picture class="employeePicture">
        <img src="media/employees/yshtola.png"
          alt="Employee Y'shtola'">
      </picture>
      <div class="employeeDesc">
        <h2>Y'shtola</h2>
        <h4>Head of Science</h4>
      </div>
    </div><div class="employee">
      <picture class="employeePicture">
        <img src="media/employees/mason.png"
          alt="Employee Mason'">
      </picture>
      <div class="employeeDesc">
        <h2>Mason</h2>
        <h4>Head of Human affection</h4>
      </div>
    </div><div class="employee">
      <picture class="employeePicture">
        <img src="media/employees/boots.png"
          alt="Employee Boots'">
      </picture>
      <div class="employeeDesc">
        <h2>Boots</h2>
        <h4>Head of lazing around</h4>
      </div>
    </div>
  </main>
  <?php include'footer.html'; ?>
</body>

</html>