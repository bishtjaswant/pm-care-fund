<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="./assets/css/materia-bootstrap.min.css">
  <link rel="stylesheet" href="./assets/css/index.css">
  <title>Prime Minister's National Relief Fund</title>

  <link href="https://pmnrf.gov.in/assets/img/favicon.ico" rel="icon" type="image/ico" />
  <link rel="stylesheet" href="https://parsleyjs.org/src/parsley.css">
  <!-- jquer -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <!-- javascript validation -->
<script src="https://parsleyjs.org/dist/parsley.min.js"></script>
</head>

<body>

  <nav class="navbar navbar-expand-lg cont ">
    <a class="navbar-brand pm-care" href="#">
      <img src="https://pmnrf.gov.in/assets/img/emblem.jpg" alt="PMNRF" height="50" />
      <span>PM</span> <span>Care Fund</span> </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor03">


      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">donate online</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">trannsaction history</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">download</a>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link">conntact us</a>
        </li>
      </ul>



      <!-- <form class="form-inline  my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
    </form> -->
    </div>
  </nav>


  <section class="donate-online">
    <h1>Donate online</h1>
  </section>


  <section class=" container">

    <div class="row">
      <div class="col-md-12">
        <p class="text-justify lead mt-5">
          Prime Minister's National Relief Fund, (PMNRF) accepts voluntary contributions from Individuals, Organizations, Trusts, Companies and Institutions etc. All contributions towards PMNRF are exempt from Income Tax under section 80(G). It is informed that Prime Minister's National Relief Fund (PMNRF) does not collect any money through SMS/Missed call services or through any such service provider. It is advised that any such Calls/ Messages should not be entertained.
        </p>
      </div>
    </div>

    <div class="row">
      <div class="col-md-8">
        <div class="alert alert-info">
          <span class="mb-0">The PAN number of PMNRF is <span style="color: #ff6600;">XXXXXX637Q</span></span>
        </div>

        <div class="alert alert-primary">
          <span class="mb-0">Donations now accepted through BHIM/UPI also.</span>
        </div>
        <div class="alert alert-warning">
          <span class="mb-0"><strong>(VPA : pmnrf@centralbank) / Scan the QR Code to donate</strong></span>
        </div>
      </div>
      <div class="col-md-4"></div>
    </div>

    <div class="row col-md-12">
      <div class="alert alert-success" role="alert">
        <p>In order to facilitate speedy issue of 80(G) Income Tax receipts, donors are advised to provide the transaction details of donations deposited directly in any of the PMNRF collection banks along with address of the donor to this office through email at pmnrf@gov.in.</p>
        <p>Donors making donation through PMNRF online portal are advised not to make repeated transactions, if the amount has been debited from the account but the message appears as "Transaction failure/pending confirmation from bank" at the end of the process</p>
      </div>
    </div>
  </section>







  <section class="online-donation-form container mt-3">
    <div class="online-donation-form-heading">
      <h1>PMNRF Online Donation Form (Personal Detail)</h1>
    </div>

    <div class="card text-white bg-secondary mb-3">
      <div class="card-header">
        <div class=" p-3" style="color:red; font-size:14px;border:2px solid green;">Note: In case of any error during transaction, please wait for 72 hours before initiating a new transaction.</div>
      </div>
      <div class="card-body">
        <form action="" method="post" data-parsley-validate>
          <div class="form-row">
            <div class="col-md-2 ">
              <label for="title">Title</label>
              <select class="  custom-select" name="" id="title">
                <!-- <option value="">Select Title</option> -->
                <option value="Mr">Mr</option>
                <option value="Mrs">Mrs</option>
                <option value="Ms">Ms</option>
              </select>
            </div>
            <div class="col-md-5">
              <label for="firstname">first name</label>
              <input type="text" required data-parsley-pattern-message="Invalid first name" data-parsley-pattern="^[a-zA-Z]+$" data-parsley-trigger="blur"	 name="firstname" placeholder="firstname" class=" form-control" id="firstname">
            </div> 
            <div class="col-md-5">
              <label for="lastname">last  name</label>
              <input type="text" required  data-parsley-pattern="^[a-zA-Z]+$" data-parsley-trigger="blur" name="lastname" placeholder="lastname" class=" form-control" id="lastname">
            </div>
          </div>
          <div class="form-row">
            <div class="col-md-6">
              <label for="email">email</label>
              <input type="text" required data-parsley-type="email"	data-parsley-trigger="blur" name="email" placeholder="email" class=" form-control" id="email">
            </div>
            <div class="col-md-6">
              <label for="phone">phone number</label>
              <input type="number" required data-parsley-type="integer" data-parsley-maxlength="10"		data-parsley-trigger="blur" name="phone" placeholder="phone" class=" form-control" id="phone">
              <small class=" form-text text-muted">the country code not required</small>
            </div>
          </div>
          <div class="form-row">
            <div class="col-md-6">
              <label for="country">country</label>
              <select name="country" class=" custom-select">
                <option value="india" selected disabled>India</option>
              </select>
            </div>
            <div class="col-md-6">
              <label for="state">state</label>
              <select name="state" class=" custom-select">
                <option value="delhi" selected disabled>Delhi</option>
              </select>
            </div>
          </div>

          <div class="form-row">
            <div class="col-md-6">
              <label for="pincode">pincode</label>
              <input type="number" name="pincode" placeholder="area pincode" id="" class=" form-control">

              <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFile">
                <label class="custom-file-label" for="customFile">Choose file</label>
              </div>



              <div class="gender" style="margin: 0px;">

                <label for="gender">gender</label> <br>

                <div class="form-row">

                  <div class="col-sm-5">
                    <div class="custom-control custom-radio custom-control-inline ">
                      <input type="radio" value="male" id="male" name="gender" class="custom-control-input">
                      <small style="color: black;font-weight: 700;" class="custom-control-label" for="male">Male</small>
                    </div>
                    <div class="custom-control custom-radio  custom-control-inline">
                      <input type="radio" value="female" id="female" name="gender" class="custom-control-input">
                      <small style="color: black;font-weight: 700;" class="custom-control-label" for="female">Female</small>
                    </div>
                  </div>
                  <div class="col-sm-7 offset-md-7">
                    <img class=" img-thumbnail" src="./assets/img/capital.jpg" height="200" width="200" alt="">
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <label for="address">address</label>
              <textarea name="address" style="margin-top: 0px; margin-bottom: 0px; height: 202px;" class=" form-control" id="" cols="30" rows="10"></textarea>
            </div>
          </div>

          <div class="form-row">
            <div class="col-md-12" style="display: flex;justify-content: center;font-weight: bolder;">
              <button type="submit" class=" btn btn-success w-25 mt-5">Donate</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </section>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>