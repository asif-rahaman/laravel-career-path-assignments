           @extends('layout')
           @section('content')
           <!-- Projects Section-->
            <section class="py-5">
                <div class="container px-5 mb-5">
                    <div class="text-center mb-5">
                        <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Projects</span></h1>
                    </div>
                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-11 col-xl-9 col-xxl-8">
                            {{-- {{dd($projects)}} --}}
                            @foreach ($projects as $project)
                              {{-- @dd($project['tittle']) --}}
                            
                            <!-- Project Card 1-->
                            <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                                <div class="card-body p-0">
                                    <div class="d-flex align-items-center">
                                        <div class="p-5">
                                            <h2 class="fw-bolder">{{$project['tittle']}}</h2>
                                            <p>{{$project['description']}}</p>
                                        </div>
                                        <img class="img-fluid" src="{{$project['project_img_url']}}" alt="Project Image" />
                                    </div>
                                </div>
                            </div>
                            @endforeach
 
                        </div>
                    </div>
                </div>
            </section>
            @include('components.contact-me')
            @endsection
            