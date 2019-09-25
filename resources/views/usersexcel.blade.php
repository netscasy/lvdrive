 <table class="table">                   
                   	<tbody>                   
                    <thead>
                      <tr>
                        <th> Id </th>
                        <th> Name </th>
                        <th> Email </th>
                      </tr>
                    </thead>
                    @php $totalId = 0; @endphp
                    @forelse($users as $user)
                    @php $totalId = $totalId + $user->id; @endphp
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
                    <tr>
                      <td></td>
                    <td>{{$totalId}}</td>
                        
                        <td></td>
                      </tr>
                   	</tbody>
                   </table>