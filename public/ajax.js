Vue.component('tasks', {
    template: '#tasks-template',

    data: function() {
        return {
            list: []
        };
    },

    created: function() {
        this.getTaskListData();
    },

    methods: {
        getTaskListData : function(){
            $.getJSON("http://jsonapp.grat.xyz/pretend-api", function(json_result){
                this.list = json_result;
            }.bind(this));
        }
    }
});

new Vue({
    el: 'body'
});