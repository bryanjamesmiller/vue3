<!DOCTYPE html>
<html lang="en">
<head>
    <title>Vue and Ajax</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h1>JSON task list reader</h1>
    <tasks></tasks>
</div>

<template id="tasks-template">
    <ul class="list-group">
        <li class="list-group-item" v-for="task in list">
            @{{ task.activity }}
        </li>
    </ul>
</template>


<script src="http://code.jquery.com/jquery.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/vue/1.0.8/vue.min.js"></script>
<script src="ajax.js"></script>
</body>
</html>
