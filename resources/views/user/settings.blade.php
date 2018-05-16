@extends('layouts.main')

@section('title', 'User Settings')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">User Settings</div>

                <div class="card-body">
                    <form action="{{ route('user.settings') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        {{-- Profile Picture --}}
                        <label for="profile_picture">Profile Picture</label>
                        <div class="input-group">
                            <label class="input-group-btn" style="margin-bottom: 0px;">
                                <span class="btn btn-primary">
                                    <i class="fas fa-cloud-upload-alt"></i> Browse&hellip; <input type="file" style="display: none;" name="profile_picture">
                                </span>
                            </label>
                            <input type="text" class="form-control" readonly>
                        </div>

                        {{-- Submit Buttom --}}
                        <button class="btn btn-block btn-success top-spacing">Save Settings</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    
    <script type="text/javascript">
        $(function() {

            // We can attach the `fileselect` event to all file inputs on the page
            $(document).on('change', ':file', function() {
                var input = $(this),
                numFiles = input.get(0).files ? input.get(0).files.length : 1,
                label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
                input.trigger('fileselect', [numFiles, label]);
            });

            // We can watch for our custom `fileselect` event like this
            $(document).ready( function() {
                $(':file').on('fileselect', function(event, numFiles, label) {

                var input = $(this).parents('.input-group').find(':text'),
                log = numFiles > 1 ? numFiles + ' files selected' : label;

                if( input.length ) {
                    input.val(log);
                } else {
                    if( log ) alert(log);
                }

                });
            });

        });
    </script>

@endsection