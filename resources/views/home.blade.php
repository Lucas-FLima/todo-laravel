<x-layout page="Home">
    <x-slot:btn>
        <a href="{{route('task.create')}}" class="btn btn-primary">Criar Tarefa</a>
    </x-slot:btn>
    <section class="graph">
        <div class="graph_header">
            <h2>Progresso do Dia</h2>
            <div class="graph_header-line"></div>
            <div class="graph_header-date">
                <img src="/assets/images/icon-prev.png" alt="Botão de diminuir 1 Dia">
                13 de Dez
                <img src="/assets/images/icon-next.png" alt="Botão de aumentar 1 Dia">
            </div>
        </div>
        <div class="graph_header-subtitle">
            Tarefas: <b>3/6</b>
        </div>
        <div class="graph-placeholder">
        </div>

        <div class="tasks_left_footer">
            <img src="/assets/images/icon-info.png" alt="Ícone de informções">
            Restam 3 tarefas para serem realizadas
        </div>
    </section>
    <section class="list">
        <div class="list_header">
            <select name="" id="" class="list_header-select">
                <option value="1">Todas as Tarefas</option>
                <option value="">Tarefas Concluídas</option>
                <option value="">Tarefas Pendentes</option>
            </select>
        </div>
        <div class="task_list">
            @php
                $tasks = [['done' => false, 'title' => 'Minha Primeira Task', 'category' => 'Categoria 1', 'delete_url' => '#', 'edit_url' => '#'], ['done' => true, 'title' => 'Minha Segunda Task', 'category' => 'Categoria 2', 'delete_url' => '#', 'edit_url' => '#'], ['done' => false, 'title' => 'Minha Terceira Task', 'category' => 'Categoria 1', 'delete_url' => '#', 'edit_url' => '#']];
            @endphp
            <x-task :data=$tasks[0] />
            <x-task :data=$tasks[1] />
            <x-task :data=$tasks[2] />
        </div>
    </section>
</x-layout>
