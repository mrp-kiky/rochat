
<?php
session_start();
error_reporting(E_ALL ^ E_NOTICE);

require_once ('config/MysqliDb.php');
include("config/db.php");
$db = new MysqliDb ('localhost', $dbuser, $dbpass, $dbname);
include("config/functions.php");

  $u = isset($_POST['username']) ? $_POST['username'] : '';
  $p = isset($_POST['password']) ? $_POST['password'] : '';
  $sql="";
  
//=============================================== koneksi dan select database
if($u!='')
{
  //echo "SELECT * FROM user where user_name='$u' and user_pass='".md5($p)."' and user_status=1";
  $sql = "SELECT * FROM users where user_name='$u' and user_pass='".md5($p)."' and user_status=1"; //echo $sql;
    $data = $db->rawQuery($sql);
    //$data = eksekusi($sql);
/*$db = new Config();
$db->connect();
$db->execute($sql); //echo $sql;
$data = $db->get_dataset();
$db->close_connection();*/
//===============================================
$salah=0;
if(count($data)>0)
{
    /*if($data[0]["user_tipe"]=="ADMIN")
    {   
        $nama = "ADMIN";
    }
    else
    {
        $sql2 = "SELECT * FROM karyawan where kar_us_id='".$data[0]["user_id"]."'"; 
        $data2 = eksekusi($sql2);
        $nama = $data2[0][1];
    }*/
    
  $_SESSION['i']=$data[0]["user_id"]; //id
  $_SESSION['u']=$data[0]["user_name"]; //username
  $_SESSION['e']=$data[0]["user_email"]; //email
  $_SESSION['t']=$data[0]["user_tipe"]; //tipe
  $_SESSION['nama']=$data[0]["user_nama"]; //$data2[0][4]; //tipe
  $_SESSION['sql']=$sql;
    //$_SESSION['sql2']=$sql2;
//  $_SESSION['t']=$data[0][3]; //tipe
//  $_SESSION['n']=$data[0][5]; //nama
//  $_SESSION['m']=$data[0][8]; //tgl lahir
  /*if($data[0][4]<=1)
  {
    //generate_notif();
  }*/
  /* Redirect jika tidak ada error */
//header('Location:index.php?'.$_SESSION['n']);
header('Location:index.php');
 exit(); //hentikan eksekusi kode di login_proses.php
//  echo
}
else if (isset($_POST['p']))
{
  $salah=1;
}
}
else
{
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Ro-Chat | Register</title>
  <link rel="icon" href="assets/img/rochat_icon.png" type="image/png" sizes="50x50">  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" href="plugins/sweetalert2/sweetalert2.min.css">


  <style type="text/css">
    #background {
    width: 100%; 
    height: 100%; 
    position: fixed; 
    left: 0px; 
    top: 0px; 
    z-index: -1; /* Ensure div tag stays behind content; -999 might work, too. */
}

.stretch {
    width:100%;
    height:100%;
}
  </style>
</head>
<body class="hold-transition login-page">
<div id="background">
  <img src="assets/img/carbon.jpg" class="stretch" alt="" />
</div>
<div class="login-box">
  <div class="login-logo">
    <!-- <a href="index2.html"><b>Admin</b>LTE</a> -->
    <img src="assets/img/rochat.png" />
    <p><strong class="text-white" style=" text-shadow: 1px 1px 2px black, 0 0 15px black, 0 0 5px black; ">Registration Form</strong></p>

  </div>
  <!-- /.login-logo -->
  <div class="card" style=" box-shadow: 1px 1px 2px grey, 0 0 15px grey, 0 0 5px grey; ">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Register a new membership</p>

      <form action="#" method="post" id="register_form">
      <label for="user_nama" class="col-sm-12 col-form-label">Username :</label>
        <div class="form-group row">
            <div class="col-sm-12 input-group">
            <input type="text" id="user_name" name="user_name" class="form-control" placeholder="Username" aria-required="true">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-user-circle"></span>
                </div>
              </div>
            </div>
         </div>

         <label for="user_pass" class="col-sm-12 col-form-label">Password : </label>
        <div class="form-group row">
            <div class="col-sm-12 input-group">
              <input type="password" class="form-control" id="user_pass" name="user_pass" placeholder="Password" aria-required="true">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
         </div>

         <label for="user_nama" class="col-sm-12 col-form-label">Nama Lengkap :</label>
         <div class="form-group row">
            <div class="col-sm-12 input-group">
            <input type="text" id="user_nama" name="user_nama" class="form-control" placeholder="Full Name" aria-required="true">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-user-circle"></span>
                </div>
              </div>
            </div>
         </div>

        <label for="user_nama" class="col-sm-12 col-form-label">Email :</label>
        <div class="form-group row">
            <div class="col-sm-12 input-group">
            <input type="email" id="user_email" name="user_email" class="form-control" placeholder="Email" >
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-envelope"></span>
                </div>
              </div>
            </div>
         </div>

        <label for="user_nama" class="col-sm-12 col-form-label">Nomer Telepon :</label>
        <div class="form-group row">
            <div class="col-sm-12 input-group">
            <input type="number" id="user_hp" name="user_hp" class="form-control" placeholder="Nomer Telepon" aria-required="true">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-phone"></span>
                </div>
              </div>
            </div>
         </div>

        <div class="form-group row">
            <div class="col-4">
                  <div class="icheck-primary">                  
                      <p>
                        <input type="checkbox" class="checkbox" id="is_wa" name="is_wa" >
                        <label for="is_wa">Whatsapp</label>
                        <br>
                        <label for="is_wa" class="error block"></label>
                      </p>
                    
                  </div>
              </div>
              <div class="col-4">
                  <div class="icheck-primary">                  
                      <p>
                        <input type="checkbox" class="checkbox" id="is_tele" name="is_tele" >
                        <label for="is_tele">Telegram</label>
                        <br>
                        <label for="is_tele" class="error block"></label>
                      </p>
                    
                  </div>
              </div>
        </div>

        
        
        
        <div class="row">
          <div class="col-8">
          
            <div class="icheck-primary">
            
                  <p>
                <label for="agree">Please agree to our policy</label>
                <input type="checkbox" class="checkbox" id="agree" name="agree" required="" aria-required="true">
                <br>
                <label for="agree" class="error block"></label>
                </p>
              
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button id="btnSubmit" type="submit" class="btn btn-primary btn-block">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <a href="login.php" class="text-center">I already have a membership</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->

  
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<script type="text/javascript" src="dist/js/validation.min.js"></script>
  <!-- SweetAlert2 -->
<script src="plugins/sweetalert2/sweetalert2.min.js"></script>
<script>
      function isEmpty(obj) {
        for(var prop in obj) {
            if(obj.hasOwnProperty(prop))
                return false;
        }
          return true;
      }

        $(function(){
            var form = $("#register_form");

            form.css({
                opacity: 1,
                "-webkit-transform": "scale(1)",
                "transform": "scale(1)",
                "-webkit-transition": ".5s",
                "transition": ".5s"
            });

            /* validation */
     $("#register_form").validate({
      rules:
      {
            user_nama: {  required: true },
            user_name: {  required: true },
            user_email: { required: true, email: true },
            user_pass: { required: true, },
            user_hp: { required: true, },
            agree: { required: true },
            
       },
       messages:
       {
          user_nama:{  required: "please enter your Full Name"    },
          user_name:{  required: "please enter your Username "    },
          user_email:{  required: "please enter your Email "    },
          user_pass:{  required: "please enter your password"            },
          user_hp:{  required: "please enter your Phone Number"            },
          agree:{     required: "please check terms of agreement"       },           

       },
       submitHandler: submitForm    
       });  
       /* validation */
       
       /* login submit */
       function submitForm()
      {
            $("#btnSubmit").html('<span class="fa fa-sync fa-spin"></span> Processing');
          var form = $('#register_form')[0];
          // Create an FormData object
          var data = new FormData(form);
          
          // disabled the submit button
          $("#btnSubmit").prop("disabled", true);
                $.ajax({
                  type: "POST",
                  enctype: 'multipart/form-data',
                  url: "actionregister.php",
                  data: data,
                  processData: false,
                  contentType: false,
                  cache: false,
                  timeout: 600000,
                  success: function (data) {
                var rv;
                try {
                  rv = JSON.parse(data);
                  if(isEmpty(rv))
                  {
                          Swal.fire(
                          'Info!',
                          'No Data!',
                          'info'
                          );
                      console.log("NO DATA : ", data);
                  }
                  else
                  {
                    if(rv.status==true || rv.status=="true")
                    {
                      Swal.fire(
                          'Success!',
                          'Success Input Data!',
                          'success'
                          );
                      console.log("SUCCESS : ", data);
                      setTimeout(function(){ window.location="login"; }, 2000);
                        $("#btnSubmit").html('Register');
                      $("#register_form")[0].reset();

                    }
                    else 
                    {
                      Swal.fire(
                          'error!',
                          'Error Input Data, '+rv.messages,
                          'error'
                          );
                      
                      console.log("ERROR : ", data);
                      $("#btnSubmit").html('Register');

                    }

                  }
                }
                catch (e) {
                  //error data not json
                  Swal.fire(
                          'error!',
                          'Error Input Data, '+e,
                          'error'
                          );
                      
                      console.log("catch ERROR : ", e);
                      $("#btnSubmit").html('Register');
                } 

                
                  $("#btnSubmit").prop("disabled", false);
                  // $("#result").text(data);
                  

              },
              error: function (e) {

                  // $("#result").text(e.responseText);
                  console.log("ERROR : ", e);
                  $("#btnSubmit").prop("disabled", false);
                  $("#btnSubmit").html('Register');

              }
              }); //end of ajax
      }

        });
    </script>
</body>
</html>
