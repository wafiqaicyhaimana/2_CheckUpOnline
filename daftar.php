<?php include ('head.php');?>

<nav class="navbar navbar-default navbar-static-top" >
    <div>
                <a class="navbar-brand" href="" style = "color:white;font-weight:bold;margin:10px 40px;"><img src="img/stethoscope-white.png" style="width:40px;"class="img-responsive img-circle" alt="About"><b> Check Up</b></a>
                <a class="navbar-brand" href="" style = "color:white;margin:10px 40px;"> Home</a>
                <a class="navbar-brand" href="df_checkup.php" style = "color:white;font-weight:bold;margin:10px 40px;">Daftar Check Up</a>
                <a class="navbar-brand" href="notif.php" style = "color:white;margin:10px 40px;"> Notifikasi</a>
    </div>
                <a class="navbar-brand btn btn-info" href="" style = "color:white;font-weight:bold;margin:10px 40px;border-radius:20px;"><img src="img/user-regular.png" style="width:30px; margin:20px;"class="img-responsive img-circle" alt="About"></a>
            <!-- /.navbar-top-links -->

            <!-- /.navbar-static-side -->
        </nav>
<body style="background:#476491;">
  <div class="card" style="margin:20px 120px; height: 600px; background:#8a9eb9; border-radius:30px;">
    <h2 style="text-align:center;font-weight:bold; margin:20px;">Daftar Check Up</h2>
    <div class="form-group" style="margin:0px 340px;">
			<input class="form-control" style="margin:20px 0px;" type ="text" name = "nama" placeholder="Nama Lengkap" >
      <input class="form-control" style="margin:20px 0px;" type ="text" name = "nama" placeholder="Umur" >
      <input class="form-control" style="margin:20px 0px;" type ="text" name = "nama" placeholder="NIK" >
      <input class="form-control" style="margin:20px 0px;" type ="text" name = "nama" placeholder="No. Hp" >
      <input class="form-control" style="margin:20px 0px;" type ="text" name = "nama" placeholder="Jenis Kelamin" >
      <div class="d-grid gap-2">
        <button class="btn btn-success" type="button">Save</button>
      </div>
		</div>
  </div>
</body>