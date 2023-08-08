<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/style.css">
    <title>Todo App</title>
</head>

<body>
    <div class="container">
        <div class="sidebar">
            <img src="/assets/images/logo.png" alt="Logo do site">
        </div>
        <div class="content">
            <nav>
                <a href="#" class="btn btn-primary">Criar Tarefa</a>
            </nav>
            <main>
                <section class="graph">
                    <div class="graph_header">
                        <h2>Progresso do Dia</h2>
                        <div class="graph_header-line"></div>
                        <div class="graph_header-date">
                            Data
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
                        <div class="task">
                            <div class="title">
                                <input type="checkbox" name="" id="">
                                <span class="task_title">Título da Tarefa</span>
                            </div>
                            <div class="priority">
                                <div class="sphere"></div>
                                <span>Título da Tarefa</span>
                            </div>
                            <div class="actions">
                                <a href="#">
                                    <img src="/assets/images/icon-edit.png" alt="Botão de editar tarefa">
                                </a>
                                <a href="#">
                                    <img src="/assets/images/icon-delete.png" alt="Botão de deletar tarefa">
                                </a>
                            </div>
                        </div>
                    </div>
                </section>
            </main>
        </div>
    </div>
</body>

</html>
