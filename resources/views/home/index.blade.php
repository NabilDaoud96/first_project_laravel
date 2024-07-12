@extends('templates.default')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <form action="{{route('mailing_create')}}" method = "post">
                <div class="form-group{{ $errors->has('email') ? 'has-error' : ''}}">
                    @if($errors->has('email'))
                        <div class="alert alert-danger" role="alert">
                            {{$errors->first('email')}}
                        </div>
                    @endif

                    <label for="email">Email :
                        <input type="text" name = "email" class= "form-control">
                        <li>
                            <a href="">
                                
                            </a>
                        </li>
                    </label>
                </div>

                <div class="form-group">
                    <input type="submit" value = "valider">
                </div>

            {{csrf_field()}}
        </div>
    </div>


    </form>
@endsection