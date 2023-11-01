@extends('topic.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Topic</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('topic.create') }}"> Create New Topic</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            
            <th>Name</th>
            
            <th width="280px">Action</th>
        </tr>
        @foreach ($products as $product)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $topic->name }}</td>
            
            <td>
                <form action="{{ route('topic.destroy',$topic->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('topic.show',$topic->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('topic.edit',$topic->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $products->links() !!}
      
@endsection