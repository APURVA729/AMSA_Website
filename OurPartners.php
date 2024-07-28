<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing:border-box;
}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.container {
  padding: 64px;
}

.row:after {
  content: "";
  display: table;
  clear: both
}

.column-66 {
  float: left;
  width: 66.66666%;
  padding: 20px;
}

.column-33 {
  float: left;
  width: 33.33333%;
  padding: 20px;
}

.large-font {
  font-size: 30px;
}

.xlarge-font {
  font-size: 64px
}

.button {
  border: none;
  color: white;
  padding: 14px 28px;
  font-size: 16px;
  cursor: pointer;
  background-color: #4CAF50;
}

img {
  display: block;
  height: auto;
  max-width: 100%;
}

@media screen and (max-width: 1000px) {
  .column-66,
  .column-33 {
    width: 100%;
    text-align: center;
  }
  img {
    margin: auto;
  }
}
</style>
</head>
<body>

  <div style= "font-family: tisa; font-size: 18px;">
<div style="text-align:center">
  <!--<h2 class= "xlarge-font" style="color:#e85906;"><b>About Us</b></h2>-->
  <p class="large-font" style="color: #f2e0c2;">Our Partners</p>
</div>

<!-- The App Section -->
<div class="container" style="background-color: #f2e0c2;">
  <div class="row">
    <div class="column-66">
      <h1 class="large-font" style="color:rgb(211, 14, 0);"><b>a. ISM Edutech pvt. ltd. </b></h1>
      <p>Everyone deserves to get educated regardless of their circumstances and circumstances should not be defining a person. 
         This pithy statement defines what ISM Edutech is all about and why it came into being. The founders of ISM Edutech wanted 
         to be the chariots of hope and a provider of opportunities to students who had the capacity but were unfortunate victims of 
         high capitation fees or qualifying examinations.<br><br>
        
         ISM EDUTECH is deeply engaged, in planning and efforts, to be the beacon which helps in the far-reaching transformation 
         of medical science education and practice for an unprecedented advancement in human health.<br><br>

         ISM Edutech is considered as one of the leading education consultant in India having its head office in Gurgoan and 50+ 
         Associate/Agent offices all over India. We also have Agent offices across the globe namely GEORGIA, KYRGYZSTAN, KAZAKHSTAN & TAJIKISTAN.

        </p>
        <div class="blankdivider30">
			<div class="aligncenter">
				<a href="https://www.ismedutech.com/about-us.php" class="btn btn-large btn-theme">read more</a>
			</div>
		</div>
    </div>
    <div class="column-33">
        <img src="/AMSA kyrg/theme-AMSA/assets/img/whoweare1.jpg" width="500" height="1000">
    </div>
  </div>
</div>
</div>

</body>
</html>
