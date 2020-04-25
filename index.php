<?php require_once dirname(__FILE__) . "\\inc\header.php"; ?>





<?php
   
require_once './vendor/autoload.php';

if (isset($_POST['submit'])) {

  // SAVE IMAGE


  $folder = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'assets' . DIRECTORY_SEPARATOR . 'profile' . DIRECTORY_SEPARATOR;
  $target_file =  $folder . time() . '-' . pathinfo($_FILES['profile']['name'])['filename'] . rand(0, 999) . '.' . pathinfo($_FILES['profile']['name'])['extension'];

  $temp_file = $_FILES['profile']['tmp_name'];

  $donor = new Donor();
  $donor->title = htmlspecialchars(strip_tags($_POST['title']));
  $donor->firstname = htmlspecialchars(strip_tags($_POST['firstname']));
  $donor->lastname = htmlspecialchars(strip_tags($_POST['lastname']));
  $donor->email = htmlspecialchars(strip_tags($_POST['email']));
  $donor->country = htmlspecialchars(strip_tags($_POST['country']));
  $donor->state = htmlspecialchars(strip_tags($_POST['state']));
  $donor->gender = htmlspecialchars(strip_tags($_POST['gender']));
  $donor->phone = htmlspecialchars(strip_tags($_POST['phone']));
  $donor->profile = htmlspecialchars(strip_tags($target_file));
  $donor->pincode = htmlspecialchars(strip_tags($_POST['pincode']));
  $donor->address = htmlspecialchars(strip_tags($_POST['address']));
  $donor->donation = htmlspecialchars(strip_tags($_POST['donation']));
  // option message from peoopl
  $donor->msg = htmlspecialchars(strip_tags($_POST['msg'])) ?? null;


  if ($donor->save()) {
    move_uploaded_file($temp_file, $target_file);
    header("Location:index.php");
    echo '<script type="text/javascript">alert("thank yoou for your  donation");</script>;';

  }
}
?>

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
        <form action='<?= htmlspecialchars($_SERVER['PHP_SELF']); ?>' method="post" enctype="multipart/form-data" data-parsley-validate>
        
          <div class="form-row">
            <div class="col-md-2 ">
              <label for="title">Title</label>
              <select required data-parsley-required-message="please select title from list" data-parsley-trigger="change" class="custom-select" name="title" id="title">
                <option value="">Select Title</option>
                <option value="Mr">Mr</option>
                <option value="Mrs">Mrs</option>
                <option value="Ms">Ms</option>
              </select>
            </div>
            <div class="col-md-5">
              <label for="firstname">first name</label>
              <input type="text" required data-parsley-pattern-message="Invalid first name" data-parsley-pattern="^[a-zA-Z]+$" data-parsley-trigger="blur" name="firstname" placeholder="firstname" class=" form-control" id="firstname">
            </div>
            <div class="col-md-5">
              <label for="lastname">last name</label>
              <input type="text" required data-parsley-pattern="^[a-zA-Z]+$" data-parsley-trigger="blur" data-parsley-pattern-message="Invalid last name" name="lastname" placeholder="lastname" class=" form-control" id="lastname">
            </div>
          </div>
          <div class="form-row">
            <div class="col-md-6">
              <label for="email">email</label>
              <input type="text" required data-parsley-type="email" data-parsley-trigger="blur" data-parsley-type-message="please type valid email address" name="email" placeholder="email" class=" form-control" id="email">
            </div>
            <div class="col-md-6">
              <label for="phone">phone number</label> &nbsp;&nbsp;
              <small style="display: inline-block;" class=" form-text text-muted">( the country code not required)</small>

              <input type="number" required data-parsley-required-message="please input phone number" data-parsley-type="integer" data-parsley-length-message="entered phone number incorrect. It should have 10 characters" data-parsley-length="[10,10]" data-parsley-trigger="blur" name="phone" placeholder="phone" class=" form-control" id="phone">
            </div>
          </div>
          <div class="form-row">
            <div class="col-md-6">
              <label for="country">country</label>
              <select required name="country" class=" custom-select">
                <option value="">Choose country</option>
                <option value="india">India</option>
              </select>
            </div>
            <div class="col-md-6">
              <label for="state">state</label>
              <select required name="state" class=" custom-select">
                <option value="">Choose State</option>
                <?php foreach (State::all() as  $ke => $value) : ?>
                  <option value="<?php echo $value['StateName'] ?>"><?php echo $value['StateName'] ?></option>
                <?php endforeach ?>
              </select>
            </div>
          </div>

          <div class="form-row">
            <div class="col-md-6">
              <label for="pincode">pincode</label>
              <input type="number" name="pincode" placeholder="area pincode" id="" class=" form-control" required data-parsley-required-message="please enter area pincode number" data-parsley-type="integer" data-parsley-trigger="blur">

              <div class="custom-file">
                <input type="file" required data-parsley-required="true" data-parsley-required-message="please your avatar require" name="profile" class="custom-file-input" id="customFile">
                <label class="custom-file-label" for="customFile">Choose file</label>
              </div>




              <div class="form-row">

                <div class="col-md-5 " style="position: absolute;top:125px;">
                  <label for="gender">Gender</label>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="male" value="Male">
                    <label class="form-check-label" for="male">
                      MALE
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="female" value="Female">
                    <label class="form-check-label" for="female">
                      FEMALE
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="other" value="Other">
                    <label class="form-check-label" for="other">
                      OTHER
                    </label>
                  </div>
                </div>
                <div class="col-sm-7 offset-md-7" style="position: absolute;top:150px;">
                  <figure>
                    <img id="preview" class="  img-fluid img-thumbnail" src="./assets/img/capital.jpg" height="200px" width="200px" alt="">
                  </figure>
                </div>
              </div>

            </div>
            <div class="col-md-6">
              <label for="address">address</label>
              <textarea name="address" style="margin-top: 0px; margin-bottom: 0px; height: 260px;" class=" form-control" id="" cols="30" rows="10" required data-parsley-required data-parsley-trigger="blur" placeholder="enter complete resident address" data-parsley-required-message="enter complete resident address"></textarea>
            </div>
          </div>


          <div class="form-row">
            <label for="amt">Donation ammount</label> <br>
            <div class="col-md-12">
              <div class=" form-check form-check-inline">
                <input class="form-check-input" type="radio" name="donation" id="1000" value="1000">
                <label class="form-check-label" for="1000">1000 rs</label>
              </div>
              <div class=" form-check form-check-inline">
                <input class="form-check-input" type="radio" name="donation" id="5000" value="5000">
                <label class="form-check-label" for="5000">5000 rs</label>
              </div>
              <div class=" form-check form-check-inline">
                <input class="form-check-input" type="radio" name="donation" id="10000" value="10000">
                <label class="form-check-label" for="10000">10000 rs</label>
              </div>
              <div id="show-display-input" class=" form-check form-check-inline">
                <input class="form-check-input" type="radio" name="donation" id="enter">
                <label class="form-check-label" for="enter">enter dontation amount</label>
              </div>
            </div>
          </div>

          <div class="form-row">
            <div class="col-md-12">
              <label for="msg">Comment or message</label>
              <textarea name="msg" style="margin-top: 0px; margin-bottom: 0px; height: 260px;" class=" form-control" cols="30" rows="10" placeholder="do you want send any messages to our corona warrior (optional)"></textarea>
            </div>

          </div>
 
          <div class="form-row">
            <div class="col-md-12 mt-5" style="display: flex;justify-content:flex-end ;font-weight: bolder;">
              <button type="submit" name="submit" class=" btn btn-success w-25 mt-5">Donate</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </section>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  <script src="./assets/js/custom.js"></script>
</body>

</html>

