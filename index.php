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
</head>
<body>
    <div id="app">

            <input type="text" v-model="newTodo" @keyup.enter="addTodo()">

        <ul>
            <li v-for="(todo, i) in todos" :key="i">{{ todo.text }}</li>
        </ul>
    </div>
   
</body>

<script src="./js/app.js"></script>
</html>