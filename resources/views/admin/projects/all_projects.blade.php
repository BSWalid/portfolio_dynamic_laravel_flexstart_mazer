
<x-admin-dashboard>
    @section('styles')
    <link rel="stylesheet" href="{{asset('css/datatable.css')}}">


    @endsection


    @section('content')
    @if(session('Project deleted'))
    <div class="alert alert-danger">{{session('Project deleted')}}</div>
    @elseif(session('project created'))

    <div class="alert alert-success">{{session('project created')}}</div>
    @elseif(session('Project updated'))

    <div class="alert alert-success">{{session('Project updated')}}</div>
    @endif
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
                            <td>{{Str::limit($project->small_description, 50, '...')}}</td>
                            <td>{{$project->github_link}}</td>
                            <td>{{$project->type}}</td>
                            <td>{{$project->contribution}}</td>


                            @can('view', $project)

                            <td>
                                <a class="btn btn-primary" href="{{route('projects.edit',$project->id)}}">Edit</a>
                            </td>
                            <td>
                            <form method="POST" action=" {{ route('projects.delete',$project->id) }}" >
                              @csrf
                              @method('DELETE')
                              <script>
                                function submitForm(btn) {
                                    // disable the button
                                    btn.disabled = true;
                                    // submit the form
                                    btn.form.submit();
                                }
                            </script>
                              <button type="submit"  class="btn btn-danger" onclick="submitForm(this);"> Delete </button>

                             </form>

                             <td>
                              @endcan


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
