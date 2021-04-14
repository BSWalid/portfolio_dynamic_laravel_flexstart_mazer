
<x-admin-dashboard>
    @section('content')
    <div class="page-heading">
        <h3> Create New Project </h3>
    </div>




        <!-- // Basic multiple Column Form section start -->
        <section id="multiple-column-form">
            <div class="row match-height">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Project Information</h4>

                        </div>

                @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                @endif


                        <div class="card-content">
                            <div class="card-body">
                                <form class="form" method="POST" action="{{route('projects.update',$project->id)}}" enctype="multipart/form-data">
                                    @csrf
                                    @method('PATCH')
                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="project title">Project Title</label>
                                                <input type="text" id="title" class="form-control" value="{{$project->title}}" name="title">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="github link">Github Link</label>
                                                <input type="text" name="github_link" id="github_link" value="{{$project->github_link}}" class="form-control" placeholder="link to the project github link (optional)" >
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="page_link">Page Link</label>
                                                <input type="text" id="page_link" class="form-control"value="{{$project->page_link}}" placeholder="Page link of the project" name="page_link">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="type">Type of project</label>
                                                <select class="form-control" id="type" name="type"  >

                                                    @foreach (['Mobile app','Web app','Personal Designs'] as $type )
                                                            @if ($project->type == $type)
                                                            <option selected="selected">{{$type}}</option>
                                                            @else
                                                            <option>{{$type}}</option>
                                                            @endif

                                                    @endforeach


                                                </select>
                                              </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="contribution">Contribution of project</label>
                                                <select class="form-control" id="exampleFormControlSelect1" name="contribution">

                                                  @foreach (['created','participated'] as $contribution )
                                                  @if ($project->contribution == $contribution)
                                                  <option selected="selected">{{$contribution}}</option>
                                                  @else
                                                  <option>{{$contribution}}</option>
                                                  @endif

                                          @endforeach


                                                </select>
                                              </div>
                                        </div>
                                        <div class="col-md-12 col-12">

                                             <div class="form-group">
                                                <label for="small_description" class=" col-form-label">Small Description</label>
                                                <textarea id="small_description"  name="small_description" cols="40" rows="5" class="form-control">{{$project->small_description}}</textarea>

                                            </div>
                                        </div>


                                        <div class="col-md-12 col-12">

                                            <div class="form-group">
                                               <label for="long_description" class=" col-form-label">Long Description</label>
                                               <textarea id="long_description" name="long_description" cols="40" rows="5" class="form-control">{{$project->long_description}}</textarea>

                                           </div>
                                       </div>

                                       <div class="col-md-12 col-12">

                                        <div class="form-group">
                                            <label class="form-label" for="customFile">Project Image</label>

                                            <input type="file"  accept="image/*" name="project_image_url" class="form-control-file" id="exampleFormControlFile1" >


                                       </div>
                                       <img src="{{$project->project_image_url}}" alt="iameg" width="50px" height="50px">
                                    </div>




                                        <div class="col-12 d-flex justify-content-start">
                                            <button type="submit" class="btn btn-primary me-1 mb-1">Edit</button>
                                            <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- // Basic multiple Column Form section end -->
    </div>


    @endsection

</x-admin-dashboard>
