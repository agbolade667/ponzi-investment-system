	 <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Packages</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
       
        
        
        <div class="container" align="center">
            <div class="row">
                <div class="col-lg-3  col-md-3 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-heart text-primary sr-icons" data-sr-id="2" style="; visibility: visible;  -webkit-transform: scale(1); opacity: 1;transform: scale(1); opacity: 1;-webkit-transition: -webkit-transform 0.6s cubic-bezier(0.6, 0.2, 0.1, 1) 0s, opacity 0.6s cubic-bezier(0.6, 0.2, 0.1, 1) 0s; transition: transform 0.6s cubic-bezier(0.6, 0.2, 0.1, 1) 0s, opacity 0.6s cubic-bezier(0.6, 0.2, 0.1, 1) 0s; "></i>
                        <h3>STARTER</h3>
                        <p class="text-muted">You make a donation of:</p>
						<p class="text-muted">₦20,000</p>
						<p class="text-muted">Recieve:</p>
						<p class="text-muted">₦40,000</p>
						<form method="POST" action="process2.php">
						<input name="memberid" value="<?php echo $email; ?>" type="hidden">
						<input name="status" value="starter" type="hidden">
                        <button name="btn-10k" class="btn btn-success btn-xl page-scroll">Apply</button>						
					    </form>
						
                    </div>
                </div>
				
				
                <div class="col-lg-3 col-md-3 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-paper-plane text-primary sr-icons" data-sr-id="3" style="; visibility: visible;  -webkit-transform: scale(1); opacity: 1;transform: scale(1); opacity: 1;-webkit-transition: -webkit-transform 0.6s cubic-bezier(0.6, 0.2, 0.1, 1) 0s, opacity 0.6s cubic-bezier(0.6, 0.2, 0.1, 1) 0s; transition: transform 0.6s cubic-bezier(0.6, 0.2, 0.1, 1) 0s, opacity 0.6s cubic-bezier(0.6, 0.2, 0.1, 1) 0s; "></i>
                        <h3>BRONZE</h3>
                        <p class="text-muted">You make a donation of:</p>
						 <p class="text-muted">₦50,000</p>
						 <p class="text-muted">Recieve:</p>
						<p class="text-muted">₦100,000</p>
						<form method="POST" action="process2.php">
						<input name="memberid" value="<?php echo $email; ?>" type="hidden">
						<input name="bronze" value="bronze" type="hidden">
						<button name="btn-20k" class="btn btn-success btn-xl page-scroll">Apply</button>						
						</form>
                    </div>
                </div>
				
				
				
               <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-newspaper-o text-primary sr-icons"></i>
                        <h3>GOLD</h3>
                        <p class="text-muted">You make a donation of:</p>
						 <p class="text-muted">₦100,000</p>
						 <p class="text-muted">Recieve:</p>
						<p class="text-muted">₦200,000</p>
						<form method="POST" action="process2.php">
						<input name="memberid" value="<?php echo $email; ?>" type="hidden">
						<input name="bronze" value="gold" type="hidden">
						<button name="btn-20k" class="btn btn-success btn-xl page-scroll">Apply</button>						
						</form>
                    </div>
                </div>
				
				
				
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-diamond text-primary sr-icons"></i>
                        <h3>DIAMOND</h3>
                        <p class="text-muted">You make a donation of:</p>
						 <p class="text-muted">₦200,000</p>
						 <p class="text-muted">Recieve:</p>
						<p class="text-muted">₦400,000</p>
						<form method="POST" action="process2.php">
						<input name="memberid" value="<?php echo $email; ?>" type="hidden">
						<input name="bronze" value="diamond" type="hidden">
						<button name="btn-20k" class="btn btn-success btn-xl page-scroll">Apply</button>						
						</form>
                    </div>
                </div>
				
				

            </div>
        </div>
    </section>
