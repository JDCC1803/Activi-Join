<x-app-layout>
    @if(@Auth::user()->hasRole('asesor'))
        @yield('mayor')
    @endif
    @if(@Auth::user()->hasRole('novato'))
        @yield('menor')
    @endif
    @if(@Auth::user()->hasRole('superadmin'))
        @yield('info')
    @endif
</x-app-layout>