<a {{ $attributes }} class="{{ $active ? 'bg-gray-900 text-white rounded-md' : 'text-gray-300 hover:bg-gray-700 hover:text-white'}}rounded-md px-3 py-2 font-medium text-base sm:text-sm"
aria-current="{{ $active ? 'page' : false }}">{{ $slot }}</a>

