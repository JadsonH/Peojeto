<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Séries') }}
        </h2>          
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                  <div id="copy-area">
                   @can('admin')
                   <form action="{{route('salvar1')}}" method="POST">
                   @csrf
                   <p>Nome: <input type="text" class="form-control" name="nome"></p>
                   <p>Ano: <input type="text" class="form-control" name="ano"></p>
                   <p>País de origem: <input type="text" class="form-control" name="pais"></p>
                   <p>Gênero: <input type="text" class="form-control" name="genero"></p>
                   <p>Diretor: <input type="text" class="form-control" name="diretor"></p>
                   <p>Faixa etária: <input type="text" class="form-control" name="faixa etaria"></p>
                   <p>Atores: <input type="text" class="form-control" name="atores"></p>
                   <p>Sinopse: <input type="text" class="form-control" name="sinopse"></p>
                   <p>Crítica: <input type="text" class="form-control" name="critica"></p><br>
                   <input type="submit" class="main-btn" value="enviar">
                   </form>
                   <h1>Series:</h1>
                   @foreach ($series as $element)
                   <p>
                   {{$element->nome}}
                   {{$element->ano}}
                   {{$element->pais}}
                   {{$element->genero}}
                   {{$element->diretor}}
                   {{$element->faixa_etaria}}
                   {{$element->atores}}
                   {{$element->sinopse}}
                   {{$element->critica}}
                   </p>
                   @endforeach
                   @elsecan('user')
                   @foreach ($series as $element)
                   <p>
                   {{$element->nome}}
                   {{$element->ano}}
                   {{$element->pais}}
                   {{$element->genero}}
                   {{$element->diretor}}
                   {{$element->faixa_etaria}}
                   {{$element->atores}}
                   {{$element->sinopse}}
                   {{$element->critica}}
                   </p>
                   @endforeach
                   @endcan
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
