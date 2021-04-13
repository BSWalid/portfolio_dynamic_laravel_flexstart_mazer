
<x-admin-dashboard>
    @section('styles')
    <link rel="stylesheet" href="{{asset('css/datatable.css')}}">


    @endsection


    @section('content')
    <div class="page-heading">
        <h3> My current Projects </h3>
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


                            <th>Title</th>
                            <th>Small_Description</th>
                            <th>Github link</th>
                            <th>type</th>
                            <th>Contribution</th>


                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($projects as $project)
                        <tr>
                            <td>{{$project->title}}</td>
                            <td>{{$project->small_description}}</td>
                            <td>{{$project->github_link}}</td>
                            <td>{{$project->type}}</td>
                            <td>{{$project->contribution}}</td>

                            <td></td>


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
