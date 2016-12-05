<div class="container">

	<div class="row" style="margin-top:20px">
	    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
			<form id="signup-form" action="register" method="post">
				<fieldset>
					<h2>Sign Up</h2>
					<hr>

					<div style="margin-bottom: 25px" class="input-group">
						<span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
	                    <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Anda*" required="required">
					</div>

					<div class="alert alert-danger text-center" id="warningemail" role="alert" style="display: none;"></div>

					<div style="margin-bottom: 25px" class="input-group">
						<span class="input-group-addon"><i class="fa fa-user"></i></span>
	                    <input type="text" name="nama_depan" id="nama_depan" class="form-control input-lg" placeholder="Nama Depan*" required="required">
					</div>

					<div style="margin-bottom: 25px" class="input-group">
						<span class="input-group-addon"><i class="fa fa-user"></i></span>
	                    <input type="text" name="nama_belakang" id="nama_belakang" class="form-control input-lg" placeholder="Nama Belakang*" required="required">
					</div>

					<div style="margin-bottom: 25px" class="input-group">
						<span class="input-group-addon"><i class="fa fa-key"></i></span>
	                    <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password*" required="required">
					</div>

					<div style="margin-bottom: 25px" class="input-group">
						<span class="input-group-addon"><i class="fa fa-check"></i></span>
	                    <input type="password" name="password2" id="password2" class="form-control input-lg" placeholder="Verifikasi Password*" required="required">
					</div>

					<div class="alert alert-danger text-center" id="warningpass" role="alert" style="display: none;"></div>
					
					<div style="margin-bottom: 25px" class="input-group">
						Anda ingin disapa dengan: 
	                    <input type="radio" name="sapaan" id="sapaan1" value="1"  checked> Nama Depan &nbsp;
	                    <input type="radio" name="sapaan" id="sapaan2" value="2"> Nama Belakang
					</div>
					<hr>
					<div class="row">
						<div class="col-xs-6 col-sm-6 col-md-6">
							<i>* wajib diisi</i>
							<input type="submit" name="submit" id="submit" class="btn btn-lg btn-primary btn-block" value="Register">
						</div>
					</div>

				</fieldset>
			</form>
		</div>
	</div>

	<hr>



