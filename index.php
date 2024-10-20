<?php $currentPage = 'Home'; ?>
<!DOCTYPE html>
<html lang="de">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dodo.tv</title>
  <link rel="stylesheet" href="style/style.css">
  <link rel="stylesheet" href="style/navigation.css">
  <link rel="stylesheet" href="style/index.css">
  <link rel="stylesheet" href="style/footer.css">
  <link rel="icon" type="image/x-icon" href="/media/favicon.png">
</head>

<body>
  <?php include'navigation.php'; ?>
  <main class="content">
    <article>
      <div class="welcomeDesc">
        <h1>Project Dodo Revival:<br> Bringing an Icon Back to Life</h1>
        <p>
          Project Dodo Revival is a groundbreaking conservation and genetic engineering initiative aimed at bringing the iconic 
          dodo bird back from extinction. Utilizing cutting-edge advancements in DNA research and cloning, scientists are working 
          to reconstruct the dodo’s genetic code using preserved DNA from dodo remains and closely related bird species. The 
          project not only seeks to restore the dodo to its natural habitat in Mauritius but also raises awareness about 
          biodiversity loss and the importance of protecting endangered species today. Through this initiative, the dodo could once 
          again roam the Earth, symbolizing hope for the future of conservation.<br>
          Is this something you support? Feel free to check out our merch store to support us financially.
        </p>
        <a href="product.php" class="support">Support our cause</a>
      </div>
      <picture class="welcomePicture">
          <img src="media/dodoIndex.png" alt="Historical Dodo">
      </picture>
    </article>
  </main>
  <?php include'footer.html'; ?>
</body>

</html>