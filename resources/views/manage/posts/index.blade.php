@extends('layouts.manage')
@section('content')
<div class="flex-container">
	<div class="columns">
		<div class="column">
			<h1 class="title">Manage Posts</h1>
		</div>
		<div class="column">
			<a href="{{route('posts.create')}}" class="button is-primary  is-pulled-right">
				<i class="fa fa-user-plus"></i>&nbsp; Create New Post</a>
		</div>
	</div>
	<hr>
	
</div><!--End of flex-container-->

@endsection