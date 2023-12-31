@extends('layout')
@section('content')
            <!-- Page Content-->
            <div class="container px-5 my-5">
                <div class="text-center mb-5">
                    <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Resume</span></h1>
                </div>
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-11 col-xl-9 col-xxl-8">
                        <!-- Experience Section-->
                        <section>
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h2 class="text-primary fw-bolder mb-0">Experience</h2>
                                <a class="btn btn-primary px-4 py-3" href="#">
                                    <div class="d-inline-block bi bi-download me-2"></div>
                                    Download Resume
                                </a>
                            </div>
                            {{-- @dd($experiences) --}}
                            @foreach ($experiences as $experience )
                            <!-- Experience Card -->
                            <div class="card shadow border-0 rounded-4 mb-5">
                                <div class="card-body p-5">
                                    <div class="row align-items-center gx-5">
                                        <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                            <div class="bg-light p-4 rounded-4">
                                                
                                                <div class="text-primary fw-bolder mb-2">{{$experience->period}}</div>
                                                <div class="small fw-bolder">{{$experience->position}}</div>
                                                <div class="small text-muted">{{$experience->company}}</div>
                                                <div class="small text-muted">{{$experience->address}}</div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">{{$experience->details}}</div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- Education Section-->
                        @endforeach
                        <section>
                            <h2 class="text-secondary fw-bolder mb-4">Education</h2>
                            @foreach ($educations as $education)
                             {{-- @dd($educations) --}}
                            <!-- Education Card -->
                            <div class="card shadow border-0 rounded-4 mb-5">
                                <div class="card-body p-5">
                                    <div class="row align-items-center gx-5">
                                        <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                            <div class="bg-light p-4 rounded-4">
                                                <div class="text-secondary fw-bolder mb-2">{{$education->period}}</div>
                                                <div class="mb-2">
                                                    <div class="small fw-bolder">{{$education->college}}</div>
                                                    <div class="small text-muted">{{$education->address}}</div>
                                                </div>
                                                <div class="fst-italic">
                                                    <div class="small text-muted">{{$education->degree}}</div>
                                                    <div class="small text-muted">{{$education->field}}</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8"><div>{{$education->details}}</div></div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </section>
                        <!-- Divider-->
                        <div class="pb-5"></div>
                        <!-- Skills Section-->
                        <section>
                            <!-- Skillset Card-->
                            <div class="card shadow border-0 rounded-4 mb-5">
                                <div class="card-body p-5">
                                    <!-- Professional skills list-->
                                    <div class="mb-5">
                                        <div class="d-flex align-items-center mb-4">
                                            <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 me-3"><i class="bi bi-tools"></i></div>
                                            <h3 class="fw-bolder mb-0"><span class="text-gradient d-inline">Professional Skills</span></h3>
                                        </div>
                                        <div class="row row-cols-1 row-cols-md-3 mb-4">
                                            {{-- @dd($languages,$skills) --}}
                                            @foreach ($skills as $skill )
                                           {{-- @dd($skill->skill) --}}
                                            <div class="col mb-4 md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">{{$skill->skill}}</div></div>

                                            @endforeach
                                        </div>
                                    </div>
                                    <!-- Languages list-->
                                    <div class="mb-0">
                                        <div class="d-flex align-items-center mb-4">
                                            <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 me-3"><i class="bi bi-code-slash"></i></div>
                                            {{-- @dd($languages) --}}
                                            <h3 class="fw-bolder mb-0"><span class="text-gradient d-inline">Languages</span></h3>
                                        </div>
                                        <div class="row row-cols-1 row-cols-md-3 mb-4">
                                            @foreach ( $languages as $language )
                                                
                                            
                                            <div class="col mb-4 md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">{{$language->language}}</div></div>
                                            @endforeach
                                    
                                        </div>
                                    
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
    
@endsection