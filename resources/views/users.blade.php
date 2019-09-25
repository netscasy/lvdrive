@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">              

                <div class="card-body">
                   <a href="{{route('users.excel.dwd')}}">User Export</a>
                   <table class="table">
                   	<thead>
                   		<tr>
                   			<th>Id</th>
                   			<th>Name</th>
                   			<th>Email</th>
                   		</tr>
                   	</thead>
                   	<tbody>
                   	@forelse($users as $user)
                     	<tr>
            						<td>{{$user->id}}</td>
            						<td>{{$user->name}}</td>
            						<td>{{$user->email}}</td>
            					</tr>
                   	@empty
                     	<tr>
                     		<td colspan="2" class="text-center">No Users Found.</td>
                     	</tr>
                   	@endforelse
                   	</tbody>
                   </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
