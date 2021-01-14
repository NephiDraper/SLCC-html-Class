<!DOCTYPE html>
<html>
    <head>
        <title>Contact Form</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="style.css"> 
    </head>
    <body>
      <!-- Header -->
  <section id="header">
    <div class="header container">
      <div class="nav-bar">
        <div class="brand">
          <a href="#hero"><h1><span>N</span>ephi <span>D</span>raper</h1></a>
        </div>
        <div class="nav-list">
          <div class="hamburger"><div class="bar"></div></div>
          <ul>
            <li><a href="#hero" data-after="Home">Home</a></li>
            <li><a href="#services" data-after="Service">Services</a></li>
            <li><a href="#projects" data-after="Projects">Projects</a></li>
            <li><a href="#about" data-after="About">About</a></li>
            <li><a href="#contact" data-after="Contact">Contact</a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- End Header -->
        <header>
            <!-- Contact Form -->
  <section id="contact">
    <div class="contact container">
      <div><h1 class="section-title">Contact <span>info</span></h1></div>
      <div class="contact-items">
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/phone.png"/></div>
          <div class="contact-info">
            <h1>Phone</h1>
            <h2>+1 435 819 0240</h2>
          </div>
        </div>
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/new-post.png"/></div>
          <div class="contact-info">
            <h1>Email</h1>
            <h2>nephidraper@gmail.com</h2>
            <h2>nephi.dhshowroom@gmail.com</h2>
          </div>
        </div>
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/map-marker.png"/></div>
          <div class="contact-info">
            <h1>Address</h1>
            <h2>351 E Park Creeke Ln D<br>
                South Salt Lake, Utah 84115
            </h2>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Contact Section -->
            
                <hr/>
            </header>    
            <nav>
            <a href="./index.php">Home </a> /
            <a href="./portfolio.php">Portfolio </a> /
            <a href="./about.php">About </a> /
            <a href="./education.php">Education </a> /
            <a href="./contactme.php">Contact Me </a> /
            </nav>

            

        <h1>Contact Form</h1>
        <form class="needs-validation" novalidate>
          <div class="form-row">
            <div class="col-md-6 mb-3">
              <label for="validationCustom01">First name</label>
              <input type="text" class="form-control" id="validationCustom01" value="Mark" required>
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="validationCustom02">Last name</label>
              <input type="text" class="form-control" id="validationCustom02" value="Otto" required>
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
          </div>
          <div class="form-row">
            <div class="col-md-6 mb-3">
              <label for="validationCustom03">City</label>
              <input type="text" class="form-control" id="validationCustom03" required>
              <div class="invalid-feedback">
                Please provide a valid city.
              </div>
            </div>
            <div class="col-md-3 mb-3">
              <label for="validationCustom04">State</label>
              <select class="custom-select" id="validationCustom04" required>
                <option selected disabled value="">Choose...</option>
                <option>...</option>
              </select>
              <div class="invalid-feedback">
                Please select a valid state.
              </div>
            </div>
            <div class="col-md-3 mb-3">
              <label for="validationCustom05">Zip</label>
              <input type="text" class="form-control" id="validationCustom05" required>
              <div class="invalid-feedback">
                Please provide a valid zip.
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
              <label class="form-check-label" for="invalidCheck">
                Agree to terms and conditions
              </label>
              <div class="invalid-feedback">
                You must agree before submitting.
              </div>
            </div>
          </div>
          <button class="btn btn-primary" type="submit">Submit form</button>
        </form>
        
        <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
          'use strict';
          window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
              form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                  event.preventDefault();
                  event.stopPropagation();
                }
                form.classList.add('was-validated');
              }, false);
            });
          }, false);
        })();
        </script>
        <form class=list action="http://form-test.slccwebdev.com/form-success.php"
        method="get">
        
        <label for="name">Name:</label>
        <input type="text" name="name" id="name"> <br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email"> <br>

        <label for="phone">Phone:</label>
        <input type="tel" name="Phone" id="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"> <br>

        <label for="comments">Comments:</label> <br>
        <textarea id="comments" name="Comments"
            col="50"
            rows="4"
            maxlength="350">
            Enter your comments here

        </textarea><br>
        <p>May I contact you?</p>
        <input type="radio"
                id="yes"
                name="contact-back"
                value="Yes">
        <label for="yes">Yes</label>
        <input type="radio"
                id="no"
                name="contact-back"
                value="No">
        <label for="no">No</label>

        <p>Best Contact Method</p>
        <input type="checkbox"
                id="contactphone"
                name="contact-phone"
                value="Phone">
        <label for="contactphone">
            Phone
        </label>
        <input type="checkbox"
                id="contacttext"
                name="contact-text"
                value="Text">
        <label for="contacttext">
            Text
        </label>
            
        <input type="checkbox"
                id="contactemail"
                name="contact-email"
                value="Email">
        <label for="contactemail">
            Email
        </label>
            

        <button>Submit</button>
              
              
        </form>
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="./app.js"></script>
    </body>
</html>