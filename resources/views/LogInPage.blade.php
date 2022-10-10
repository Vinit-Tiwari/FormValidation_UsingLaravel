@extends('  main')

@section('content')
    <span>
        <form action="" class="form" method="post">
            <span>
                <input type="email" placeholder="email" required>
            </span>
            <span>
                <input type="password" placeholder="password" required>
            </span>
            <span class="submit">
                <input type="submit" value="Submit" class="submit-btn">
            </span>
        </form>
    </span>
@endsection
