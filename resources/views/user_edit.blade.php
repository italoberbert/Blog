    <h1 class="h4 text-gray-900 mb-4">Update User!</h1>

    @if (session()->has('updated_success'))
    <x-alert key="success" :message="session()->get('updated_success')" />
    @elseif(session()->has('updated_error'))
    <x-alert key="danger" :message="session()->get('updated_error')" />
    @endif

    <form class="user" action="{{ route('user.update', $user->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="text" class="form-control form-control-user" name="firstName"
                            placeholder="firstName" value="{{ $user->firstName}}">
                        {{ $errors->first('firstName')}}
                </div>
                <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" name="lastName"
                        placeholder="lastName" value="{{ $user->lastName}}">
                    {{ $errors->first('lastName')}}
                </div>
                <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" name="email"
                        placeholder="email" value="{{ $user->email}}">
                    {{ $errors->first('email')}}
                </div>
            
                <button type="submit" class="btn btn sucess btn sm">Save</button>
    </form>

    <h1 class="h4 text-gray-900 mb-4">Update Password!</h1>

    @if (session()->has('password_success'))
    <x-alert key="success" :message="session()->get('password_success')" />
    @elseif(session()->has('password_error'))
    <x-alert key="danger" :message="session()->get('password_error')" />
    @endif

    <form action="{{ route('password.user.update', $user->id) }}" method="POST">

    @csrf
    @method('PUT')

        <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
        <input type="text" class="form-control form-control-user" name="password"
            placeholder="Password">
        {{ $errors->first('password')}}
        </div>
        <div class="col-sm-6">
        <input type="text" class="form-control form-control-user" name="password_confirmation"
            placeholder="Confirm password">
        {{ $errors->first('password_confirmation')}}
        </div>
        <button type="submit" class="btn btn sucess btn sm">Save</button>
    </form>
