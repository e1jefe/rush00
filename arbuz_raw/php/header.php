<nav class="menu-top">
				<div class="logo">
					<div class="logo-icon">
                    	<img src="img/icon-hydric.png" alt="hydric-logo">
                	</div>
					<p>
						Fructo
					</p>
				</div>
				<input type="checkbox" id="menu-checkbox">
               	<label class="menu-btn" for="menu-checkbox"></label>
				<div class="menu-items clearfix" id="primary_nav_wrap">
					<ul>
						<li><a href="#home">Home</a></li>
						<li><a href="#about">About</a></li>
						<li><a href="#features">Features</a></li>
						<li><a href="php/mybasket.php" class="buy">Buy now</a></li>
						<?php 
							if(isset($_SESSION['is_log']) && $_SESSION['is_log'] === TRUE)
							{
								echo '<li><a href="/php/logout.php">Currently logged: ' . $_SESSION["loggued_on_user"] . '</a>
							<ul>
							<li><a href="#" class="kostyl"></a></li>
								<li><a href="php/change-pass.php">change password</a></li>
      							<li><a href="php/my-cart.php">review my cart</a></li>
      							<li><a href="php/logout.php">logout</a></li>
      							<li><a href="php/delet-me.php">delete account</a></li>
    						</ul>
  							</li>';
  							}
							else
							    echo '<li><a href="sign-in.html" target="_self" class="last">Login/Register</a><li>';
						?>
					</ul>
				</div>
</nav>