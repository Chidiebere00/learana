@extends('layouts.landing')
@section('content')
    <div class="row ml-auto mr-auto topCallout">
        <div class="container justify-content-center ">
            <h1 class="text-center text-white">Discover Learning Experiences</h1>
            <p class="text-center text-white">Achieve your goals</p>
            <div class="card-deck">
                <div class="card mb-3 pb-3">
                    <img class="card-img-top img-fluid" src="//placehold.it/500x280" alt="Card image cap">
                    <div class="card-block pl-3 pr-3">
                        <h4 class="card-title">Solo</h4>
                        <p class="card-text">Solo are self paced courses</p>
                    </div>
                </div>
                <div class="card shadow mb-3  pb-3">
                    <img class="card-img-top img-fluid" src="//placehold.it/500x280" alt="Card image cap">
                    <div class="card-block pl-3 pr-3">
                        <h4 class="card-title">One on One</h4>
                        <p class="card-text">One on one are for tutors</p>
                    </div>
                </div>
                <div class="card mb-3 pb-3 ">
                    <img class="card-img-top img-fluid" src="//placehold.it/500x280" alt="Card image cap">
                    <div class="card-block pl-3 pr-3">
                        <h4 class="card-title">Small Group</h4>
                        <p class="card-text">study groups
                        </p>
                    </div>
                </div>
                <div class="card mb-3 pb-3 ">
                    <img class="card-img-top img-fluid" src="//placehold.it/500x280" alt="Card image cap">
                    <div class="card-block pl-3 pr-3">
                        <h4 class="card-title">Webinars</h4>
                        <p class="card-text">Lare groups that meet through web conferencing</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">

            <div class="col-md-4">

                <!-- Categories Widget -->
                <div class="card my-4">
                    <h5 class="card-header">Categories</h5>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <ul class="list-unstyled mb-0">
                                    <li>
                                        <a href="#">Web Design</a>
                                    </li>
                                    <li>
                                        <a href="#">HTML</a>
                                    </li>
                                    <li>
                                        <a href="#">Freebies</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul class="list-unstyled mb-0">
                                    <li>
                                        <a href="#">JavaScript</a>
                                    </li>
                                    <li>
                                        <a href="#">CSS</a>
                                    </li>
                                    <li>
                                        <a href="#">Tutorials</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Post Content Column -->
            <div class="col-md-8">

                <!-- Title -->
                <h1 class="mt-4">Recently Added Experiences</h1>

                <!-- Author -->
                <p class="lead">
                   Get started today!
                </p>

                <hr>

                <!-- Single Comment -->
                <div class="media mb-4">
                    <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                    <div class="media-body">
                        <h5 class="mt-0">Experience Name</h5>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    </div>
                </div>
                <!-- Single Comment -->
                <div class="media mb-4">
                    <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                    <div class="media-body">
                        <h5 class="mt-0">Experience Name</h5>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    </div>
                </div>
                <hr>
            </div>

            <!-- Sidebar Widgets Column -->

            <!-- /.row -->

        </div>


@stop
