<x-layout>
    <x-slot:btn>
        <a href="{{ route('home') }}" class="btn btn-primary">Voltar</a>
    </x-slot:btn>

    <section id="create_task_section">
        <h1>Criar Tarefa</h1>
        <form action="">
            <x-form.text_input name="title" label="Título da Tarefa" placeholder="Digite o título da tarefa"
                required='required' />
            <x-form.select_input name="category" label="Categoria" required='required' />
            <x-form.textarea_input name='description' label="Descrição"
                placeholder='Digite uma descrição para sua tarefa' />
            <x-form.text_input type="date" name="due_date" required='required' label="Data de realização" />
            <x-form.form_button  sendText="Criar Tarefa" resetText="Resetar"/>
        </form>
    </section>

</x-layout>
