<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>





    <h1 class="p-6 text-gray-900 dark:text-gray-100" >exposicao de museus</h1>


    <div class="bg-white dark:bg-gray-800">
        <form action="{{route('museu.store')}}" method="POST">
            @csrf
            <input type="text" name='nome' placeholder="nome">
            <input type="text" name='localizacao' placeholder="localizacao">
            <input type="text" name='horario_de_funcionamento' placeholder="horario_de_funcionamento">
            <input type="text" name='exposicoes' placeholder="exposicoes">
            <input type="text" name='preco_de_entrada' placeholder="preco_de_entrada">
            <button class="p-6 text-gray-900 dark:text-gray-100">enviar</button>
        </form>
    </div>

    <div class="flex justify-between flex-grow">
    @foreach (Auth::user()->osMuseus as $museu)
        <div class="p-6 text-gray-900 dark:text-gray-100">{{$museu -> nome}}</div>
        <div class="p-6 text-gray-900 dark:text-gray-100">{{$museu -> localizacao}}</div>
        <div class="p-6 text-gray-900 dark:text-gray-100">{{$museu -> horario_de_funcionamento}}</div>
        <div class="p-6 text-gray-900 dark:text-gray-100">{{$museu -> exposicoes}}</div>
        <div class="p-6 text-gray-900 dark:text-gray-100">{{$museu -> preco_de_entrada}}</div>  
        <form action="{{route('museu.update', $museu)}}" method="POST">
            @csrf
            @method('PUT')
            <input type="text" name='nome' placeholder="nome">
            <input type="text" name='localizacao' placeholder="localização">
            <input type="text" name='horario_de_funcionamento' placeholder="horário de funcionamento">
            <input type="text" name='exposicoes' placeholder="exposições">
            <input type="text" name='preco_de_entrada' placeholder="preço de entrada">
            <button class="p-6 text-gray-900 dark:text-gray-100">atualizar</button>
        </form>
        <form action="{{route('museu.destroy', $museu)}}" method="POST">
            @csrf
            @method('DELETE')
            <button class="text-gray-900 dark:text-gray-100">delete</button>



        </form>
        @endforeach
    </div>
    </div>
 
</x-app-layout>
