@if (session()->has('locale'))
    @include('frontend.layouts.' . session()->get('locale') . '.header')

    @yield('content')

    @include('frontend.layouts.' . session()->get('locale') . '.footer')
@else
    @include('frontend.layouts.en.header')

    @yield('content')

    @include('frontend.layouts.en.footer')
@endif
