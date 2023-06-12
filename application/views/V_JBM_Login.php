<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login JBM</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://unicons.iconscout.com/release/v2.1.9/css/unicons.css'>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets\login\style.css">
</head>
<body>
    <form action="<?php echo site_url('AdminJBM/loginAdmin')?>" method="POST">
    <div class="section">
        <div class="container">
            <div class="row full-height justify-content-center">
                <div class="col-12 text-center align-self-center py-5">
                    <div class="section pb-5 pt-5 pt-sm-2 text-center">
                        <label for="reg-log"></label>
                        <div class="card-3d-wrap mx-auto">
                            <div class="card-3d-wrapper">
                                <div class="card-front">
                                    <div class="center-wrap">
                                        <div class="section text-center">
                                            <h4 class="mb-4 pb-3">Log In</h4>
                                            <div class="form-group">
                                                <input type="text" name="username" class="form-style" placeholder="Your username" id="username" autocomplete="off">
                                                <i class="input-icon uil uil-at"></i>
                                            </div>  
                                            <div class="form-group mt-2">
                                                <input type="password" name="password" class="form-style" placeholder="Your Password" id="password" autocomplete="off">
                                                <i class="input-icon uil uil-lock-alt"></i>
                                               <?php 
                                                $info = $this->session->flashdata('error');
                                                if (!empty($info)) {
                                                    echo $info;
                                                }
                                                
                                            ?> 
                                            </div>
                                            <button type="submit" class="btn mt-4">submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
<!-- partial -->
<script  src="<?php echo base_url()?>assets/login/script.js"></script>

</body>
</html>