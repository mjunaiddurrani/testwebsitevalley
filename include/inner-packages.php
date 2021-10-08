<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KX62GMC"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<!-- Modal -->
<div class="modal fade modalForDiscount" id="modalForDiscount" tabindex="-1" role="dialog" aria-labelledby="modalForDiscount" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-body">
	  <button type="button" class="close modalClose" data-dismiss="modal">&times;</button>
	  <div class="container">
			<div class="row">
				<div class="col-lg-5 col-md-12 mbl-none p-0">
						<!--<a type="button" class="modalClose" data-dismiss="modal" style="text-align: right;"><i class="fa fa-times"></i></a>-->
					
					<!-- <img src="img/footer.jpg" style="width:100%;height:100%;" alt=""> -->
				</div>
				<div class="col-lg-7 col-md-12 col-sm-12 col-12 text-white">
					<div class="modalDetailsOf">
						<div class="row modalDetailsOfRow text-center">
							<p class="mainH1 pt-5 w-100 text-white">LET'S GET STARTED</p>
							<hr class="hrModal">
							
						</div>
						<p class="text-center modal-para p-md-4 text-white">To schedule a consultation, please send us your details. We will guide you through the entire design and branding process.</p>
						<form action="/leads/" method="POST" class="modal-fom">
						<input type="text" name="name" class="jun name" value=""> 
						<input type="text" name="firstname" class="jun firstname" value="legit">  
						<input name="email" type="email" class="form-control txt-sub text-left emailBootom jun email" placeholder="your email address">
						<input type="hidden" name="token" value="<?= $token;?>">
							<div class="row">
								<div class="col-md-6">
									<input required type="text" name="name" class="form-control" placeholder="Write your full name" pattern="^[A-Za-z ]+$" maxlength="45">
									<input required type="email" name="email" class="form-control" placeholder="Write your email address" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
									<input required type="tel" name="phone"  class="form-control" placeholder="Write your phone number" maxlength="15" pattern="^[0-9]*$">
                  <input type="hidden" name="route" value="<?= $_SERVER['REQUEST_URI'] ?>">   
                  <input type="hidden" name="brand" value="thewebfoundersuk">   
                  <input type="hidden" name="tag" value="modal-auto">
                  <input type="hidden" name="price" value="null">
                  <input type="hidden" name="news" value="1">
								</div>
							<div class="col-md-6 ">
								<textarea name="brief" class="form-control"  placeholder="Write your project description" maxlength="250" pattern="^[A-Za-z ]+$"></textarea>
							</div>
							</div>
							
								<label class="containerCheckBox">
									<input  type="checkbox" name="subscription" checked disabled>
									<span class="modal-check-para">I want to receive the latest news, updates and special offers directly to my inbox.</span>
								</label>
								<input type="hidden" name="set" value="true">
								<div class="text-center pb-3">
									<button class="btn btnTheme btn-submit btn-modal font-weight-bold pl-md-4 pr-md-4 p-md-3">SUBMIT NOW</button>
								</div>
							
						</form>
					</div>
				</div>
			</div>
		</div>
      </div>
      
    </div>
  </div>
</div>