@extends('main')

@section('content')

    <span>
        <form action="{{url('/')}}/register" class="form" method="POST">
            @csrf
            <span class="column">
                <input type="text" placeholder="name"  name="name" value="{{old('name')}}">
                <span class="danger">
                    @error('name')
                        {{$message}}
                    @enderror
                </span>
            </span>
            <span class="column">
                <input type="email" placeholder="email" name="email" value="{{old('email')}}">
                <span class="danger">
                    @error('email')
                        {{$message}}
                    @enderror
                </span>
            </span>
            <span class="column">
                <input type="password" placeholder="password" name="password">
                <span class="danger">
                    @error('password')
                        {{$message}}
                    @enderror
                </span>
            </span>
            <span class="column">
                <input type="password" placeholder="confirm password" name="confirmedPassword">
                <span class="danger">
                    @error('confirmedPassword')
                        {{$message}}
                    @enderror
                </span>
            </span>
            <span class="submit">
                <input type="submit" value="Submit" class="submit-btn">
            </span>
        </form>
    </span>
@endsection
