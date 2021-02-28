<!-- He who is contented is rich. - Laozi -->

<a href="{{ route($routeName) }}"
   class="@if(Request::routeIs($routeName)) bg-indigo-700 @else hover:bg-indigo-500 hover:bg-opacity-75 @endif text-white rounded-md py-2 px-3 text-sm font-medium">
    {{ $name }}
</a>
