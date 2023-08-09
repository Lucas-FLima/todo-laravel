<x-layout>
    <x-slot:btn>
        <a href="{{route('home')}}" class="btn btn-primary">Voltar</a>
    </x-slot:btn>

    <section id="create_task_section">
        <h1>Criar Tarefa</h1>
        <form action="">
            <div class="input_area">
                <label for="title">Título da Tarefa</label>
                <input type="text" name="title" id="title" required placeholder="Digite o título da tarefa">
            </div>
            <div class="input_area">
                <label for="category">Categoria</label>
                <select name="category" id="category" required>
                    <option selected disabled value="">Selecione a categoria</option>
                    <option value="1">Valor 1</option>
                </select>
            </div>
            <div class="input_area">
                <label for="description">Descrição</label>
                <textarea name="description" id="description" placeholder="Digite uma descrição para sua tarefa" cols="30" rows="10"></textarea>
            </div>
            <div class="input_area">
                <label for="due_date">Data de realização</label>
                <input type="date" name="due_date" id="due_date" required>
            </div>
        </form>
    </section>

</x-layout>
