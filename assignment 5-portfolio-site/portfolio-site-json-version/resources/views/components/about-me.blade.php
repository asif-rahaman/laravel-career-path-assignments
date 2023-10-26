            <!-- About Section-->
            <section class="bg-light py-5">
                <div class="container px-5">
                    <div class="row gx-5 justify-content-center">
                        <div class="col-xxl-8">
                            <div class="text-center my-5">
                                {{-- @dd($about) --}}
                                <h2 class="display-5 fw-bolder"><span class="text-gradient d-inline">{{$about[0]->tittle}}</span></h2>
                                <p class="lead fw-light mb-4">{{$about[0]->sub_tittle}}</p>
                                <p class="text-muted">{{$about[0]->details}}</p>
                                <div class="d-flex justify-content-center fs-2 gap-4">
                                    {{-- @dd($urls[0]->facebook) --}}
                                    <a class="text-gradient" href="{{ $urls[0]->twitter }}"><i class="bi bi-twitter"></i></a>
                                    <a class="text-gradient" href="{{ $urls[0]->linkedin }}"><i class="bi bi-linkedin"></i></a>
                                    <a class="text-gradient" href="{{ $urls[0]->github }}"><i class="bi bi-github"></i></a>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>