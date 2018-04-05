<!DOCTYPE html>
<html>
<head>

	<title>Union HK</title>
	<!-- How the browser should display the page zoom level and dimensions -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Links/Codes from jquerymobile.com -->
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>

    <!-- The head is copied from Murat -->
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
	<link rel="shortcut" href="http://demos.jquerymobile.com/1.4.5/favicon.ico">
	<script src="http://demos.jquerymobile.com/1.4.5/js/jquery.js"></script>
	<script src="http://demos.jquerymobile.com/1.4.5/_assets/js/index.js"></script>
	<script src="http://demos.jquerymobile.com/1.4.5/js/jquery.mobile-1.4.5.min.js"></script>-->

</head>

<body>
<!-- Page ZERO -->
<div data-role="page" id="zero">
   <!-- header -->
     <div data-role="header">
        <h1>Union HK</h1>
    </div>
    <!-- content -->
    <div data-role="main" class="ui-content"></div>
       <h2>This is a landing page</h2>
        <p>Page content</p>
        <p><a href="#one" data-transition="slide" class="ui-btn ui-shadow ui-corner-all ui-icon-forward ui-btn-icon-right">NEXT</a></p>
    <!-- footer -->
    <div data-role="footer"> 
        <h4>Page Footer</h4> 
    </div> 
</div> 
<!-- Page ONE -->
<div data-role="page" id="one">
   <!-- header -->
    <div data-role="header">
        <h1>Union HK</h1>
    </div>
    <!-- content -->
    <div data-role="main" class="ui-content">
       <h2>Log In</h2>
        <p>Fill up with your username and password</p>
        <!-------------- First page main content from https://www.formget.com/jquery-mobile-form/ ----------->
        <form method="post" action="#pageone" data-ajax="false">
        <label for="name">Username : </label>
        <input type="text" name="name" id="name" placeholder="Name">
        <label for="password">Password: </label>
        <input type="password" id="password" name="password" placeholder="Password"/>
        </form>
        <p><a href="#three" data-transition="slide" class="ui-btn ui-shadow ui-corner-all ui-icon-forward ui-btn-icon-right">Log In</a></p>
           <form>
           <h2>Create a new account</h2>
            <fieldset data-role="controlgroup">
        <label for="name">Username : <span>*</span></label>
        <input type="text" name="name" id="name" placeholder="Name">
        <label for="email">Email: <span>*</span></label>
        <input type="email" id="email" name="email" placeholder="Email"/>
        <label for="password">Password: <span>*</span></label>
        <input type="password" id="password" name="password" placeholder="Password"/>
        <label for="password">Repeat your password: </label>
        <input type="password" id="password" name="password" placeholder="Password"/> 
         <!-- Date of birth -->
                <div data-role="fieldcontain">
        <fieldset data-role="controlgroup" data-type="horizontal">
            <legend>Date of Birth:</legend><br>

            <label for="select-choice-month">Month</label>
        <select name="select-choice-month" id="select-choice-month">
            <option>Month</option>
            <option value="jan">January</option>
            <!-- etc. -->
        </select>

            <label for="select-choice-day">Day</label>
        <select name="select-choice-day" id="select-choice-day">
            <option>Day</option>
            <option value="1">1</option>
            <!-- etc. -->
        </select>

        <label for="select-choice-year">Year</label>
        <select name="select-choice-year" id="select-choice-year">
            <option>Year</option>
            <option value="2011">2011</option>
            <!-- etc. -->
        </select>
        </fieldset>
        </div>
       <!-- End of Date of Birth -->
        <fieldset data-role="controlgroup">
        <legend>Gender:</legend>
        <label for="male">Male</label>
        <input type="radio" name="gender" id="male" value="male">
        <label for="female">Female</label>
        <input type="radio" name="gender" id="female" value="female">
        </fieldset>
       
        <p><a href="#two" data-transition="slide" class="ui-btn ui-shadow ui-corner-all ui-icon-forward ui-btn-icon-right">Sign Up</a></p>
               </fieldset>
            </form>
    </div>

    <!-- footer -->
    <div data-role="footer"> 
        <h4>Page Footer</h4> 
    </div>  
    </div>    

<!-- Page TWO -->
<div data-role="page" id="two">
   <!-- header -->
     <div data-role="header">
        <h1>Union HK</h1>
    </div>
    <!-- content -->
    <div data-role="main" class="ui-content">
        <p>Page content</p>
        <div data-role="fieldcontain">
        <div>
        <label for="name">Job Role:</label>
        <input type="text" name="name" id="name" value=""  />
        <label for="name">Hourly wage:</label>
        <input type="text" name="name" id="name" value=""  />
        <label for="name">Supplements:</label>
        <input type="text" name="name" id="name" value=""  />
        <label for="name">ATP:</label>
        <input type="text" name="name" id="name" value=""  />	
        <label for="name">Meal wage:</label>
        <input type="text" name="name" id="name" value=""  />
        <label for="name">Sallary in case of sickness:</label>
        <input type="text" name="name" id="name" value=""  />
        <label for="name">Food supplements:</label>
        <input type="text" name="name" id="name" value=""  />
        <label for="name">Compensation meal wage:</label>
        <input type="text" name="name" id="name" value=""  />	
        <label for="name">A-Income:</label>
        <input type="text" name="name" id="name" value=""  />
        <label for="name">AM Contribution:</label>
        <input type="text" name="name" id="name" value=""  />
        <label for="name">Tax deduction:</label>
        <input type="text" name="name" id="name" value=""  />
        <label for="name">A- Taxes:</label>
        <input type="text" name="name" id="name" value=""  />
        <label for="name">Salary before taxes:</label>
        <input type="text" name="name" id="name" value=""  />
            </div>
        </div>
        <p><a href="#three" data-transition="slide" class="ui-btn ui-shadow ui-corner-all ui-icon-forward ui-btn-icon-right">NEXT</a></p>
        <p><a href="#one" data-direction="reverse" data-transition="slide" class="ui-btn ui-shadow ui-corner-all ui-icon-forward ui-btn-icon-right">BACK</a></p>
        </div>
    <!-- footer -->
    <div data-role="footer"> 
        <h4>Page Footer</h4> 
    </div> 
</div> 
  
   
<!-- Page THREE -->
<div data-role="page" id="three">
   <!-- header -->
     <div data-role="header">
        <h1>Union HK</h1>
    </div>
    <!-- content -->
    <div data-role="main" class="ui-content">
        <p>Page content</p>
         <p><a href="#four" data-transition="slide" class="ui-btn ui-shadow ui-corner-all ui-icon-forward ui-btn-icon-right">NEXT</a></p>
        <p><a href="#two" data-direction="reverse" data-transition="slide" class="ui-btn ui-shadow ui-corner-all ui-icon-forward ui-btn-icon-right">BACK</a></p>
        </div>
    <!-- footer -->
    <div data-role="footer"> 
        <h4>Page Footer</h4> 
    </div> 
</div> 

<!-- Page FOUR -->
<div data-role="page" id="four">
   <!-- header -->
     <div data-role="header">
        <h1>Union HK</h1>
    </div>
    <!-- content -->
    <div data-role="main" class="ui-content"></div>
        <p>Page content</p>
        <p><a href="#three" data-direction="reverse" data-transition="slide" class="ui-btn ui-shadow ui-corner-all ui-icon-forward ui-btn-icon-right">BACK</a></p>
    <!-- footer -->
    <div data-role="footer"> 
        <h4>Page Footer</h4> 
    </div> 
</div>                                                               
    
    
</body>
</html>