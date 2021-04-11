 
 <html>
   <head>
   <title>Sign up</title>
   <style>
			 /*  .uper {
						 background-color: black;
						 color: white;
						 margin: 0px;
						 padding: 0px;
			} 

			.mid {
						 background-color: powderblue;;
						 color: white;
						 margin: 0px;
						 padding: 90px;
						 text-align: center;
			} */
       .login-card{
                width: 100%;
                height: 100vh;
                display: flex;
                justify-content: center;
                align-items: center;
                flex: 0 0 100%;
                text-align: center;
            }
            .head{
                padding: 10px;
                box-shadow: inset 3px 3px 3px gray,inset 3px 3px 3px gray;
            }
            .shadow{
                box-shadow: 3px 3px 3px gray;
            }
            .login{
                background: #EFF0F4;
                width: 30%;
                height: 80%;
                display: flex;
                justify-content: center;
                align-items: center;
                border-radius: 20px;
                flex-direction: column;
                border: 5px solid gray;
            }
            .input-field{
                background: transparent;
                height: 30px;
                text-align: center;
                border: 2px solid gray;
                border-radius: 10px;
                outline: none;
            }
            .login-form{
                display: flex;
                justify-content: center;
                flex-direction: column;
                text-align: center;
            }
            .input-field:hover{
                box-shadow: 3px 3px 3px gray, 0px 0px 0px gray;
            }
            .para{
                font-size: 14px;
                color: gray;
            }
            .heading{
                margin-right: 40px;
            }
       .btn{
           display: flex;
           justify-content: center;
           justify-content: space-around;
       }
       .btn1{
           border-radius: 30px;
           width: 80px;
       }
       .btn1:hover{
           box-shadow: 3px 3px 3px gray;
       }

</style>
   </head>
   <body>
   
   <div class="login-card">
            <div class="heading"><h1 class="head shadow">Sign Up<br><p class="para">Please fill in this form to create an account.</p></h1></div>
            <div class="login">
                <form action="registration.php"  method="post">

                   <p>Email</p>
                    <input class="input-field" type="text"  name="email" required><br>

                    <p>Password</p>
                    <input class="input-field" type="password"  name="psw" required><br>



                    <p>First Name</p>
                    <input class="input-field" type="text"  name="fname" required><br>

                    <p>Last Name</p>
                    <input class="input-field" type="text"  name="lname" required><br>

                    <br>

                    <label>
                      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
                    </label>
                    <div class="btn">
                        <button type="button" class="cancelbtn btn1">Cancel</button>
                        <button  type="submit" class="signupbtn btn1">Sign Up</button>
                    </div>
                </form> 
                <h3>For login click <a href="login.php" target="_top"> Login page</a></h3>
            </div>
        </div>
   <!--<div class="uper">
   
   <h1 style="text-align:center">Sign Up</h1>
    <p style="text-align:center">Please fill in this form to create an account.</p>
    <hr>
   </div>
   
     
	 <div class="mid">
     <form action="registration.php"  method="post">

        <label for="email"><b>Email</b></label>
        <input type="text"  name="email" required><br>

        <label for="psw"><b>Password</b></label>
        <input type="password"  name="psw" required><br>



        <label for="name"><b>first name</b></label>
        <input type="text"  name="fname" required><br>

        <label for="s_id"><b>last name</b></label>
        <input type="text"  name="lname" required><br>



        <label>
          <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
        </label>




          <button type="button" class="cancelbtn">Cancel</button>
          <button type="submit" class="signupbtn">Sign Up</button>
    
  
        </form> 
			
         <a href="login.php" target="_top">Login page</a>-->

      </div>
   </body>
</html>