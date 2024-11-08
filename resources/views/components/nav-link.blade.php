@props(['active' => false])

<a class="{{ $active ? 'bg-sky-800 text-white': 'text-slate-50 hover:bg-sky-600 hover:text-white'}} rounded-md px-3 py-2 text-sm font-medium"
   aria-current="{{ $active ? 'page': 'false' }}"
   {{ $attributes }}
>{{ $slot }}</a>