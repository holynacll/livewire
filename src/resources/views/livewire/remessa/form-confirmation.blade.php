<div>


    <div class="w-full overflow-x-hidden border-t flex flex-col">
        <main class="w-full flex-grow p-6">
            <h1 class="text-3xl text-black pb-6">Confirmar Remessa</h1>

        
            
            <div class="flex flex-wrap mt-6">
                <div class="w-full lg:w-3/5 mx-auto">

                    <form  method="POST">
                        @csrf

                       
                        @foreach ($temporaryUrls as $key => $url)
                            
                            <p class="text-xl">Remessa com destino {{ $key }} </p>
                            <p class="text-xs">URL: {{ $url }}</p>

                        @endforeach


                        
            
                        <div class="py-3 text-right">

                            <button type="button" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Cancelar
                            </button>

                            <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Enviar
                            </button>
                            
                        </div>
            
            
                    </form>

                </div>

                {{-- new page --}}
                {{-- <div class="w-full lg:w-1/2">
                    @if ( count($temporaryUrls) > 1 )

                        <h1>Teste</h1>
                        @foreach( $temporaryUrls as $url ) 

                            {{ $url }}

                        @endforeach

                    @endif
                </div> --}}


            </div>

            
        </main> 
    
    </div>

    <script>

    </script>
    
</div>
