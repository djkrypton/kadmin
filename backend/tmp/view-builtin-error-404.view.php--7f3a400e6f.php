<?php

use Latte\Runtime as LR;

/** source: C:/wamp64/www/projets/kadmin/backend/view/builtin/error-404.view.php */
final class Template7f3a400e6f extends Latte\Runtime\Template
{

	public function main(): array
	{
		extract($this->params);
		echo '<!DOCTYPE html>
<html lang="en">

<head>';
		$this->createTemplate("../component/head.view.php", $this->params, 'include')->renderToContentType('html') /* line 4 */;
		echo '</head>

<body>

  <main>
    <div class="container">

      <section class="section error-404 min-vh-100 d-flex flex-column align-items-center justify-content-center">
        <h1>404</h1>
        <h2>The page you are looking for doesn\'t exist.</h2>
        <a class="btn" href="home">Back to home</a>
        <img src="assets/img/not-found.svg" class="img-fluid py-5" alt="Page Not Found">
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

';
		$this->createTemplate("../component/script.view.php", $this->params, 'include')->renderToContentType('html') /* line 30 */;
		echo '
</body>

</html>';
		return get_defined_vars();
	}

}
