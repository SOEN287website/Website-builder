<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find Your Service!</title>
    <style>

      

        .mainAd {
            position: fixed;
            font-weight: bolder;
            font-size: 7.0vh;
            font-family:Georgia;

            top: 12%;
            left: 10%;
            z-index: 2;
        }

        .mainBuy {
            position: fixed;
            font-weight: bolder;
            font-size: 7.0vh;
            font-family:Georgia;
            top: 12%;
            left: 57.5%;
            z-index: 2;
        }


        .mainLine{

          position: fixed;
          width: 1vw; 
            height: 80vh; 
            background-color: black; 
            top: 10.45%;
            left: 51%;
            z-index: 2;
            border-radius: 50px; 
        }

        .homeSquare{

          position: fixed;
            width: 90vw;  
            height: 87vh; 
            top: 7%;
            left: 5%;
            background-color: rgb(158, 118, 69); 
            border-radius: 50px; 
            z-index: 1;

        }

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}
body {
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
  background: lightgreen;
}
.signin-box,
.signup-box {
  top: 27%; 
  left: 12.5%; 
  position: fixed;
  display: flex;
  justify-content: center;
  flex-direction: column;
  width: 400px;
  height: 400px;
  padding: 30px;
  border: 1px solid #d1d8dd;
  box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
  border-radius: 30px;
  background: #64b5f6;
  z-index: 2;
}
.signin-title,
.signup-title {
  text-align: center;
  margin: 20px 0 40px 0;
  z-index: 2;
}
.signin-title,
.signup-title header {
  color: #2c3e50;
  font-size: 30px;
  font-weight: 600;
  justify-content: center;
  align-items: center;
  z-index: 2;
}
.input-place {
  background-color: #ffffff;
  color: #333333;
  border: 1px solid #cccccc;
  z-index: 2;
}
.input-box .input-place {
  width: 100%;
  height: 40px;
  margin-bottom: 10px;
  border-radius: 30px;
  font-size: 19px;
  padding: 0 25px;
  border: none;
  box-shadow: 0px 4px 4px 0px;
  outline: none;
  transition: 0.2s;
  z-index: 2;
}
::placeholder {
  font-weight: 500;
  color: #95a5a6;
  z-index: 2;
}
.input-place:focus {
  width: 105%;
}
.forgot-password {
  display: flex;
  justify-content: space-between;
  margin-bottom: 35px;
  z-index: 2;
}
section {
  display: flex;
  align-items: center;
  font-size: 13px;
  color: #4a4a4a;
  z-index: 2;
}
#check {
  margin-right: 7px;
  z-index: 2;
}
a {
  text-decoration: none;
  z-index: 2;
}
a:hover {
  text-decoration: underline;
  z-index: 2;
}
.input-submit {
  position: relative;
  z-index: 2;
}
.submit-btn {
  width: 100%;
  height: 50px;
  background-color: #222;
  border-radius: 30px;
  border: none;
  cursor: pointer;
  transition: 0.2s;
  z-index: 2;
}
.input-submit label {
  position: absolute;
  top: 45%;
  left: 50%;
  color: white;
  transform: translate(-50%, -50%);
  font-size: 15px;
  font-weight: 600;
  cursor: pointer;
  z-index: 2;
}
.submit-btn:hover {
  background: black;
  transform: scale(1.05);
  z-index: 2;
}
.create-btn {
  display: flex;
  justify-content: center;
  align-items: center;
  margin-top: 10px;
  width: 100%;
  height: 30px;
  cursor: pointer;
  border: none;
  background-color: #64b5f6;
  border-radius: 20px;
  transition: 0.2s;
  z-index: 2;
}
.create-btn {
  color: black;
  font-size: 20px;
  background: none;
  border: none;
  cursor: pointer;
  font-weight: 600;
}

.create-btn:hover {
  background-color: white;
  transform: scale(1.05);
  z-index: 2;
}


.signin-box1,
.signup-box1 {
  top: 27%; 
  left: 12.5%; 
  position: fixed;
  display: flex;
  justify-content: center;
  flex-direction: column;
  width: 400px;
  height: 400px;
  padding: 30px;
  border: 1px solid #d1d8dd;
  box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
  border-radius: 30px;
  background: #64b5f6;
  z-index: 2;
}
.signin-title1,
.signup-title1 {
  text-align: center;
  margin: 20px 0 40px 0;
  z-index: 2;
}
.signin-title1,
.signup-title1 header {
  color: #2c3e50;
  font-size: 30px;
  font-weight: 600;
  justify-content: center;
  align-items: center;
  z-index: 2;
}
.input-place1 {
  background-color: #ffffff;
  color: #333333;
  border: 1px solid #cccccc;
  z-index: 2;
}
.input-box1 .input-place1 {
  width: 100%;
  height: 40px;
  margin-bottom: 10px;
  border-radius: 30px;
  font-size: 19px;
  padding: 0 25px;
  border: none;
  box-shadow: 0px 4px 4px 0px;
  outline: none;
  transition: 0.2s;
  z-index: 2;
}
::placeholder {
  font-weight: 500;
  color: #95a5a6;
  z-index: 2;
}
.input-place1:focus {
  width: 105%;
}
.forgot-password1 {
  display: flex;
  justify-content: space-between;
  margin-bottom: 35px;
  z-index: 2;
}
section {
  display: flex;
  align-items: center;
  font-size: 13px;
  color: #4a4a4a;
  z-index: 2;
}
#check {
  margin-right: 7px;
  z-index: 2;
}
a {
  text-decoration: none;
  z-index: 2;
}
a:hover {
  text-decoration: underline;
  z-index: 2;
}
.input-submit1 {
  position: relative;
  z-index: 2;
}
.submit-btn1 {
  width: 100%;
  height: 50px;
  background-color: #222;
  border-radius: 30px;
  border: none;
  cursor: pointer;
  transition: 0.2s;
  z-index: 2;
}
.input-submit1 label {
  position: absolute;
  top: 45%;
  left: 50%;
  color: white;
  transform: translate(-50%, -50%);
  font-size: 15px;
  font-weight: 600;
  cursor: pointer;
  z-index: 2;
}
.submit-btn1:hover {
  background: black;
  transform: scale(1.05);
  z-index: 2;
}
.create-btn1 {
  display: flex;
  justify-content: center;
  align-items: center;
  margin-top: 10px;
  width: 100%;
  height: 30px;
  cursor: pointer;
  border: none;
  background-color: #64b5f6;
  border-radius: 20px;
  transition: 0.2s;
  z-index: 2;
}
.create-btn1 {
  color: black;
  font-size: 20px;
  background: none;
  border: none;
  cursor: pointer;
  font-weight: 600;
}

.create-btn1:hover {
  background-color: white;
  transform: scale(1.05);
  z-index: 2;
}

        

       
    </style>
</head>
<body>
    
  <div class="mainAd">Advertise Buisness</div>
  <div class="mainBuy">Search Service</div>
  <div class="homeSquare"></div>
  <div class="mainLine"></div>

  <div class="signin-box">
      <div class="signin-title">
        <header>Sign in</header>
      </div>
      <div class="input-box">
        <input
          class="input-place"
          type="text"
          placeholder="Username"
          required
        />
      </div>
      <div class="input-box">
        <input
          class="input-place"
          type="password"
          placeholder="Password"
          required
        />
      </div>
      <div class="forgot-password">
        <section>
          <input type="checkbox" id="check" />
          <label for="check">Remember me</label>
        </section>
        <section>
          <a href="#">Forgot password?</a>
        </section>
      </div>
      <div class="input-submit">
        <button id="submit" class="submit-btn" onclick="location.href='main-page.html'"></button>
        <label for="submit">Sign in</label>
      </div>
        <button id="create-acc" class="create-btn" onclick="location.href='account-creation.html'">Create an account</button>
      </div>
    </div>


    <div class="signin-box1">
      <div class="signin-title1">
        <header>Sign in</header>
      </div>
      <div class="input-box1">
        <input
          class="input-place1"
          type="text"
          placeholder="Username"
          required
        />
      </div>
      <div class="input-box1">
        <input
          class="input-place1"
          type="password"
          placeholder="Password"
          required
        />
      </div>
      <div class="forgot-password1">
        <section>
          <input type="checkbox" id="check" />
          <label for="check">Remember me</label>
        </section>
        <section>
          <a href="#">Forgot password?</a>
        </section>
      </div>
      <div class="input-submit1">
        <button id="submit" class="submit-btn" onclick="location.href='main-page.html'"></button>
        <label for="submit">Sign in</label>
      </div>
        <button id="create-acc" class="create-btn" onclick="location.href='account-creation.html'">Create an account</button>
      </div>
    </div>


</body>
</html>
