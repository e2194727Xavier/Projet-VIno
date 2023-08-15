    <div class="my-6">
        <h1 class="text-left text-xl ml-6 mb-6 font-bold text-gray-500">Catalogue</h1>
        <div class="max-w-1200px">
            @if(session('success'))
            <div class="bg-green-200 text-green-800 p-2 mb-4 rounded">{{ session('success')}}</div>
            @endif
            @if($errors->any())
            <div class="bg-red-200 text-red-800 p-2 mb-4 rounded">
                <ul>
                    @foreach($errors->all() as $error)
                    <li class="text-sm">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            @foreach($bottles as $bottle)
                @livewire('bottles.single-bottle', ['bottle_id' => $bottle['id'], "quantityInCellar" => 1], key($bottle['id']))
            @endforeach

            @if ($bottles instanceof \Illuminate\Pagination\LengthAwarePaginator)
            <div class="my-4">{{ $bottles->links('livewire.simple-pagination') }}</div>
            @endif
        </div>
    </div>