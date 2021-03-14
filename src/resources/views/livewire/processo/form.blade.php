<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}

    {{-- <a href="#" wire:click="Increment">{{ $counter }}</a> --}} 


<div class="w-full overflow-x-hidden border-t flex flex-col">
    <main class="w-full flex-grow p-6">
        <h1 class="text-3xl text-black pb-6">Novo Processo</h1>

       
        
        <div class="flex flex-wrap mt-6">
            {{-- <div class="w-full lg:w-1/2 pr-0 lg:pr-2"> --}}
                <div class="w-full lg:w-1/2">
                <form action="" method="POST">
                    @csrf

                    <div class="mb-2">
                        <label for="titulo" class="block text-sm font-medium text-gray-700">Título</label>
                        <input type="text" class="mt-1 block w-full rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm ">
                    </div>
        
                    <div class="mb-4">
                        <label for="descricao" class="block text-sm font-medium text-gray-700">
                            Descrição
                        </label>
                        <div class="mt-1">
                            <textarea name="" id="" rows="3" class="block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 sm:text-sm border-gray-300 rounded-md" placeholder="O presente documento declara..."></textarea>
                        </div>
                    </div>

              
        
                    <div class="mb-4">
                        <label for="anexo" class="block text-sm font-medium text-gray-700">
                            Anexar Arquivo
                        </label>
                        <input type="file" name="" id="" multiple class="mt-1 block w-full rounded-md text-gray-700 border-gray-300 focus:border-indigo-500 focus:ring-indigo-500">
                    </div>

                    
        
                    <div class="mb-4">
                        <label for="processo_tipo" class="block text-sm font-medium text-gray-700">
                            Tipo de Processo
                        </label>
                        <select name="" id="" 
                        class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md 
                        shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            <option value="">Selecione</option>
                            <option value="">Tipo 1</option>
                            <option value="">Tipo 2</option>
                            <option value="">Tipo 3</option>
                            <option value="">Tipo 4</option>
                        </select>
                    </div>

                    <div class="mb-4">
                        <label for="destino_tipo" class="block text-sm font-medium text-gray-700">Destinos</label>
                        <select name="" id="" multiple 
                        class="mt-1 block w-full h-32 py-2 px-3 border border-gray-300 bg-white rounded-md 
                         shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm ">
                            <option value="">DOU - Diário Oficial da União</option>
                            <option value="">DOE - Diário Oficial</option>
                            <option value="">PMS - Prefeitura Municipal do Salvador</option>
                            <option value="">Jornal Atarde</option>
                            <option value="">Jornal Globo</option>
                            <option value="">UOL</option>
                            <option value="">Amazon</option>
                            <option value="">Google</option>
                        </select>
                    </div>
                    
        
                    <div class="py-3 text-right">
                        <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Salvar
                        </button>
                    </div>
        
        
                </form>

            </div>
            {{-- <div class="w-full lg:w-1/2 pl-0 lg:pl-2 mt-12 lg:mt-0">
               
            </div> --}}
        </div>

        
      
        
    
</div>
