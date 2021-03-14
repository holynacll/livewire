<div>
           

<div class="w-full overflow-x-hidden border-t flex flex-col">
    <main class="w-full flex-grow p-6">
        <h1 class="text-3xl text-black pb-6">Dashboard</h1>

        {{-- <div class="flex flex-wrap mt-6">
            <div class="w-full lg:w-1/2 pr-0 lg:pr-2">
                <p class="text-xl pb-3 flex items-center">
                    <i class="fas fa-plus mr-3"></i> Monthly Reports
                </p>
                <div class="p-6 bg-white">
                    <canvas id="chartOne" width="400" height="200"></canvas>
                </div>
            </div>
            <div class="w-full lg:w-1/2 pl-0 lg:pl-2 mt-12 lg:mt-0">
                <p class="text-xl pb-3 flex items-center">
                    <i class="fas fa-check mr-3"></i> Resolved Reports
                </p>
                <div class="p-6 bg-white">
                    <canvas id="chartTwo" width="400" height="200"></canvas>
                </div>
            </div>
        </div> --}}

        <div class="w-full mt-12">
            <p class="text-xl pb-3 flex items-center">
                <i class="fas fa-list mr-3"></i> Latest Reports
            </p>
            <div class="bg-white overflow-auto">
                <table class="min-w-full bg-white">
                    <thead class="bg-gray-800 text-white">
                        <tr>
                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Número</th>
                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Titulo</th>
                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Tipo de Documento</th>
                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Data Criação</th>
                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Ações</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700">
                        <tr>
                            <td class="text-left py-3 px-4">1</td>
                            <td class="text-left py-3 px-4">Compra de Equipamentos de Supote</td>
                            <td class="text-left py-3 px-4">Registro de Preço</td>
                            <td class="text-left py-3 px-4">06/02/2021 14:12:55</td>
                            <td class="text-left py-3 px-4">
                                <a class="hover:text-blue-500" href="#">consultar</a>
                            </td>
                        </tr>
                        <tr class="bg-gray-200">
                            <td class="text-left py-3 px-4">2</td>
                            <td class="text-left py-3 px-4">Compra de Equipamentos de Supote</td>
                            <td class="text-left py-3 px-4">Registro de Preço</td>
                            <td class="text-left py-3 px-4">06/02/2021 14:12:55</td>
                            <td class="text-left py-3 px-4">
                                <a class="hover:text-blue-500" href="#">consultar</a>
                            </td>                        
                        </tr>
                        <tr>
                            <td class="text-left py-3 px-4">3</td>
                            <td class="text-left py-3 px-4">Compra de Equipamentos de Supote</td>
                            <td class="text-left py-3 px-4">Registro de Preço</td>
                            <td class="text-left py-3 px-4">06/02/2021 14:12:55</td>
                            <td class="text-left py-3 px-4">
                                <a class="hover:text-blue-500" href="#">consultar</a>
                            </td>                        
                        </tr>
                        <tr class="bg-gray-200">
                            <td class="text-left py-3 px-4">4</td>
                            <td class="text-left py-3 px-4">Compra de Equipamentos de Supote</td>
                            <td class="text-left py-3 px-4">Registro de Preço</td>
                            <td class="text-left py-3 px-4">06/02/2021 14:12:55</td>
                            <td class="text-left py-3 px-4">
                                <a class="hover:text-blue-500" href="#">consultar</a>
                            </td>                        
                        </tr>
                        <tr>
                            <td class="text-left py-3 px-4">5</td>
                            <td class="text-left py-3 px-4">Compra de Equipamentos de Supote</td>
                            <td class="text-left py-3 px-4">Registro de Preço</td>
                            <td class="text-left py-3 px-4">06/02/2021 14:12:55</td>
                            <td class="text-left py-3 px-4">
                                <a class="hover:text-blue-500" href="#">consultar</a>
                            </td>                        
                        </tr>
                        <tr class="bg-gray-200">
                            <td class="text-left py-3 px-4">6</td>
                            <td class="text-left py-3 px-4">Compra de Equipamentos de Supote</td>
                            <td class="text-left py-3 px-4">Registro de Preço</td>
                            <td class="text-left py-3 px-4">06/02/2021 14:12:55</td>
                            <td class="text-left py-3 px-4">
                                <a class="hover:text-blue-500" href="#">consultar</a>
                            </td>                        
                        </tr>
                        <tr>
                            <td class="text-left py-3 px-4">7</td>
                            <td class="text-left py-3 px-4">Compra de Equipamentos de Supote</td>
                            <td class="text-left py-3 px-4">Registro de Preço</td>
                            <td class="text-left py-3 px-4">06/02/2021 14:12:55</td>
                            <td class="text-left py-3 px-4">
                                <a class="hover:text-blue-500" href="#">consultar</a>
                            </td>                        
                        </tr>
                        <tr class="bg-gray-200">
                            <td class="text-left py-3 px-4">8</td>
                            <td class="text-left py-3 px-4">Compra de Equipamentos de Supote</td>
                            <td class="text-left py-3 px-4">Registro de Preço</td>
                            <td class="text-left py-3 px-4">06/02/2021 14:12:55</td>
                            <td class="text-left py-3 px-4">
                                <a class="hover:text-blue-500" href="#">consultar</a>
                            </td>                        
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>

    <footer class="w-full bg-white text-right p-4">
        Built by <a target="_blank" href="#" class="underline"></a>.
    </footer>

</div>

    
    

    
    
</div>
