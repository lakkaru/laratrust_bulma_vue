@extends('layouts.app') 
@section('content')
<div class="container">
	<div class="columns">
		<div class="column is-one-third is-offset-one-third">
			<div class="card">
				<div class="card-content m-t-20">
					<h1 class="title">Login</h1>
					<form action="{{route('login')}}" method="POST" role="form">
						{{csrf_field()}}
						<div class="field">
							<label for="email" class="label">Email Address</label>
							<p class="control">
								<input type="text" class="input {{ $errors->has('email') ? ' is-danger' : '' }}" name="email" id="email" placeholder="name@example.com"
								 value="{{ old('email') }}">
							</p>
							@if($errors->has('email'))
							<p class="help is-danger">{{$errors->first('email')}}</p>
							@endif
						</div>
						<div class="field">
							<label for="password" class="label">Password</label>
							<p class="control">
								<input type="password" class="input {{ $errors->has('password') ? ' is-danger' : '' }}" name="password" id="password">
							</p>
							@if($errors->has('password'))
							<p class="help is-danger">{{$errors->first('password')}}</p>
							@endif
						</div>
						<b-checkbox name="remeber">Remember Me</b-checkbox>

						<button class="button is-primary is-outlined is-fullwidth m-t-10">Log In</button>
					</form>
				</div>
				<!--end of card contenet-->
			</div>
			<h5 class="has-text-centered">
				<a href="{{route('password.request')}}" class="is-muted">Forget Your Password?</a>
			</h5>
		</div>
	</div>
</div>
@endsection