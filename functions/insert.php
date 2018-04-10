<html>
 <head>
   <link href="assets/css/bootstrap.min.css" rel="stylesheet" >
   <link href="assets/css/bootstrap-theme.min.css" rel="stylesheet" >
   <link href="assets/css/font-awesome.min.css" rel="stylesheet" >
   <link href="assets/css/font-awesome.css" rel="stylesheet" >
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Droid+Serif" rel="stylesheet">
   <link href="assets/css/style.css" rel="stylesheet" >
  <script>
  function fun(){
	var username= document.form.username.value;
	var email= document.form.email.value;
  var password= document.form.password.value;
  var Cpassword= document.form.Cpassword.value;
	if(username=="" && password==""){
		document.getElementById('c1').innerHTML="Entries are required";
    document.getElementById('c2').innerHTML="Entries are required";
	flag=false;

	}
	if(username==""){

	document.getElementById('c1').innerHTML="Name is Blank";
	flag=false;
	}
  if(email==""){

	document.getElementById('c2').innerHTML="Email is Blank";
	flag=false;
	}
	if(password==""){
		document.getElementById('c3').innerHTML="password is Blank";
	flag=false;
	}
  if(Cpassword==""){
		document.getElementById('c3').innerHTML="password is Blank";
	flag=false;
	}
	return flag;
  }



  </script>
 </head>

  <body>
    <div class="container-fluid">
      <div class="row">
        <section id="logo">
          <div class="col-md-12">
            <div class="col-md-6 col-xs-12">
              <img class="lg"src="assets/img/lg.jpg" />
            </div>
           <div class="col-md-6 col-xs-12">
             <h2>Already Registered? <a href="login.php">Login </a>here</h2>
           </div>
         </div>
       </section>
      </div>





  <div class="row">
    <section id="login">
      <h1> Sign Up</h1>
    </section>
  </div>



    <div class="row">
      <section id="input">
       <div class="col-md-12">
        <div class="col-md-4">
          <h6>Name:</h6>
          <h6>Email:</h6>
          <h6>Password:</h6>
          <h6>Confirm password:</h6>
          <h6>Enter your id:</h6>
          <h6>Gender:</h6>
          <h6>Date of joining:</h6>
          <h6>Id Proof:</h6>
          <h6>Profile Picture:</h6>
          <h6>Designation:</h6>
          <h6>Department:</h6>
          <h6>Mobile:</h6>
          <h6>Alternate mobile:</h6>
          <h6>Address:</h6>
       </div>




       <div class="col-md-4">
        <form method="post" name="form" onsubmit="return fun()" action="signup_trans.php" enctype="multipart/form-data">
        <br >  <input type="text" name="username" placeholder="Enter your full name"><span id="c1">  </span></br>
        <br >  <input type="email" name="email" placeholder="Enter your email"><span id="c2"></span></br>
        <br ><input type="password" name="password" placeholder="password"><span id="c3"></span></br>
        <br >  <input type="password" name="Cpassword" placeholder="Confirm password"><span id="c4"></span></br>
        <br >  <input type="text" name="id" placeholder="Enter your id"><span id="c5"></span></br>


        <input style="width:20px" type="radio" name="gender" value="male" checked> Male
          <input style="width:20px" type="radio" name="gender" value="female"> Female<br />




        <br >  <input type="text" name="doj" placeholder="Date of Joining"><span id="c8"></span></br>
        <br >  <input type="file" name="proof" placeholder="Id_proof"><span id="c1">  </span>
        <br >  <input type="file" name="profile" placeholder="upload your profile picture"><span id="c1">  </span>

          <br > <select name="select">
             <br ><option value="-1">select</option>
             <<option value="zvb">abc</option>
           </select><br />
          <br >   <select name="select2">
             <option value="-1">Select</option>
             <<option value="">abc</option>
           </select><br />
          <br >  <input type="text" name="mobile" placeholder="Enter your mobile"><span id="c1">  </span></br>
            <br ><input type="text" name="mobile2" placeholder="Enter your alternate mobile"><span id="c1">  </span></br>
            <br ><input type="text" name="address" placeholder="Enter your Address "><span id="c1">  </span></br>
          <br >  <input type="submit" name="submit" value="Sign Up"></br>
         </form>
       </div>



       <div class="col-md-4">
         <p>
           Fill my details from
         </p>
         <button class="facebook">  <i class="fa fa-facebook-square" aria-hidden="true"></i>Facebook</button>
         <button class="twitter">  <i class="fa fa-twitter" aria-hidden="true"></i>Twiter</button>
       </div>
     </div>
    </section>
  </div>
 </div>
</body>

</html>
