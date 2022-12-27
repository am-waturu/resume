{{--reach or contact page--}}
@if (session()->has('sent'))

        <div class="alert alert-success">
            @if(is_array(session('sent')))
                <ul>
                    @foreach (session('sent') as $message)
                        <li class="">{{ $message }}</li>
                    @endforeach
                </ul>
            @else
                {{ session('sent') }}
            @endif
        </div>


@endif
    <!-- end main-content of contact wrapper -->


