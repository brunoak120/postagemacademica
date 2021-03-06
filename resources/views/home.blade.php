@extends('layouts.app')

@section('content')

    <article class="col s12 m7 l8">

        <br>

        <section class="input-field col s12">
            <select>
                <option value="" disabled selected>Disciplinas</option>
                <option value="1">Option 1</option>
                <option value="2">Option 2</option>
                <option value="3">Option 3</option>
            </select>
            <label>Filtrar Por: </label>
        </section>

        @forelse($posts as $post)

            <section class="section">

                <header>
                    <div class="chip">
                        <img src="/image/profile/user/sem_foto.png" alt="Contact Person">
                        {{ Auth::user()->name }}
                    </div>

                    <h5> {{ $post->title }} </h5>
                </header>

                <article>
                    <p> {{ $post->content }} </p>
                </article>

                <footer class="votacao">
                    <p>
                        <a href="#"> <i class="fa fa-thumbs-o-up fa-2x"> </i> </a> <span> ({{ $post->like }}) </span>
                        <a href="#"> <i class="fa fa-thumbs-o-down fa-2x"> </i> </a> <span> ({{ $post->unlike }}) </span>
                        <span class="download"> <a href="/download/{{ $post->arquivo }}"> <i class="fa fa-download"> Download </i> </a> </span>
                    </p>
                </footer>

            </section>

            <div class="divider"> </div>

        @empty
            <h5 class="center"> Nenhuma postagem </h5>
        @endforelse

    </article>

    @include('include.top-five')

@endsection
