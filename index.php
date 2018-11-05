<?php
    session_start();
    $state = 0;
    if(isset($_SESSION['status']) && isset($_SESSION['credentials'])){
        $state = 1;
    }else{
        $state = 0;
    }

    $setFlag = [
        'CTFP3NS2o18',
        'CTFP3NS',
        'P0l1T3kn1kJ0sS',
        'P3n5sur@b4yA',
        'Sur@b4y@PunyA',
        'lOnt0n6kup4n6',
        '3sc0kl4tt@mbAhumur1905',
        'pAnt41rI@',
        'T4m@nbUn6kUl',
        't3Lk()mk3njEr@n'
    ];
?>
<!doctype html>
<html lang="en">
<head>
    <title>CTF PENS 2018</title>
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="assets/css/navbar-top.css" rel="stylesheet">
</head>

<body>

<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
    <a class="navbar-brand" href="#">CTF PENS 2018</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <?php if($state == 1){ ?>
                <li class="nav-item">
                    <a class="nav-link btn btn-sm btn-primary" href="logout.php" style="color: black;">Log out</a>
                </li>
            <?php }else{ ?>
                <li class="nav-item">
                    <a class="nav-link" href="kepo_ya.php">Masuk sini ke aku</a>
                </li>
            <?php } ?>
        </ul>
    </div>
</nav>

<main role="main" class="container">
    <?php if($state == 0){ ?>
        <div class="jumbotron">
            <h1>Selamat datang di CTF PENS 2018</h1>
            <p class="lead">didalam tahap ini kalian akan dihadapkan dengan tantangan <strong>FORM</strong> yang akan diproses oleh backend yang akan mengeluarkan <strong>FLAG</strong></p>
            <a class="btn btn-lg btn-primary" href="kepo_ya.php" role="button">View navbar docs &raquo;</a>
        </div>
    <?php }else if($state == 1){ ?>
        <div class="jumbotron">
            <h1>User Page</h1><p id="flag1"><?php echo ($_COOKIE['CREDENTIALS']=='USERS')?"Flag 1: ".$setFlag[rand(0,9)]:"" ?></p>
            <?php echo ($_COOKIE['CREDENTIALS']=='ADMINS')?"<form action='icikiwir.php' method='post' enctype='multipart/form-data'>":"<form action='index.php'>" ?>
                <table class="table table-bordered table-striped">
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td><input type="text" name="nama" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td><input type="text" name="alamat" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>:</td>
                        <td><input type="email" name="email" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>No. Telp</td>
                        <td>:</td>
                        <td><input type="text" name="telp" class="form-control"></td>
                    </tr>
                    <?php
                        if(isset($_COOKIE['CREDENTIALS'])){
                            if($_COOKIE['CREDENTIALS']=='ADMINS'){?>
                                                    <tr>
                                                        <td>Foto KTP</td>
                                                        <td>:</td>
                                                        <td><input type="file" name="upload_ktp" class="form-control"></td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2">&nbsp;</td>
                                                        <td><button type="submit" class="btn btn-sm btn-primary" name="save">Save</button></td>
                                                    </tr>
                            <?php }else{ ?>
                                <tr>
                                    <td colspan="2">&nbsp;</td>
<!--                                    <td><button type="button" onclick="alert('Ubah KUE ku\nKUE ku adalah ADMINS');" class="btn btn-sm btn-primary">Save</button></td>-->
                                    <td><button type="submit" class="btn btn-sm btn-primary">Save</button></td>
                                </tr>
                            <?php } } ?>
                    <?php
                    $rr = [
                        'eL8V2j4T',
                        'N3ucVvUn',
                        'Fy7vU9GA',
                        'xD5qheaB',
                        'pABgtP2v',
                        'qP57QKFY',
                        'TpKn7EYj',
                        'QC8tAXh7',
                        'r3heTK7Z',
                        'Fe36DrvJ',
                    ];
                    echo "<div id='flag2' style='display: none'>Flag2: ".$rr[rand(0,9)]."</div>";
                    echo ($_COOKIE['CREDENTIALS']=='ADMINS')?"<a href='javascript:;' class='btn btn-sm btn-primary' onclick='FcBtn()'>Klik Me</a>":"" ?>
                </table>
            </form>
            <hr/>
            <table class="table table-striped table-bordered" id="list">
                <thead>
                    <tr>
                        <td><b>NAMA</b></td>
                        <td><b>ALAMAT</b></td>
                        <td><b>EMAIL</b></td>
                        <td><b>NO. TELP</b></td>
                    </tr>
                </thead>
                <tbody>
                <?php
                    include "connect.php";
                    $sql = mysqli_query($conn, "select * from user_page");
                    while($data = mysqli_fetch_array($sql)){
                ?>
                        <tr>
                            <td><?= $data['nama'] ?></td>
                            <td><?= $data['alamat'] ?></td>
                            <td><?= $data['email'] ?></td>
                            <td><?= $data['no_telp'] ?></td>
                        </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    <?php }
    ?>
</main>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script>
    function FcBtn() {
        var x = document.getElementById("flag2");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }
</script>
</body>
</html>

<?php
    include "connect.php";
    $nama = (isset($_GET['nama']))?$_GET['nama']:null;
    $alamat = (isset($_GET['alamat']))?$_GET['alamat']:null;
    $email = (isset($_GET['email']))?$_GET['email']:null;
    $telp = (isset($_GET['telp']))?$_GET['telp']:null;
    $tgl = date("Y-m-d H:i:s");

    if($nama != "" || $nama != null){
        $sql = mysqli_query($conn, "insert into user_page values ('', '$nama', '$alamat', '$email', '$telp', '$tgl')");
//        $sql = mysqli_query($conn, 'insert into user_page values ("", \'$nama\', "$alamat", '$email', '$telp', '$tgl')');
        if($sql){ ?>
            <script>
                $('#list').load(document.URL +  ' #list');
            </script>
        <?php }} ?>
