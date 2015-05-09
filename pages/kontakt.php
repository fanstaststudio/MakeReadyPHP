    <header id="map">
			
    </header>
    
    <!-- Ikon Section -->
		<!-- Ribbon -->    
    <div class="container-fluid">
			<div class="ribbon">
				<div class="topshade"></div>
	       	<div class="ribcontent">
							<div class="row rowribbon konrib">
								<ul>
									<li class="kon_ikon">
										<img class="ikon" src="images/kontaktikon.svg">
										<div class="yd_kon"></div>
									</li>
									<li class="yd_kon_txt">
										<hr/>
										<h2><?php echo $left_headline; ?></h2>
										<hr/>
										<p>
											<b><?php echo $left_content; ?></b>
											<br/><br/>
											<?php echo $right_headline; ?>
										</p>
									</li>
								</ul>
							</div>
						</div>
				<a name="kontaktankor">
				<div class="bottomshade"></div>
				</a>
	    </div>  
    </div>
		<!-- End Ribbon -->
    <!-- Ikon Section End -->
		<div class="container-fluid">
			<div class="confill">
				<div class="kontaktform">
						
						<div class="buttfill">
							<h2>Ring til os på: <a href="tel:<?php echo $adresse; ?>" class="btn btn-phone" title="Ring til os !">
									<?php echo $adresse; ?>
									
							</a>
							</h2>
						</div>
						<!-- kontakt form -->
						<form action="mail.php#kontaktankor" method="POST">
							<input class="input" type="text" name="name" placeholder="* NAVN">
							<div class="derp"></div>
							<input class="input righties" type="text" name="firm" placeholder="FIRMANAVN">
							<br/>
							<input class="input" type="text" name="email" placeholder="* EMAIL">
							<div class="derp"></div>
							<input class="input righties" type="phone" name="phone" placeholder="TELEFON">
							<br/>
							<input class="fullinput" type="text" name="website" placeholder="DIN HJEMMESIDE">
							<br/>
							<textarea name="message" class="fullinput" placeholder="* BESKED // Hvad går dit projekt ud på?" rows="7" cols="25"></textarea><br />
							<p class="grey_txt">Felter med en stjerne ( * ) skal udfyldes</p>
							<div class="buttfill">
								<input  class="btn btn-default" type="submit" value="Kontakt os !" name="submit">
							</div>
							<br/>
							<p>
								<?php echo $right_name; ?>
								<br/>
								<a href="<?php echo $right_content; ?>">Klik her</a>
							</p>
						</form>
					</div>
				</div>
			
			</div>
		</div>
		