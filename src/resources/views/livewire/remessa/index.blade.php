<div>


    <div class="w-full overflow-x-hidden border-t flex flex-col">
        <main class="w-full flex-grow p-6">
            <h1 class="text-3xl text-black pb-6">Remessas - {{ ucfirst(mb_strtolower(\Auth::user()->instituicao->descricao, 'UTF-8')) }}</h1>

        
            {{-- <div class="flex flex-wrap mt-6"> --}}

                <div class="flex flex-col mt-8">
                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="flex items-center justify-between">
                                <div class="max-w-lg w-full lg:max-w-xs">
                                    <label for="search" class="sr-only">Search</label>
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                            <svg class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                        <input id="search"
                                            class="block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-md leading-5 bg-white placeholder-gray-500 focus:outline-none focus:placeholder-gray-400 focus:border-blue-300 focus:shadow-outline-blue sm:text-sm transition duration-150 ease-in-out"
                                            placeholder="Search" type="search">
                                    </div>
                                </div>
                            </div>
                
                            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg mt-4">
                
                                <table class="min-w-full divide-y divide-gray-200">
                                    <thead>
                                        <tr>
                                            <th
                                                class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                Numero
                                            </th>
                                            <th
                                                class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                Título
                                            </th>
                                            <th
                                                class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                Tipo
                                            </th>
                                            <th
                                                class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                Data de Envio
                                            </th>
                                            <th
                                                class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                Criado Por
                                            </th>
                                            <th 
                                                class="px-6 py-3 bg-gray-50 text-right text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                Ações
                                            <th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        @if( count($remessas) > 0 )
                                            @foreach ($remessas as $item)
                                            <tr>
                                                <td class="px-6 py-4 whitespace-no-wrap">
                                                    
                                                    <div class="ml-4">
                                                        <div class="text-sm text-left leading-5 font-medium text-gray-900">
                                                            {{ $item->id }}
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-no-wrap">
                                                    
                                                    <div class="ml-4">
                                                        <div class="text-sm leading-5 font-medium text-gray-900">
                                                            {{ $item->titulo }}
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-no-wrap">
                                                    <div class="text-sm leading-5 text-gray-900">
                                                        {{ $item->tipo->descricao }}
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-no-wrap">
                                                    <div class="text-sm leading-5 text-gray-900">
                                                        {{ date('d/m/Y', strtotime($item->data_envio)) }}
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-no-wrap">
                                                    <div class="text-sm leading-5 text-gray-900">
                                                        {{ $item->user->name }}
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-no-wrap text-right text-sm leading-5 font-medium">
                                                    <button wire:click="visualizar({{ $item->id }})" class="text-gray-600 hover:text-gray-900">
                                                        <i class="fas fa-file-pdf"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            @endforeach
                                            
                                        @else
                                            <tr>
                                                <td colspan="6" class="px-6 py-4 whitespace-no-wrap text-center text-sm leading-5 font-medium">
                                                    Nenhuma remessa encontrada.
                                                </td>
                                            </tr>
                                        @endif
                                    </tbody>
                                    
                                </table>
                             
                            </div>
                            <div class="mt-8">
                                {{ $remessas->links() }}
                            </div>
                            
                        </div>
                    </div>
                    <div class="h-96"></div>
                </div>
            {{-- </div> --}}

            {{-- <table id="remessasTable" class="display">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Titulo</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($remessas as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->titulo }}</td>
                        </tr>
                    @endforeach
                    
                </tbody>
            </table> --}}

        </main> 
    
    </div>

</div>

