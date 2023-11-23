<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            overflow-x: hidden;
        }

        body {
            width: 100vw;
            display: flex;
            justify-content: center;
        }

        .container {
            width: 80vw;
            height: auto;
        }

        .card {
            width: 90%;
            margin: 20px;
            background: #ffff;
            border-radius: 8px;
            box-shadow: 0px 0px 5px #aeaeae;
        }

        .card-header {
            width: 100%;
            background: #0088cc60;
            margin: 0;
            padding: 10px;
        }

        .text-title p {
            font-size: 1.5em;
        }

        .card-body {
            width: 100%;
            box-sizing: border-box;
        }

        .input-group {
            width: 100%;
            display: grid;
            grid-template-columns: 80% 20%;
            box-sizing: border-box;
            grid-gap: 5px;
            padding: 10px;
        }

        .input-task,
        .btn-add {
            padding: 10px;
        }

        .btn-add {
            background-color: #0088cc;
            color: #ffff;
            border: none;
        }

        .card-list {
            padding: 10px;
            border-bottom: 1px solid #aeaeae;
            display: grid;
            grid-template-columns: 80% 20%;
        }

        .btn-delete {
            background: #ff000070;
            padding: 10px 15px;
            border: none;
            border-radius: 8px;
            color: #ffff;
            margin: 5px;
        }

        .btn-check {
            background: #00a653;
            padding: 10px 15px;
            border: none;
            border-radius: 8px;
            color: #ffff;
            margin: 5px;
        }

        @media screen and (max-width: 480px) {
            .container{
                width: 95vw;
            }
            .input-group {
                grid-template-columns: auto;
            }
            .card-list {
                grid-template-columns: auto;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="text-title">
                    <p>Todo List App</p>
                </div>
            </div>
            <div class="card-body">
                <div class="input-group">
                    <input type="text" id="task" class="input-task" placeholder="Masukan task ....">
                    <button type="submit" onclick="addTask()" class="btn-add"><b>+</b></button>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <div class="text-title">
                    <p>List Task</p>
                </div>
            </div>
            <div class="card-body" id="list-data">
                <!-- <div class="card-list">
                    <div class="list-area">
                        <p>tugas 1</p>
                    </div>
                    <div class="list-delete">
                        <button type="submit" class="btn-delete">Hapus</button>
                        <button type="submit" class="btn-check">Check</button>

                    </div>
                </div>
                <div class="card-list">
                    <div class="list-area">
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Autem velit, asperiores odio
                            quisquam unde ab maiores est dicta rerum rem.</p>
                    </div>
                    <div class="list-delete">
                        <button type="submit" class="btn-delete">Hapus</button>
                        <button type="submit" class="btn-check">Check</button>

                    </div>
                </div>
                <div class="card-list">
                    <div class="list-area">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Itaque optio, delectus placeat
                            nulla sequi perferendis esse ab fugit totam reprehenderit quasi quibusdam. Animi earum nobis
                            architecto et ipsa nemo perspiciatis accusamus exercitationem delectus in sunt,
                            necessitatibus deserunt itaque distinctio adipisci illum fuga enim aliquam laborum eaque
                            dolor reiciendis. Mollitia, optio.</p>
                    </div>
                    <div class="list-delete">
                        <button type="submit" class="btn-delete">Hapus</button>
                        <button type="submit" class="btn-check">Check</button>

                    </div>
                </div>
                <div class="card-list">
                    <div class="list-area">
                        <p>tugas 1</p>
                    </div>
                    <div class="list-delete">
                        <button type="submit" class="btn-delete">Hapus</button>
                        <button type="submit" class="btn-check">Check</button>

                    </div>
                </div>
                <div class="card-list">
                    <div class="list-area">
                        <p>tugas 1</p>
                    </div>
                    <div class="list-delete">
                        <button type="submit" class="btn-delete">Hapus</button>
                        <button type="submit" class="btn-check">Check</button>

                    </div>
                </div> -->
            </div>
        </div>
    </div>
</body>

<script src="app.js"></script>

</html>