<!DOCTYPE html>
<html>

<head>

	<title>Union HK</title>
	<!-- How the browser should display the page zoom level and dimensions -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- inserting custom theme from http://themeroller.jquerymobile.com/ -->
	<link rel="stylesheet" href="themes/hk-union.css" type="text/css"/>
	<link rel="stylesheet" href="themes/jquery.mobile.icons.min.css" type="text/css"/>


	<!-- Links/Codes from jquerymobile.com (updated after creating a custom theme) -->
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile.structure-1.4.5.min.css"/>
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
	<!-- Page ONE -->
	<div data-role="page" id="one">
		<!-- header -->
		<div data-role="header">
			<img src="images/hk-logo.png" alt="the initials H and K which make up the HK logo" style="width: 50px; float: right;">
			<h1>Union HK</h1>
		</div>
		<!-- content -->
		<div data-role="main" class="ui-content">
			<h2>Log In</h2>
			<!-- Picture -->
			<img src="images/calculator.jpg" alt="picture of calculator" style="width: 370px;">
			<!-------------- First page main content from https://www.formget.com/jquery-mobile-form/ ----------->
			<form method="post" action="#pageone" data-ajax="false">
				<label for="name">Username : </label>
				<input type="text" name="name" id="name" placeholder="Name">
				<label for="password">Password: </label>
				<input type="password" id="password" name="password" placeholder="Password"/>
			</form>
			<p><a href="#four" data-transition="slide" id="log-in" class="ui-btn ui-shadow ui-corner-all ui-icon-forward ui-btn-icon-right">Log In</a>
			</p>
			<div class="signuplink">
			<p><a href="#two">Sign Up</a></p>
            </div>
		    </div>

		<!-- footer -->
		<div data-role="footer">
			<h4><a href="#five" id="footer-link">More information from HK</a></h4>
		</div>
	</div>
	<!-- end of Page ONE-->

	<!-- Page TWO -->
	<div data-role="page" id="two">
		<!-- header -->
		<div data-role="header">
			<img src="images/hk-logo.png" alt="the initials H and K which make up the HK logo" style="width: 50px; float: right;">
			<h1>Union HK</h1>
		</div>
		<!-- content -->
		<div data-role="main" class="ui-content">
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
					<div class="ui-field-contain">
						<fieldset data-role="controlgroup" data-type="horizontal">
							<legend>Date of Birth:</legend><br>

							<label for="select-choice-month">Month</label>
							<select name="select-choice-month" id="select-choice-month">
								<option>Month</option>
								<option value="jan">January</option>
								<option value="feb">February</option>
								<option value="mar">March</option>
								<option value="apr">April</option>
								<option value="may">May</option>
								<option value="jun">June</option>
								<option value="jul">July</option>
								<option value="aug">August</option>
								<option value="sep">September</option>
								<option value="oct">October</option>
								<option value="nov">November</option>
								<option value="dec">December</option>
							</select>

							<label for="select-choice-day">Day</label>
							<select name="select-choice-day" id="select-choice-day">
								<option>Day</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
								<option value="11">11</option>
								<option value="12">12</option>
								<option value="13">13</option>
								<option value="14">14</option>
								<option value="15">15</option>
								<option value="16">16</option>
								<option value="17">17</option>
								<option value="18">18</option>
								<option value="19">19</option>
								<option value="20">20</option>
								<option value="21">21</option>
								<option value="22">22</option>
								<option value="23">23</option>
								<option value="24">24</option>
								<option value="25">25</option>
								<option value="26">26</option>
								<option value="27">27</option>
								<option value="28">28</option>
								<option value="29">29</option>
								<option value="30">30</option>
								<option value="31">31</option>
								<!-- etc. -->
							</select>

							<label for="select-choice-year">Year</label>
							<select name="select-choice-year" id="select-choice-year">
								<option>Year</option>
								<option value="2020">2020</option>
								<option value="2019">2019</option>
								<option value="2018">2018</option>
								<option value="2017">2017</option>
								<option value="2016">2016</option>
								<option value="2015">2015</option>
								<option value="2014">2014</option>
								<option value="2013">2013</option>
								<option value="2012">2012</option>
								<option value="2011">2011</option>
								<option value="2010">2010</option>
								<option value="2009">2009</option>
								<option value="2008">2008</option>
								<option value="2007">2007</option>
								<option value="2006">2006</option>
								<option value="2005">2005</option>
								<option value="2004">2004</option>
								<option value="2003">2003</option>
								<option value="2002">2002</option>
								<option value="2001">2001</option>
								<option value="2000">2000</option>
								<option value="1999">1999</option>
								<option value="1998">1998</option>
								<option value="1997">1997</option>
								<option value="1996">1996</option>
								<option value="1995">1995</option>
								<option value="1994">1994</option>
								<option value="1993">1993</option>
								<option value="1992">1992</option>
								<option value="1991">1991</option>
								<option value="1990">1990</option>
								<option value="1989">1989</option>
								<option value="1988">1988</option>
								<option value="1987">1987</option>
								<option value="1986">1986</option>
								<option value="1985">1985</option>
								<option value="1984">1984</option>
								<option value="1983">1983</option>
								<option value="1982">1982</option>
								<option value="1981">1981</option>
								<option value="1980">1980</option>
								<option value="1979">1979</option>
								<option value="1978">1978</option>
								<option value="1977">1977</option>
								<option value="1976">1976</option>
								<option value="1975">1975</option>
								<option value="1974">1974</option>
								<option value="1973">1973</option>
								<option value="1972">1972</option>
								<option value="1971">1971</option>
								<option value="1970">1970</option>
								<option value="1969">1969</option>
								<option value="1968">1968</option>
								<option value="1967">1967</option>
								<option value="1966">1966</option>
								<option value="1965">1965</option>
								<option value="1964">1964</option>
								<option value="1963">1963</option>
								<option value="1962">1962</option>
								<option value="1961">1961</option>
								<option value="1960">1960</option>
								<option value="1959">1959</option>
								<option value="1958">1958</option>
								<option value="1957">1957</option>
								<option value="1956">1956</option>
								<option value="1955">1955</option>
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

					<p><a href="#three" data-transition="slide" class="ui-btn ui-shadow ui-corner-all ui-icon-forward ui-btn-icon-right">NEXT</a>
			        </p>
				</fieldset>
			</form>
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
			<img src="images/hk-logo.png" alt="the initials H and K which make up the HK logo" style="width: 50px; float: right;">
			<h1>Union HK</h1>
		</div>
		<!-- content -->
		<div data-role="main" class="ui-content">
		<h2>Pay Slip Information</h2>
			<div data-role="fieldcontain">
				<div>
					<!-- do we need to change any of these input types to numbers?-->
					<label for="name">Job Role:</label>
					<input type="text" name="name" id="name" value=""/>
					<label for="name">Hourly wage:</label>
					<input type="text" name="name" id="name" value=""/>
					<label for="name">Supplements:</label>
					<input type="text" name="name" id="name" value=""/>
					<label for="name">ATP:</label>
					<input type="text" name="name" id="name" value=""/>
					<label for="name">Meal wage:</label>
					<input type="text" name="name" id="name" value=""/>
					<label for="name">Sallary in case of sickness:</label>
					<input type="text" name="name" id="name" value=""/>
					<label for="name">Food supplements:</label>
					<input type="text" name="name" id="name" value=""/>
					<label for="name">Compensation meal wage:</label>
					<input type="text" name="name" id="name" value=""/>
					<label for="name">A-Income:</label>
					<input type="text" name="name" id="name" value=""/>
					<label for="name">AM Contribution:</label>
					<input type="text" name="name" id="name" value=""/>
					<label for="name">Tax deduction:</label>
					<input type="text" name="name" id="name" value=""/>
					<label for="name">A- Taxes:</label>
					<input type="text" name="name" id="name" value=""/>
					<label for="name">Salary before taxes:</label>
					<input type="text" name="name" id="name" value=""/>
				</div>
			</div>
			<p><a href="#four" data-transition="slide" class="ui-btn ui-shadow ui-corner-all ui-icon-forward ui-btn-icon-right">NEXT</a>
			</p>
			<p><a href="#two" data-direction="reverse" data-transition="slide" class="ui-btn ui-shadow ui-corner-all ui-icon-forward ui-btn-icon-right">BACK</a>
			</p>
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
			<img src="images/hk-logo.png" alt="the initials H and K which make up the HK logo" style="width: 50px; float: right;">
			<h1>Union HK</h1>
		</div>
		<!-- content -->
		<div data-role="main" class="ui-content">
			<h2>Salary Calculator</h2>
			<div data-role="fieldcontain">
				<div>
					<label for="name">Job Role:</label>
					<input type="text" name="name" id="name" value=""/>
					<label for="name">Hourly wage:</label>
					<input type="text" name="name" id="name" value=""/>
					<label for="name">Total hours:</label>
					<!-- changed input type to number for hours calculator-->
					<input type="number" name="name" id="name" value=""/>
					<label for="name">Supplementary hours:</label>
					<!-- changed input type to number for hours calculator-->
					<input type="number" name="name" id="name" value=""/>
					</div>
			</div>
			<div data-role="fieldcontain">
				<div>
					<label for="name">Salary before tax:</label>
					<input type="text" name="name" id="name" value=""/>
					<label for="name">Salary after tax:</label>
					<input type="text" name="name" id="name" value=""/>
				</div>
			</div>
			
			<p><a href="#five" data-transition="slide" class="ui-btn ui-shadow ui-corner-all ui-icon-forward ui-btn-icon-right">NEXT</a>
			</p>
			<p><a href="#three" data-direction="reverse" data-transition="slide" class="ui-btn ui-shadow ui-corner-all ui-icon-forward ui-btn-icon-right">BACK</a>
			</p>
		</div>
		<!-- footer -->
		<div data-role="footer">
			<h4>Page Footer</h4>
		</div>
	</div>
    
	<!-- Page FIVE -->
	<div data-role="page" id="five">
		<!-- header -->
		<div data-role="header">
			<img src="images/hk-logo.png" alt="the initials H and K which make up the HK logo" style="width: 50px; float: right;">
			<h1>Union HK</h1>
		</div>
		<!-- content -->
		<div data-role="main" class="ui-content">
			<h2>Salary Calculator</h2>
			<div data-role="fieldcontain">
				<div>
					<label for="name">Job Role:</label>
					<input type="text" name="name" id="name" value=""/>
					<label for="name">Hourly wage:</label>
					<input type="text" name="name" id="name" value=""/>
					<label for="name">Total hours:</label>
					<!-- changed input type to number for hours calculator-->
					<input type="number" name="name" id="name" value=""/>
					<label for="name">Supplementary hours:</label>
					<!-- changed input type to number for hours calculator-->
					<input type="number" name="name" id="name" value=""/>
					</div>
			</div>
			<div data-role="fieldcontain">
				<div>
					<label for="name">Salary before tax:</label>
					<input type="text" name="name" id="name" value=""/>
					<label for="name">Salary after tax:</label>
					<input type="text" name="name" id="name" value=""/>
				</div>
			</div>
			
			<p><a href="#six" data-transition="slide" class="ui-btn ui-shadow ui-corner-all ui-icon-forward ui-btn-icon-right">NEXT</a>
			</p>
			<p><a href="#four" data-direction="reverse" data-transition="slide" class="ui-btn ui-shadow ui-corner-all ui-icon-forward ui-btn-icon-right">BACK</a>
			</p>
		</div>
		<!-- footer -->
		<div data-role="footer">
			<h4>Page Footer</h4>
		</div>
	</div>
	<!-- Page SIX -->
	<div data-role="page" id="six">
		<!-- header -->
		<div data-role="header">
			<img src="images/hk-logo.png" alt="the initials H and K which make up the HK logo" style="width: 50px; float: right;">
			<h1>Union HK</h1>
		</div>
		<!-- content -->
		<div data-role="main" class="ui-content">
			<h2>HK and Jobpatruljen Information</h2>
			<p>This is just a place holder for information from Jobpatruljen.dk and HK.dk</p>
			<div class="boxes" id="first">
			    <h3>Er du 13-14 år</h3>
			    <p class=" ui-icon-arrow-r ui-btn-icon-right">Read more</p>
			</div>
			<div class="boxes" id="second">
			    <h3>Regler og Love</h3>
			    <p class="ui-icon-arrow-r ui-btn-icon-right">Read more</p>
			</div>
			<div class="boxes" id="third">
			    <h3>Gratis kurser</h3>
			    <p class="ui-icon-arrow-r ui-btn-icon-right">Read more</p>
			</div>
			<div class="boxes" id="fourth">
			    <h3>Feriepenge</h3>
			    <p class="ui-icon-arrow-r ui-btn-icon-right">Read more</p>
			</div>
		</div>
		<p><a href="#five" data-direction="reverse" data-transition="slide" class="ui-btn ui-shadow ui-corner-all ui-icon-forward ui-btn-icon-right">BACK</a>
		</p>
		<!-- footer -->
		<div data-role="footer">
			<h4>Page Footer</h4>
		</div>
	</div>

</body>
</html>