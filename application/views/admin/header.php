<?php 
$CI = &get_instance();
$username = $CI->session->userdata('username');

//get level
$CI->db->where('username', $username);
$query = $CI->db->get('admin');
$level = $query->row_array();

echo $username;
echo $level['level'];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>APLIKASI ADMIN</h1> <br>
    <h3>BERHASIL LOGIN</h3>
    <li><a href="<?= base_url('/AdminJBM/dashboard'); ?>"><i class="fas fa-music"></i>Dashboard</a></li> <br>
    <li><a href="<?= base_url('/AdminJBM/viewKontak'); ?>"><i class="fas fa-music"></i>Kontak</a></li> <br>
    <li><a href="<?= base_url('/AdminJBM/viewAplikasi'); ?>"><i class="fas fa-music"></i>Aplikasi</a></li> <br>
    <li><a href="<?= base_url('/AdminJBM/viewMedia'); ?>"><i class="fas fa-music"></i>Media</a></li> <br>
    <li><a href="<?= base_url('/AdminJBM/lightBox'); ?>"><i class="fas fa-music"></i>Light Box</a></li> <br>

    <?php if($level['level'] == 'superadmin'): ?>
        <li><a href="<?= base_url('/AdminJBM/viewAdmin'); ?>"><i class="fas fa-music"></i>Admin</a></li> <br>
    <?php endif; ?>

    <h2><a href="<?php echo site_url('AdminJBM/logoutAdmin')?>">LOGOUT</a></h2>
    