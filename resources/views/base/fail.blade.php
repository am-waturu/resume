{{--reach or contact page--}}
@if (session()->has('fail'))
    <div class="alert alert-danger">
        @if(is_array(session('fail')))
            <ul>
                @foreach (session('fail') as $message)
                    <li>{{ $message }}</li>
                @endforeach
            </ul>
        @else
            {{ session('fail') }}
        @endif
    </div>
@endif
    <!-- end main-content of contact wrapper -->


