
<x-admin-dashboard>
    @section('content')
    <div class="page-heading">
        <h3> Create New Project </h3>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Profile Visit</h4>
                </div>
                <div class="card-body">
                    <div id="chart-profile-visit"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-xl-4">
            <div class="card">
                <div class="card-header">
                    <h4>Hero secction</h4>
                 </div>
                 <div class="card-body">

                    <form method="POST" action="{{route('dashboard.home_page_settings_change')}}">
                        @csrf
                        <div class="form-group">
                          <label for="exampleInputEmail1">Hero section Title</label>
                          <textarea rows="3" maxlength="100" class="form-control" id="Hero_section_title" >{{Config::get('constants.home.Hero_section_title')}}</textarea>
                        </div>

                        <div class="form-group">
                          <label for="exampleInputPassword1"> Hero section description </label>
                          <textarea rows="3" maxlength="100" class="form-control" id="Hero_section_description" >{{Config::get('constants.home.Hero_section_description')}}</textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>

                </div>
            </div>
        </div>


    </div>

    </div>

    @endsection

</x-admin-dashboard>
