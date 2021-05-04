<div>


    <div class="w-full overflow-x-hidden border-t flex flex-col">
        <main class="w-full flex-grow p-6">
            <h1 class="text-3xl text-black pb-6">Nova Remessa</h1>

        
            
            <div class="flex flex-wrap mt-6">
                <div class="w-full lg:w-3/5 mx-auto">

                    <form wire:submit.prevent="save" method="POST" enctype='multipart/form-data'>
                        @csrf

                        <div class="mb-4">
                            <x-date-picker/>
                            @error('date') <span class="error text-xs text-red-500">{{ $message }}</span> @enderror
                        </div>


                        <div class="mb-4">
                            <label for="tipo" class="block text-sm font-medium text-gray-700">
                                Tipo de Remessa
                            </label>

                            <select wire:model="tipo"
                            class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md 
                            shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                <option value="">Selecione</option>
                                @foreach ($tipo_remessa_collection as $item)
                                    <option value="{{ $item->id }}">{{ $item->descricao }}</option>
                                @endforeach
                            </select>
                            @error('tipo') <span class="error text-xs text-red-500">{{ $message }}</span> @enderror
                        </div>

                        <div class="mb-4">
                            <label for="titulo" class="block text-sm font-medium text-gray-700">Título</label>
                            <input type="text" wire:model="titulo" class="mt-1 block w-full rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm ">
                            @error('titulo') <span class="error text-xs text-red-500">{{ $message }}</span> @enderror
                        </div>

                        <div class="mb-4">
                            <label for="anexos" class="block text-sm font-medium text-gray-700">
                                Anexar Arquivo
                            </label>
                            <input type="file" wire:model="anexos" multiple class="mt-1 block w-full rounded-md text-gray-700 border-gray-300 focus:border-indigo-500 focus:ring-indigo-500">
                            @error('anexos') <span class="error text-xs text-red-500">{{ $message }}</span> @enderror
                            @error('anexos.*') <span class="error text-xs text-red-500">{{ $message }}</span> @enderror
                        </div>

                        <div class="mb-4">
                            <label for="destinos" class="block text-sm font-medium text-gray-700">Destinos</label>
                            <select wire:model="destinos" multiple 
                            class="mt-1 block w-full h-32 py-2 px-3 border border-gray-300 bg-white rounded-md 
                            shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm ">
                                <option value="DOU">DOU - Diário Oficial da União</option>
                                <option value="DOE">DOE - Diário Oficial</option>
                                <option value="PMS">PMS - Prefeitura Municipal do Salvador</option>
                            </select>
                            @error('destinos') <span class="error text-xs text-red-500">{{ $message }}</span> @enderror
                            @error('destinos.*') <span class="error text-xs text-red-500">{{ $message }}</span> @enderror

                        </div>
                        
            
                        <div class="py-3 text-right">
                            <button wire:click="resetFilters" type="button" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Limpar
                            </button>
                            <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Salvar
                            </button>
                            
                        </div>
            
            
                    </form>

                </div>

                {{-- new page --}}
                <div class="w-full lg:w-3/5 mx-auto">
                    @if ( count($temporaryUrls) > 0 )

                        

                            @foreach( $temporaryUrls as $key => $url ) 

                                <p class="block text-xl font-medium text-gray-700">Remessa com destino {{ $key }} </p>
                                <p class="block text-normal font-medium text-gray-700  px-2 py-4">URL: <a href="{{ $url }}">{{ $url }}</a></p>

                            @endforeach


                            <div class="py-3 text-right">

                                <button type="button" wire:click="cancelarRemessa" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    Cancelar
                                </button>
    
                                <button type="button" wire:click="confirmarRemessa" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    Enviar
                                </button>
                                
                            </div>


                    @endif
                </div>


            </div>

            
        </main> 
    
    </div>

    <script>

    </script>
    
</div>
