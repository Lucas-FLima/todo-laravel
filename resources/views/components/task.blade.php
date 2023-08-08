<div class="task">
    <div class="title">
        <input type="checkbox" 
            @if ($data && $data['done'] == true)
                @checked(true)
            @endif
        />
        <span class="task_title">{{$data['title'] ?? ''}}</span>
    </div>
    <div class="priority">
        <div class="sphere"></div>
        <span>{{$data['category'] ?? ''}}</span>
    </div>
    <div class="actions">
        <a href="{{$data['edit_url']}}">
            <img src="/assets/images/icon-edit.png" alt="Botão de editar tarefa">
        </a>
        <a href="{{$data['delete_url']}}">
            <img src="/assets/images/icon-delete.png" alt="Botão de deletar tarefa">
        </a>
    </div>
</div>