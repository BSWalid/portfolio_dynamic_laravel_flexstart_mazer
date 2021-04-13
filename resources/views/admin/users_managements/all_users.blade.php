
<x-admin-dashboard>
    @section('styles')
    <link rel="stylesheet" href="{{asset('css/datatable.css')}}">


    @endsection


    @section('content')
    <div class="page-heading">
        <h3> All Users </h3>
    </div>

    <section class="section">
        <div class="card">
            <div class="card-header">
                Simple Datatable
            </div>
            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Roles</th>
                            <th>Actions</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>Soon</td>


                            <td>
                                <span class="badge bg-success">Active</span>
                            </td>
                        </tr>

                        @endforeach


                    </tbody>
                </table>
            </div>
        </div>

    </section>


    @endsection

    @section('scripts')
    <script src="{{asset('js/simple-datatables/simple-datatables.js')}}"></script>
    <script>
        // Simple Datatable
        let table1 = document.querySelector('#table1');
        let dataTable = new simpleDatatables.DataTable(table1);
    </script>
    @endsection


</x-admin-dashboard>
