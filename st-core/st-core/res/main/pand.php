<!DOCTYPE html>
<html>
<head>
    {{head}}
	<title>Registration</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<style type="text/css">
	body,html{
		overflow: auto;
		display: block;
	}
  .jumbotron {
    position:relative;
    overflow:hidden;
  }

  .jumbotron .container {
    position:relative;
    z-index:2;
    background:rgba(0,0,0,0.2);
    padding:2rem;
    border:1px solid rgba(0,0,0,0.1);
    border-radius:3px;
  }

  .jumbotron-background {

    background-size: cover;
    background-position: center;
    position:absolute;
    top:0;
    z-index:1;
    width:100%;
    height:100vh;
    opacity:0.5;
  }

  img.blur {
    -webkit-filter: blur(4px);
    filter: blur(4px);
    filter:progid:DXImageTransform.Microsoft.Blur(PixelRadius='4');

  }
  @import url(https://fonts.googleapis.com/css?family=Exo+2:200i);

  :root {
    /* Base font size */
    font-size: 10px;

    /* Set neon color */
    --neon-text-color: #f40;
    --neon-border-color: #08f;
  }

  body {
    font-family: 'Exo 2', sans-serif;
    background: #000;
  }

  h1 {
    font-size: 24px;
    font-weight: 100;
    font-style: italic;
    color: #fff;
    padding: 4px 6px 5.5px;
    border: 0.4rem solid #fff;
    border-radius: 5px;
    margin:auto;
    text-transform: uppercase;
    animation: flicker 1.5s infinite alternate;
  }

  h1::-moz-selection {
    background-color: var(--neon-border-color);
    color: var(--neon-text-color);
  }

  h1::selection {
    background-color: var(--neon-border-color);
    color: var(--neon-text-color);
  }

  h1:focus {
    outline: none;
  }

  /* Animate neon flicker */
  @keyframes flicker {

    0%, 19%, 21%, 23%, 25%, 54%, 56%, 100% {

      text-shadow:
      -0.2rem -0.2rem 1rem #fff,
      0.2rem 0.2rem 1rem #fff,
      0 0 2rem var(--neon-text-color),
      0 0 4rem var(--neon-text-color),
      0 0 6rem var(--neon-text-color),
      0 0 8rem var(--neon-text-color),
      0 0 10rem var(--neon-text-color);

      box-shadow:
      0 0 .5rem #fff,
      inset 0 0 .5rem #fff,
      0 0 2rem var(--neon-border-color),
      inset 0 0 2rem var(--neon-border-color),
      0 0 4rem var(--neon-border-color),
      inset 0 0 4rem var(--neon-border-color);
    }

    20%, 24%, 55% {
      text-shadow: none;
      box-shadow: none;
    }
  }
.btn {
  background-color: #ffffff;
  border: none;
  color: black;
  padding: 8px 16px;
  text-align: center;
  font-size: 16px;
  margin: 4px 2px;
  opacity: 1;
  transition: 0.3s;
  
}

.btn::before{
    display: none;
}

</style>
<body>
  <div class="container-fluid col-lg-12">
    <div class="row mb-3 mt-3">
      <div class="col-xs-2 col-lg-4">
      <img src="asset/img/ext/recbanda.png" class="d-sm-none" style="width: 50px;height: 50px;">

      <img src="college.jpg" class="d-sm-none" style="width: 50px;height: 50px; float: right;">
       <a href="http://recbanda.ac.in/"><img src="asset/img/ext/recbanda.png" class="d-none d-sm-block" style="width: 100px;height: 100px;float: right;"></a>
     </div>
    <div class="col-xs-8 col-lg-4">
      <h1 class="text-center mt-5 d-none d-sm-block">The Pandemic Code</h1>
      <h1 class="text-center d-sm-none" style="font-size:15px ;width:200px;margin-top: -40px;">The Pandemic Code</h1>
    </div>
      <div class="col-xs-2 col-lg-4 ">
      <img src="asset/img/ext/college.jpg" class="d-none d-sm-block" style="width: 100px;height: 100px;">


    </div>
  </div>
</div>
    <div class="text-center py-3" style="background-color: #0066CC;">
      <h3 style="color: white;">For more information:
      <a href="https://docs.google.com/gview?url=https://avtr.org.in/asset/abstract/abstract.pdf&embedded=true" target="blank" style="color: white; font-weight: 20px;"><button class="btn" style="width: max-content;">Click here</button></a></h3>
    </div>


    <div class="jumbotron jumbotron-fluid bg-dark">
      <div class="jumbotron-background">
        <img src="asset/img/ext/code.jpg" class="blur ">
      </div>
      <div class="container text-white">
        <div class="container col-sm-12 col-lg-4" style="border:1px solid grey;">
         <h3 class="text-center pt-2 pb-2" style="color: white" >Registration Form</h3>
         <form name="registration"  style="color: white" method="POST" action="ThePandemicCode/submit">
          <div class="form-group">
            <label>Name:</label>
            <input type="text" class="form-control" placeholder="Name" name="name" required>
          </div>
          <div class="form-group">
            <label>Email Address:</label>
            <input type="email" class="form-control" placeholder="Email" name="email" required>
          </div>
          <div class="form-group">
            <label>Branch:</label>
            <input type="text" class="form-control" placeholder="Branch" name="branch" required>
          </div>
          <div class="form-group">
            <label>Roll No:</label>
            <input type="text" class="form-control" placeholder="Roll No" name="rollno" required>
          </div>
          <div class="form-group">
            <label>Year:</label>
            <div class="radio">
              <label class="radio-inline pr-5"><input type="radio" name="year" value="1 year" checked
                  required>1<sup>st</sup></label>

              <label class="radio-inline pr-5"><input type="radio" name="year" value="2 year"
                  required>2<sup>nd</sup></label>

              <label class="radio-inline pr-5"><input type="radio" name="year" value="3 year"
                  required>3<sup>rd</sup></label>

              <label class="radio-inline pr-5"><input type="radio" name="year" value="4 year"
                  required>4<sup>th</sup></label>
            </div>
          </div>
          <div class="form-group">
            <label>Gender:</label>
            <div class="radio">
              <label class="radio-inline pr-5"><input type="radio" name="gender" value="Male" required>Male</label>

              <label class="radio-inline pr-5"><input type="radio" name="gender" value="Female" required>Female</label>

              <label class="radio-inline pr-5"><input type="radio" name="gender" value="others" required>others</label>

            </div>
          </div>
          <div class="form-group">
            <label>College/University: </label>
            <input type="text" class="form-control" placeholder="College Name" name="college" required>
          </div>
          <div class="form-group">
            <label>City:</label>
            <input type="text" class="form-control" placeholder="City" name="city" required>
          </div>
          <div class="form-group">
            <label>Mobile No:</label>
            <input type="text" class="form-control" placeholder="Mobile No." name="contactno" required>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg btn-block" onclick="return regsucc()" name="submit">Submit</button>
          </div>
        </form>
      </div>

  </div>
 </div>
</div>
  <footer class="page-footer font-small pt-4" style="color: white;background-color: #202020; margin-top: -20px;">
    <div class="container-fluid text-center text-lg-center">
      <div class="row">
          <div class="col-md-4 mb-md-0 mb-3">
          <h5 class="text-uppercase"><u>FACULTY COORDINATOR</u></h5>
          <p>Mr. Abhijeet Singh<br><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;+919456244675</p>
          <h5 class="text-uppercase"><u>Tester:</u></h5>
          <p>Mr. Narendra Rajpoot<br><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;+917860816483</p>

        </div>
        <div class="col-lg-4 mt-lg-0 mt-3">
          <h5 class="text-uppercase"><u>Organiser:</u></h5>
          <p>Mr. Praphull Maurya<br><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;+918090074821</p>
          <p>Mr. Somendra Shekhar<br><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;+917355480140</p>
        </div>

        <div class="col-md-4 mb-md-0 mb-3">
          <h5 class="text-uppercase"><u>Contact Us:</u></h5>
          <p>Mr. Anubhav Rawat<br><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;+919005478713</p>
          <p>Mr. Nayan Gupta<br><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;+918418828338</p>
        </div>
      </div>
    </div>
    <div class="footer-copyright text-center py-3" style="background-color: #0066CC;">© Copyright:
      <a> AVATAR 2020</a>
    </div>
  </footer>
</div>
</body>
<script type="text/javascript">
  function regsucc(){
    if ((document.form['registration']['name'].value="")&&(document.form['registration']['email'].value="")&&(document.form['registration']['branch'].value="")&&(document.form['registration']['year'].value="")&&(document.form['registration']['gender'].value="")&&(document.form['registration']['contactno'].value="")) {
      alert("Data Field should not be empty");
      return false
    }
    else{alert("Form submitted successfully");
      return true
    }
  }
	$(function () { objectFitImages() });
</script>
</html>
