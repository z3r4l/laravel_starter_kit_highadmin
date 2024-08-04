<x-back-layouts title="Create Role">
    <x-back.breadcrumb page="Create Role" />
    <div class="row">
   <div class="col-12">
    <div class="card">
        <div class="m-3">
            <div class="float-right">
                <a class="btn btn-primary" href="{{ route('roles.index') }}"> Back</a>
            </div>
        </div>
        <div class="card-body">
            @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form action="{{ route('roles.store') }}" method="POST">
                @csrf
               @include('back.roles.__form')
            </form>
        </div>
    </div>
   </div>
    </div>
</x-back-layouts>