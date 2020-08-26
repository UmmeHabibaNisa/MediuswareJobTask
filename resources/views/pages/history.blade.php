@extends('layouts.app')
@section('content')
<div class="container-fluid app-body">
	<h3> Recent Posts Sent To Buffer

	</h3>

	<div class="row">
    <form action="{{action('PostControllers@filter')}}; "method = "Post">
    @csrf <label for = "meeting-time">Choose a time for your appoinment:</label>
    <input type = "datetime" name ="sent-at">

    <label for ="cars" > Choose a group:</label>
    <select name="group_type" id ="97">
    <option value = "97">Upload</option>
    <option value ="98">Curation </option>
    </select>
    <button type="submit" >Filter </button>
    </form>

		<div class="col-md-12">
			<table class="table table-hover social-accounts"> 
				<thead> 
					<tr><th>Group Name</th> <th>Group Type</th> <th>Account Name</th> <th>Post Text</th> <th>Time</th> </tr> 
				</thead> 
				<tbody> 
                @foreach ($buffers as $buffer)
                <tr>
                <td>{{$buffer->name}}</td>
                <td>{{$buffer->type}}</td>
                <td>{{$buffer->user_name}}</td>
                <td>{{$buffer->post_text}}</td>
                <td>{{$buffer->sent_at}}</td>
               
                </tr>
                @endforeach 
				</tbody> 
			</table>
		</div>
	</div>
</div>
@endsection
