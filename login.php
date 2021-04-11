<!DOCTYPE html>

<html>

	<head>
		<title>My Site</title>
		
		<style>
				/*	.uper {
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
                     display: flex;
                    justify-content: center;
                    align-items: center;
		} 
						  .reg {
							margin: auto;
							width: 50%;
							border: 3px solid green;
							padding: 10px;
			}*/
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
                height: 50%;
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
		</style>
	</head>
		
		
		
	<body>
	
	   
        <div class="login-card">
            <div class="heading"><h1 class="head shadow">Login<br><p class="para">plese give your user name and password to login!</p></h1></div>
            <div class="login">
                <form action="checklogin.php" method="post" class="login-form">
			        <p>User Name</p> 
                    <input type="text" id="email" name="email" class="input-field">
                    <br>
                    <p>Password</p>
			         <input type="password" id="psw" name="psw" class="input-field">
			         <br/>
			         <input type="submit" value="Log In" class="input-field">
		          </form>
                <h3>For registration click <a href="signup.php" target="_top">here</a></h3>
            </div>
        </div>
	   <!--<div class="mid">
		<form action="checklogin.php" method="post">
			User Name: <input type="text" id="email" name="email">
			<br/>
			 Password: <input type="password" id="psw" name="psw">
			<br/>
			<input type="submit" value="Log In">
		</form>
		
		</div>
		
		<div class="reg">
		<h2> For registration click <a href="signup.php" target="_top">here</a>  </h2>
		</div>-->
	</body>

</html>