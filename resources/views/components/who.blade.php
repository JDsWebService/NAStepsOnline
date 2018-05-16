@if(Auth::guard('user')->check())
	<div class="alert alert-success" role="alert">
		You are logged in as <strong>USER</strong>
	</div>
@else
	<div class="alert alert-danger" role="alert">
		You are logged out as <strong>USER</strong>
	</div>
@endif

@if(Auth::guard('admin')->check())
	<div class="alert alert-success" role="alert">
		You are logged in as <strong>ADMIN</strong>
	</div>
@else
	<div class="alert alert-danger" role="alert">
		You are logged out as <strong>ADMIN</strong>
	</div>
@endif