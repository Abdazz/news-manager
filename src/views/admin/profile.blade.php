@extends('posts-manager::admin.default')

@section('content')
<div class="row">
    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-30 mx-auto">
        <div class="pd-20 card-box height-100-p">
            <div class="profile-photo">
                <a href="{{ route('updateForm') }}" class="edit-avatar"><i class="fa fa-pencil"></i></a>
                <img src="{{ asset('images/users/profile.jpeg') }}" alt="" class="">
                <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-body pd-5">
                                <div class="img-container">
                                    <img id="image" src="vendors/images/photo2.jpg" alt="Picture">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <input type="submit" value="Update" class="btn btn-primary">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <h5 class="text-center h5 mb-0 text-blue">{{ $user->name }}</h5>
            <div class="profile-info">
                <ul>
                    <li>
                        <span>Adresse mail:</span>
                        {{ $user->email }}
                    </li>
                    <li>
                        <span>Mot de passe: <em>Secret</em></span>
                    </li>
                </ul>

            </div>
        </div>
    </div>
</div>
@endsection
