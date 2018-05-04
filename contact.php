		<div class="row margintop">
			<div class="col-8 border cal-8 bg-white p-3 rounded">
				<h3 class="paddin0 mb-3 pl-2">Contact Information:</h3>
				<div class="mt-3 ml-3">
					<p class="paddin0">Dhaka Road, BSCIC Area, Jhenaidah – 7300
					</p>
					<p class="paddin0">E-mail : info@jhpi.gov.bd, principal_jhpi001@yahoo.com</p>
					<p class="paddin0"> URL : www.jhpi.gov.bd</p>
					<p class="paddin0"> Phone : 02 6114564</p>
				</div>
				<form id="needs-validation" novalidate class="form" method="GET" action="">
					<div class="form-row">
						<div class="col-md-12 mb-3">
							<label for="validationCustom01"></label>
							<input type="text" class="form-control formstyle" id="validationCustom01" placeholder="First name"  required>
						</div>
						<div class="col-md-12 mb-3">
							<label for="validationCustom02"></label>
							<input type="text" class="form-control formstyle" id="validationCustom02" placeholder="Last name" required>
						</div>
						<div class="col-md-12 mb-3">
							<label for="validationCustomUsername"></label>
							<div class="input-group">
								<input type="text" class="form-control formstyle borderradius" id="validationCustomUsername" placeholder="Email" aria-describedby="inputGroupPrepend" required>
								<div class="invalid-feedback">
									Please choose a email address.
								</div>
							</div>
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-12 mb-3">
							<label for="validationCustom03"></label>
							<input type="text" class="form-control formstyle" id="validationCustom03" placeholder="Subject" required>
							<div class="invalid-feedback">
								Please provide your subject.
							</div>
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-12 mb-3">
							<label for="validationCustom03"></label>
							<textarea type="text" class="form-control textarea formstyle p-3" id="validationCustom03" placeholder="What would you like to tell us" required rows="7"></textarea>
							<div class="invalid-feedback">
								Please tell me something.
							</div>
						</div>
					</div>
					<button class="btn submit text-muted mt-2 " type="submit" href="contact.php?page=submit">Submit form</button>
				</form>
				<?php
				if(($_GET['page'])){
					$submit = $_GET['page'];
					if ($submit == 'page') {
						echo $submitted = "Successfully Submitted";
					}
				}
				?>
			</div>
			<?php include 'side_bar.php';?>
		</div>