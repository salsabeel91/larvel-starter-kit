<h2>Welcome To Login page</h2>

@foreach($users as $user)
 	<li>{!! $user['firstname'] !!}</li>
@endforeach

