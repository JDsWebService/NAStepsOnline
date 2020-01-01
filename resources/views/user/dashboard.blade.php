@extends('layouts.main')

@section('title', 'User Dashboard')

@section('stylesheets')

    <style type="text/css">
        .profile-picture {
            width: 160px;
            height: 160px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }
        .social-link {
            font-size: 20pt;
            color: #aaa;
        }
        
        .profile-container:hover .edit-photo {
            opacity: 1;
        }
        .edit-photo {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 160px;
            height: 160px;
            margin: 0 15px;
            text-align: center;
            vertical-align: bottom;
            opacity: 0;
            transition: .5s ease;
            background-color: rgba(255,255,255,.8);
        }
        .edit-photo a {
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            text-align: center;
            font-size: 14pt;
            color: #555;
            cursor: default;

        }
        .edit-photo a:hover {
            text-decoration: none;
        }
    </style>

@endsection

@section('content')

    <div class="row">
        <div class="col-md-2 offset-md-2 profile-container">
            <img src="{{ url('images/users/' . $user->profile_picture) }}" alt="{{ $user->username }}'s Profile Picture" class="profile-picture rounded-circle">

            <div class="edit-photo rounded-circle">
                <a href="{{ route('user.settings') }}">
                    <i class="fas fa-camera"></i> Edit
                </a>
            </div>
        </div>

        <div class="col-md-8">
            
            <div class="row">

                <div class="col-md-12">
                    <h1>{{ $user->first_name }} {{ $user->last_initial }}.</h1>
                </div>

            </div>
            
        </div>
    </div>


    <div class="row">
        <div class="col-md-8 offset-md-2">
            <hr style="margin: 3.5vh 0;">

            <h1>Completed Steps</h1>
            
            <div class="row">
                <div class="col-sm-2 text-right">
                    <p class="lead">One</p>
                </div>
                <div class="col-sm-10">
                    <div class="progress">
                        <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                    </div>
                </div>
            </div>
            
            
            <div class="row">
                <div class="col-sm-2 text-right">
                    <p class="lead">Two</p>       
                </div>

                <div class="col-sm-10">
                    <div class="progress">
                        <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-2 text-right">
                    <p class="lead">Three</p>       
                </div>

                <div class="col-sm-10">
                    <div class="progress">
                        <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-2 text-right">
                    <p class="lead">Four</p>       
                </div>

                <div class="col-sm-10">
                    <div class="progress">
                        <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-2 text-right">
                    <p class="lead">Five</p>       
                </div>

                <div class="col-sm-10">
                    <div class="progress">
                        <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-2 text-right">
                    <p class="lead">Six</p>       
                </div>

                <div class="col-sm-10">
                    <div class="progress">
                        <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-2 text-right">
                    <p class="lead">Seven</p>       
                </div>

                <div class="col-sm-10">
                    <div class="progress">
                        <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-2 text-right">
                    <p class="lead">Eight</p>       
                </div>

                <div class="col-sm-10">
                    <div class="progress">
                        <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-2 text-right">
                    <p class="lead">Nine</p>       
                </div>

                <div class="col-sm-10">
                    <div class="progress">
                        <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-2 text-right">
                    <p class="lead">Ten</p>       
                </div>

                <div class="col-sm-10">
                    <div class="progress">
                        <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-2 text-right">
                    <p class="lead">Eleven</p>       
                </div>

                <div class="col-sm-10">
                    <div class="progress">
                        <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-2 text-right">
                    <p class="lead">Tweleve</p>       
                </div>

                <div class="col-sm-10">
                    <div class="progress">
                        <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection

@section('scripts')

    <script type="text/javascript">
        $(".edit-photo").click(function() {
            window.location = $(this).find("a").attr("href"); 
            return false;
        });
    </script>

@endsection