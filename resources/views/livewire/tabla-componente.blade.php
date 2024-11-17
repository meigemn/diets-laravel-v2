
<section class="py-1 bg-blueGray-50">
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
<link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">


<div class="w-full xl:w-8/12 mb-12 xl:mb-0 px-4 mx-auto mt-24">
    <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded ">
    <div class="rounded-t mb-0 px-4 py-3 border-0">
        <div class="flex flex-wrap items-center">
        <div class="relative w-full px-4 max-w-full flex-grow flex-1">
            <h3 class="font-semibold text-base text-blueGray-700">Page Visits</h3>
        </div>
        <div class="relative w-full px-4 max-w-full flex-grow flex-1 text-right">
            <button class="bg-indigo-500 text-white active:bg-indigo-600 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button" wire:click="openCreateModal" >
                Añadir dieta</button>
        </div>
        </div>
    </div>

    <div class="block w-full overflow-x-auto">
        <table class="items-center bg-transparent w-full border-collapse ">
        <thead>
        <tr>
            <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                        Titulo Dieta
                        </th>
        <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                        Fecha Dieta
                        </th>
                        <th>

                        </th>

        </thead>

        <tbody>
            @foreach ($dietaArray as $dieta )
                <tr>
                    <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left text-blueGray-700 ">
                        
                        {{$dieta->title}}
                    </th>
                    <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 ">{{$dieta->date}}</td>
                    <td class="flex flex-row gap-6  ">
                        <div wire:click='openCreateModal({{$dieta}},{{true}})'class="hover:cursor-pointer ">{{-- ojo icono --}}
                            <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M288 80c-65.2 0-118.8 29.6-159.9 67.7C89.6 183.5 63 226 49.4 256c13.6 30 40.2 72.5 78.6 108.3C169.2 402.4 222.8 432 288 432s118.8-29.6 159.9-67.7C486.4 328.5 513 286 526.6 256c-13.6-30-40.2-72.5-78.6-108.3C406.8 109.6 353.2 80 288 80zM95.4 112.6C142.5 68.8 207.2 32 288 32s145.5 36.8 192.6 80.6c46.8 43.5 78.1 95.4 93 131.1c3.3 7.9 3.3 16.7 0 24.6c-14.9 35.7-46.2 87.7-93 131.1C433.5 443.2 368.8 480 288 480s-145.5-36.8-192.6-80.6C48.6 356 17.3 304 2.5 268.3c-3.3-7.9-3.3-16.7 0-24.6C17.3 208 48.6 156 95.4 112.6zM288 336c44.2 0 80-35.8 80-80s-35.8-80-80-80c-.7 0-1.3 0-2 0c1.3 5.1 2 10.5 2 16c0 35.3-28.7 64-64 64c-5.5 0-10.9-.7-16-2c0 .7 0 1.3 0 2c0 44.2 35.8 80 80 80zm0-208a128 128 0 1 1 0 256 128 128 0 1 1 0-256z"/></svg>
                        </div>
                        <div wire:click='openCreateModal({{$dieta}})'class="hover:cursor-pointer">{{-- editar --}}
                            <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160L0 416c0 53 43 96 96 96l256 0c53 0 96-43 96-96l0-96c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 96c0 17.7-14.3 32-32 32L96 448c-17.7 0-32-14.3-32-32l0-256c0-17.7 14.3-32 32-32l96 0c17.7 0 32-14.3 32-32s-14.3-32-32-32L96 64z"/></svg>
                        </div>
                        <div wire:click='deleteDiet({{$dieta}})'class="hover:cursor-pointer">{{-- borrar --}}
                            <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M135.2 17.7L128 32 32 32C14.3 32 0 46.3 0 64S14.3 96 32 96l384 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-96 0-7.2-14.3C307.4 6.8 296.3 0 284.2 0L163.8 0c-12.1 0-23.2 6.8-28.6 17.7zM416 128L32 128 53.2 467c1.6 25.3 22.6 45 47.9 45l245.8 0c25.3 0 46.3-19.7 47.9-45L416 128z"/></svg>
                        </div>
                    </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
</div>
<footer class="relative pt-8 pb-6 mt-16">
    <div class="container mx-auto px-4">
    <div class="flex flex-wrap items-center md:justify-between justify-center">
        <div class="w-full md:w-6/12 px-4 mx-auto text-center">
        </div>
    </div>
    </div>
</footer>
{{-- modal --}}
@if($modal)
    <!-- component -->
<div class="fixed left-0 top-0 flex h-full w-full items-center justify-center bg-black bg-opacity-50 py-10">
    <div class="max-h-full w-full max-w-xl overflow-y-auto sm:rounded-2xl bg-white">
      <div class="w-full">
        <div class="m-8 my-20 max-w-[400px] mx-auto">
          <div class="mb-8">
            <div class="w-full max-w-sm min-w-[200px]">
                <label class="block mb-2 text-sm text-slate-600">
                Title
                </label>
                @if(!$isEditing)
                    <input type="text" class="w-full bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow" placeholder="Diet title" wire:model='title' />
                @else
                    <p >{{$title}}</p>
                @endIf
            </div>
            <div class="w-full max-w-sm min-w-[200px]">
                <label class="block mb-2 text-sm text-slate-600">
                Description
                </label>
                @if (!$isEditing)
                    <input type="text" class="w-full bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow" placeholder="Description" wire:model='description' />
                @else
                    <p>{{$description}}</p>
                @endif
            </div>
            <div class="w-full max-w-sm min-w-[200px]">
                <label class="block mb-2 text-sm text-slate-600">
                Total Calories
                </label>
                @if (!$isEditing)
                <input type="text" class="w-full bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow" placeholder="000000" wire:model='totalCalories' />
                @else
                    <p>{{$totalCalories}} </p>    
                @endif
            </div>
        </div>
        <div class="space-y-4">
            @if (!$isEditing)    
            <button class="p-3 bg-black rounded-full text-white w-full font-semibold" wire:click="createOrUpdateDiet">{{isset($myDiet->id)?'Update':'Create'}} Diet</button>
            @endif
            <button class="p-3 bg-white border rounded-full w-full font-semibold" wire:click="closeCreateModal">Close</button>
        </div>
        </div>
    </div>
    </div>
  </div>
  @endif
</section>