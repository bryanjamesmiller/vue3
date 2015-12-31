Vue.component('tasks', {
    template: '#tasks-template',
    data: function () {
        return {
            list: []
        };
    },
    created: function(){
        console.log('hello');
var vm = this;
        $.getJSON('/pretend-api', function(tasks){
            console.log('hi');
            console.log(tasks);
            console.log('hi2');
            vm.list = tasks;

        }.bind(this));
    }
});

new Vue({
    el: 'body'
});
