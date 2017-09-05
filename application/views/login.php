<head>
  <!-- <title>Modern Business - Start Bootstrap Template</title> -->
  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url('/templates/template/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="<?php echo base_url('/templates/template/css/modern-business.css') ?>" rel="stylesheet">
</head>
<body>
  <form style="margin:0 auto;width:40%;margin-top:10%;margin-bottom:15%;" name="sentMessage" id="contactForm">
    <div class="control-group form-group">
      <div class="controls">
        <label>Usu&aacute;rio:</label>
        <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
        <p class="help-block"></p>
      </div>
    </div>
    <div class="control-group form-group">
      <div class="controls">
        <label>Senha:</label>
        <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
      </div>
    </div>
    <div id="success"></div>
    <!-- For success/fail messages -->
    <button type="submit" class="btn btn-primary">Login</button>
  </form>
    <script src="<?php echo base_url('/templates/template/vendor/jquery/jquery.min.js') ?>"></script>
    <script src="<?php echo base_url('/templates/template/vendor/popper/popper.min.js') ?>"></script>
    <script src="<?php echo base_url('/templates/template/vendor/bootstrap/js/bootstrap.min.js') ?>"></script>
</body>
