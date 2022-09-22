<div id="template-bg-1">
	<div
		class="d-flex flex-column min-vh-100 justify-content-center align-items-center">
                        <h2> Campus QR System </h2>
		<div class="card p-4 text-light bg-dark mb-5">
			<div class="card-header">
				<h3>Log In</h3>
			</div>
			<div class="card-body w-100">
				<form name="login" action="" method="post">
					<div class="input-group form-group mt-3">
						<div class="bg-secondary rounded-start">
							<span class="m-3"><i class="fas fa-user mt-2"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="username"
							name="username">
					</div>
					<div class="input-group form-group mt-3">
						<div class="bg-secondary rounded-start">
							<span class="m-3"><i class="fas fa-key mt-2"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="password"
							name="password">
					</div>

					<div class="form-group mt-3">
						<input type="submit" value="Login"
							class="btn bg-secondary float-end text-white w-100"
							name="login-btn">
					</div>
				</form>
                <?php if(!empty($loginResult)){?>
				<?php }?>
			</div>
		</div>
	</div>
</div>
