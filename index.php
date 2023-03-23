<?php
require_once('lib/function.php');
$db = new project_function();
$var_re_number = "";$var_date_rej = "";$var_ref_name = "";$var_first_name = "";$var_last_name = "";$var_d_sph = "";
$var_d_cyl = "";$var_d_axis = "";$var_d_add = "";$var_n_sph = "";$var_n_cyl = "";$var_n_axis = "";$var_n_add = "";
$var_m_model = "";$var_m_size = "";$var_m_colour = "";$var_a_modle = "";$var_a_size = "";$var_a_colour = "";
$var_rs = "";$var_ps = "";$var_del_date = "";$var_intro = "";
if (isset($_POST['submit_btn'])) {
      $var_re_number = $_POST['re_number'];$var_date_rej = $_POST['date_rej'];
      $var_ref_name = $_POST['ref_name'];
      $var_first_name = $_POST['first_name'];
      $var_last_name = $_POST['last_name'];
      $var_d_sph = $_POST['d_sph'];
      $var_d_cyl = $_POST['d_cyl'];
      $var_d_axis = $_POST['d_axis'];
      $var_d_add = $_POST['d_add'];
      $var_n_sph = $_POST['n_sph'];
      $var_n_cyl = $_POST['n_cyl'];
      $var_n_axis = $_POST['n_axis'];
      $var_n_add = $_POST['n_add'];
      $var_m_model = $_POST['m_model'];
      $var_m_size = $_POST['m_size'];
      $var_m_colour = $_POST['m_colour'];
      $var_a_model = $_POST['a_model'];
      $var_a_size = $_POST['a_size'];
      $var_a_colour = $_POST['a_colour'];
      // $var_rs = $_POST['rs'];
     
      // $var_ps = $_POST['ps'];
      // $var_del_date = $_POST['del_date'];
      $var_intro = $_POST['intro'];
$db->add_new_registration($var_re_number, $var_date_rej,$var_ref_name,$var_first_name, $var_last_name,
      $var_d_sph,$var_d_cyl,$var_d_axis,$var_d_add,$var_n_sph,$var_n_cyl,$var_n_axis,$var_n_add,
$var_m_model,$var_m_size,$var_a_model,$var_a_size, $var_a_colour, $var_rs,
$var_ps,$var_del_date,$var_intro);

}

?>
<!DOCTYPE html>
<html lang="en">

</html>

<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title> DATA TABLE</title>
      <link rel="stylesheet" type="text/css" href=" css/bootstrap.css">
      <link rel="stylesheet " type="text/css" href="css/bootstrap-grid.css">
      <link rel="stylesheet " type="text/css" href="css/bootstrap-utilities.css">
      <link rel="stylesheet " type="text/css" href="css/bootstrap-utilities.min.css">
      <script type="text/javascript" src="js/bootstrap.js"></script>
      <script type="text/javascript" src="js/bootstrap.bundle.js"></script>
      <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>

</head>

<body>

      <form action="index.php" method="POST">
            <h1 class="text" style="text-align:center;">CHAITANYA OPTICALS</h1>
            <div class="container text-center">
                  <div class="row">
                        <div class="col">
                              <input class="form-control" type="number" name="re_number" placeholder=" N0."
                                    style="width: 300px; height: 50px;"><br>
                        </div>
                        <div class=" col ">

                        </div>
                        <div class="col ">
                              <input class="form-control" type="date" name="date_rej" placeholder=" DATE"
                                    style="width: 300px; height: 50px;"><br>
                        </div>
                  </div>
            </div>
            <div class="container text-center">
                  <div class="row">
                        <div class="col">
                              <input class="form-control" type="text" name="ref_name" placeholder="Ref."
                                    style="width: 300px; height: 50px;"><br>
                        </div>
                        <div class=" col ">

                        </div>
                        <div class="col ">

                        </div>
                  </div>
            </div>
            <div class="container text-center">
                  <div class="row">
                        <div class="col">
                              <input type="text" name="first_name" class=" form-control" placeholder="First name"
                                    aria-label="First name"><br>
                        </div>
                        <div class=" col ">
                              <input type="text" name="last_name" class="form-control" placeholder="Last name"
                                    aria-label="Last name">
                        </div>
                  </div>
                  <div class="col">

                  </div>
            </div>
            <div class="container">
                  <h2>DATA TABLE</h2>
                  <table class="table table-bordered  table-responsive">
                        <thead class="table-dark">
                              <tr>
                                    <th>For</th>
                                    <th>Sph.</th>
                                    <th>cyl</th>
                                    <th>Axis</th>
                                    <th>Add</th>
                              </tr>
                        </thead>
                        <tr>
                              <td>D.</td>
                              <td>
                                    <input type="text" name="d_sph" class=" form-control">
                              </td>
                              <td><input type="text" name="d_cyl" class="form-control"></td>
                              <td><input type="text" name="d_axis" class="form-control"></td>
                              <td><input type="text" name="d_add" class="form-control"></td>
                        </tr>
                        <tr>
                              <td>N.</td>
                              <td><input type="text" name="n_sph" class="form-control"></td>
                              <td><input type="text" name="n_cyl" class="form-control"></td>
                              <td><input type="text" name="n_axis" class="form-control"></td>
                              <td><input type="text" name="n_add" class="form-control"></td>

                        </tr>
                  </table>
            </div>
            <div class="container text-center ">
                  <div class="row ">
                        <div class="col ">
                              <div class="container ">
                                    <h2>Opticals Deatails</h2>

                                    <table class="table table-bordered " style="width: 100%; ">

                                          <thead class="table-light ">
                                                <tr>
                                                      <th>Sr No.</th>
                                                      <th>Model</th>
                                                      <th>Size</th>
                                                      <th>Colour</th>
                                                </tr>
                                          </thead>
                                          <tr>
                                                <td>M</td>
                                                <td><input type="text" name="m_model" class="form-control"></td>
                                                <td><input type="text" name="m_size" class="form-control"></td>
                                                <td><input type="text" name="m_colour" class="form-control"></td>

                                          </tr>
                                          <tr>
                                                <td>A</td>
                                                <td><input type="text" name="a_model" class="form-control"></td>
                                                <td><input type="text" name="a_size" class="form-control"></td>
                                                <td><input type="text" name="a_colour" class="form-control"></td>

                                          </tr>


                                    </table>

                              </div>

                        </div>
                        <div class=" col ">

                        </div>
                        <div class="col ">
                              <div class="container ">
                                    <h2>Opticals Deatails</h2>

                                    <table class="table table-bordered " style="width: 120%; ">

                                          <thead class="table-light ">
                                                <tr>
                                                      <th>TOTAL</th>
                                                      <th>Rs.</th>
                                                      <th>Ps</th>

                                                </tr>
                                          </thead>
                                          <tr>
                                                <td>Adv.</td>
                                                <td><input type="text" name="adv_rs" class="form-control"></td>
                                                <td><input type="text" name="adv_paise" class="form-control"></td>

                                          </tr>
                                          <tr>
                                                <td>Bal</td>
                                                <td><input type="text" name=" bal_rs" class="form-control"></td>
                                                <td><input type="text" name=" bal_paise" class=" form-control"></td>
                                          </tr>
                                    </table>
                              </div>

                        </div>
                  </div>
            </div>

            <div class="container text-center ">
                  <div class="row ">
                        <div class="col ">
                              <div class="form-floating mb-3 ">
                                    <input type="date" name="de_date" class="form-control " id="floatingInput ">
                                    <label for="floatingInput ">Delivary date</label>
                              </div>
                              <div class="form-floating ">
                                    <input type="password " class="form-control " id="floatingPassword ">
                                    <label for="floatingPassword ">---</label>
                              </div>
                        </div>
                        <div class=" col ">

                        </div>
                        <div class="col ">

                        </div>
                  </div>
            </div><br>
            <div class="container text-center ">
                  <div class="row ">
                        <div class="col ">
                              <div class="form-floating mb-3 ">
                                    <input type="text" name="intro" class="form-control " id="floatingInput ">
                                    <label for="floatingInput ">Introduction</label>
                              </div>

                        </div>
                        <div class=" col ">

                        </div>
                        <div class="col ">

                        </div>
                  </div>
            </div>
            <div class="container text-center ">
                  <div class="row ">
                        <div class="col ">


                        </div>
                        <div class=" col ">
                              <button type="submit" name="submit_btn" class="btn btn-primary ">Submit</button>
                        </div>
                        <div class="col ">

                        </div>
                  </div>
            </div>
      </form>
</body>

</html>
