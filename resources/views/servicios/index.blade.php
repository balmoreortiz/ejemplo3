@extends('servicios.layout')

 

@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>CRUD</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-success" href="{{ route('servicios.create') }}"> Create New Service</a>

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

            <th>No</th>

            <th>Name</th>

            <th>Details</th>

            <th>Price</th>

            <th width="280px">Action</th>

        </tr>

        @foreach ($servicios as $servicio)

        <tr>

            <td>{{ ++$i }}</td>

            <td>{{ $servicio->name }}</td>

            <td>{{ $servicio->detail }}</td>

            <td>{{ $servicio->price  }}</td>

            <td>

                <form action="{{ route('servicios.destroy',$servicio->id) }}" method="POST">

   

                    <a class="btn btn-info" href="{{ route('servicios.show',$servicio->id) }}">Show</a>

    

                    <a class="btn btn-primary" href="{{ route('servicios.edit',$servicio->id) }}">Edit</a>

   

                    @csrf

                    @method('DELETE')

      

                    <button type="submit" class="btn btn-danger">Delete</button>

                </form>

            </td>

        </tr>

        @endforeach

    </table>

  

    {!! $servicios->links() !!}

      

@endsection