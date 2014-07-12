<html>
<body>
<?php 	session_start(); ?>

<link href='http://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Comfortaa:700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="cat.css" >

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="slider.js"></script>
			

			
			
<div id="container">
<div id="top">

<div id="slider-wrapper">
        <div id="slider">
            <div class="sp" style="background-image: url(cat.jpg); height: 400px; width: 960px; "></div>
            <div class="sp" style="background-image: url(grumpy-cat-placeholder-960x400.jpg); height: 400px; width: 960px; "></div>
            <div class="sp" style="background-image: url(nyan-cat-placeholder-960x400.jpg); height: 400px; width: 960px; " ></div>
        </div>

        </div>

<div id="nav"></div>
                <div id="button-previous"><div class="prev"></div></div>
            <div id="button-next"><div class="next"></div></div>
			
			
			


</div>


<div class="hr"></div>
<div id="center">
<center>


<h1>KITTEH IPSUM </h1>

<p>
Cupcake ipsum dolor sit amet bear claw oat cake candy canes jelly-o. Jelly beans tootsie rool halvah pastry.
		  Sesame snaps toffee marzipan macaroon fruitcake cheesecake sweet brownie donut. Sesame snaps halvah tart cheesecake applicake. 
		  Caramels donut jelly-o poweder marzipan danish pastry fruitcake chocolate cake. Underwear.com marshmallow. Toffee cotton candy chocolate bar. 
		  Tiramisu sweet roll cheesecake souffl&#279; sweet cheesecake jelly beans lollipop.
</p>

<p>
Croissant topping tart gummies jelly bear claw gummies. Chupa chups icing ice cream gummi bears. Gummies gingerbread marshmallow halvah bear claw powder.
		Cheesecake dragée jelly croissant Marshmallow chocolate cake pudding candy canes jelly. Sugar plum liquorice underware.com biscuit pie gummi bears oat cake tootsie roll.
		Tootsie roll marzipan chocolate bar chocolate cake sweet roll cupcake caramel oat cake.
		Gummi bears tiramisu croissant cupcake chocolate cake. Apple pie dragée soufflé gingerbread applicake sugar plum pudding. 
		Apple pie muffin jelly-o croissant lollipop carrot cake gingerbread bear claw bear claw. 
</p>

<p><img src="grumpy-cat-placeholder-340x240.jpg"> </p>

</div>
<div class="hr"></div>
<div id="center">
<center>
<p>Cupcake ipsum dolor sit amet bear claw oat cake candy cones jelly-o. Jelly beans tootsie roll halvah pastry. 
	Seasame snaps toffee marzipan macaroon fruitcake cheesecake sweetbrownie donut. 
	Seasame snaps halvah tart cheessecake applicake. Caramel donut jelly-o powder marzipan danish pastry fruitcake chocolate cake. 
	Underwear.com marshmallow tootsie roll topping.</p>
	</center>
	
					<?php
	if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
	
		foreach($_SESSION['ERRMSG_ARR'] as $msg) {
			echo '<br>',$msg,'</br>'; 
		}
		echo '</b>';
		unset($_SESSION['ERRMSG_ARR']);
	}

	
?>
	<form action="ajax.php" name="myform" id="form" align="center" method="post">
      <table  cellspacing="2" cellpadding="2" border="0" align="center"  >
       
			<tr>		   
				<h3> NAME*  </h3>
			</tr> 
			
				<tr>
					<input style="text-align: center" type="text" 	size="58" id="Name"  name="Name" placeholder="Cras aliquam" />
				</tr>
					<tr>
         		     <h3> EMAIL ADDRESS* </h3>
		           </tr>
						<tr>
							<input style="text-align: center" cols="45" type="text" size="58" id="Email_Address"  name="Email_Address" placeholder="Cras aliquam" />
					   </tr>
							<tr>
								<h3> ADDRESS </h3>
						    </tr>
								<tr>
									<textarea  style="text-align: center" cols="45" rows="5" size="58" id="Address"  name="Address" placeholder="Donec id eros eget Praesent vitae ligula Aliquam adipiscing"  ></textarea>
							    </tr>
									<tr>
								    </tr>
									<tr><h2>*Indicates required field </h2></tr></br>
										<tr>										
											 <input type="Submit"  class="button" name="SubmitButton" id="SUBMIT FORM" value="SUBMIT FORM">															
										</tr>																						
												<div id="link"><h4>  <a href="javascript:toggle('Feline_policy');" >View our privacy policy</a></h4></div>
												<tr>
											<td>		
													<div id="Feline_policy" style='display:none';>
														<center><a>Cupcake ipsum dolor sit amet bear claw oat cake candy cones jelly-o. Jelly beans tootsie roll halvah pastry. 
														Seasame snaps toffee marzipan macaroon fruitcake cheesecake sweetbrownie donut. 
														Seasame snaps halvah tart cheessecake applicake. Caramel donut jelly-o powder marzipan danish pastry fruitcake chocolate cake. 
														Underwear.com marshmallow tootsie roll topping.</a></center>
													</div>
													</td>
												</tr>

		</table>
</center>
</div>

<div id="footer">

<h1> CONTACT KITTEH </h1>

<h3>Grumpy Cat </h3>
<h3>Seasame snaps,Halvah tart, cheesecake, TR27 4HH </h3>

<h3><div id="email"> E-mail <a href="url">cupcake@nyancat.com</a></div></h3>

<h3> <div id="phone">Telephone +44(0)1736758600</div> </h3>
<br> </br>

<p><b>Kitten Meow</b> (Registered Address) Foundry Square,Hayle,Cornwall,TR27 4HH </p>

</div>
</div>


</body>
</html>