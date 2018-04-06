@foreach($users as $user)
	<tr>
		<td>{{$user->id}}</td>
		<td>{{$user->name}}</td>
		<td>{{$user->email}}</td>
		<td>{{$user->gender}}</td>
		<td>{{$user->description}}</td>
	</tr>
@endforeach