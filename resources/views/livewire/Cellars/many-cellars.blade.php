<div>
    @error('cellars')
    <div class="text-red-500">{{ $message }}</div>
    @enderror

    <div class="my-4 font-roboto">
        <h1 class="text-left text-xl ml-6 mb-6 font-bold text-gray-500">Vos celliers</h1>
        <div class="flex flex-col gap-4">
            @foreach ($cellars as $cellar)
            <a href="{{ route('singleCellar', ['cellar_id' => $cellar->id]) }}" class="text-gray-300">
                <div class="mx-6 my-2 flex rounded items-center gap-2 justify-center shadow shadow-gray-400">
                    <div class="mb-4 text-center border-10 rounded">
                        <p class="hidden">{{ $cellar->id }}</p>
                        <p class="text-xl mt-4 text-gray-500 ">{{ $cellar->name }}</p>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</div>