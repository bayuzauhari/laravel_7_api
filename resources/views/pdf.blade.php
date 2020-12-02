<div class="container">
        <div class="row">
                <table class="table">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">No</th>
                            <th scope="col">nama</th>
                            <th scope="col">email</th>
                          </tr>
                        </thead>
                        <tbody>
                          @php $i=1 @endphp
                    			@foreach($data as $p)
                    			<tr>
                    				<td>{{ $i++ }}</td>
                    				<td>{{$p->name}}</td>
                    				<td>{{$p->email}}</td>
                    			</tr>
                    			@endforeach
                        </tbody>
                      </table>
        </div>

    </div>
