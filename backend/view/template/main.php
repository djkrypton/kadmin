<!DOCTYPE html>
<html lang="en">

<head>{include component/head.php}</head>

<body>

  <!-- ======= Header ======= -->
  {include component/header.php}

  <!-- ======= Sidebar ======= -->
  {include component/sidebar.php}

	<main id="main" class="main">{include $main_content}</main>

  <!-- ======= Footer ======= -->
  {include component/footer.php}

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  {include component/script.php}

</body>

</html>