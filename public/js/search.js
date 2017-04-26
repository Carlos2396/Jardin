Vue.component('specie', {
    template: '#specie-template',
    props: ['specie'],

    computed:{
        contains: function(){
            return specie.name;
        }
    },

    created(){
        this.specie = JSON.parse(this.specie);
    }
});

new Vue({
    el: '#app',

    data:{
        input: ''
    },

    computed:{
        contains: function(){
            return specie.name + this.input;
        }
    },
});