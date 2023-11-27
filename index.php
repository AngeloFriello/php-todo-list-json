<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div id="app">
        <div class="container">

            <input type="text" v-model="newTodo" @keyup.enter="addTodo()" class="input">

            <div class="list-container">
                <ul>
                    <li v-for="(todo, i) in todos" :key="i" class="flex jc-b">
                        <span>
                            {{ todo.text }}
                        </span>
                        <span class="delete">
                            ELIMINA
                        </span>
                    </li>
                    
                </ul>
            </div>

        </div>
    </div>
</body>

<script src="./js/app.js"></script>
</html>