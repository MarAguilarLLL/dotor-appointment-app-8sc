{{-- Verificar si hay elementos en el breadcrumb --}}
@if(isset($breadcrumbs) && count($breadcrumbs))
    <nav class="mb-2">
        <ol class="flex flex-wrap items-center text-slate-700 text-sm">
            {{-- Recorrer elementos del breadcrumb --}}
            @foreach($breadcrumbs as $item)
            <li class="flex items-center">
                {{-- Si no es el primer elemento, poner separador antes --}}
                @unless($loop->first)
                    <span class="px-2 text-gray-400">/</span>
                @endunless
                {{-- Revisar si tiene un href --}}
                @isset($item['href'])
                <a href="{{ $item['href'] }}" 
                   class="opacity-60 hover:opacity-100 transition">
                    {{ $item['name'] }}
                </a>
                @else
                <span class="font-bold text-slate-900">{{ $item['name'] }}</span>
                @endisset
            </li>
            @endforeach
        </ol>
    </nav>
@endif