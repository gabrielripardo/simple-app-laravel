<template>
   <div class="container">
        <h1>Votos dos Prefeitos</h1>
        <ul class="list-group">
            <li v-for="(prefeito, index) in ranking" class="list-group-item">
                {{prefeito.name}} {{ prefeito.votes}} <button class="btn btn-primary" type="submit" @click="prefeitos[index].votes++">Votar</button>
            </li>
        </ul>
            <input placeholder="Pressione 'delete' para apagar votos." class="form-control" @keyup.delete="apagar">
        <pre>
            {{$data}} {{ranking}}
        </pre>
    </div>
</template>

<script>
    new Vue({
        el: '.container',
        data: {            
            prefeitos: [
                {
                    name: "Mr. Black",
                    votes: 0,
                },
                {
                    name: "Mr. Pink",
                    votes: 0,
                },
                {
                    name: "Mr. White",
                    votes: 0,
                },
                {
                    name: "Mr. Brown",
                    votes: 0,
                }
            ]
        },
        methods: {
            apagar: function(){
                console.log("Tecla pressionada");
                for (let index = 0; index < this.prefeitos.length; index++) {
                    this.prefeitos[index].votes = 0;
                }
            }
        },
        computed: {
            ranking: function(){    //Utilização do Bubble Sort para fazer a ordenação do array.            
                let len = this.prefeitos.length;
                console.log(len+" | Votes: "+this.prefeitos[1].votes);                
                for (let i = 0; i < len; i++) {                    
                    console.log("contador i: ",i);
                    for(let j = 0; j < len-1; j++){
                        console.log("Contador: "+j);      
                        console.log("Compraração: "+this.prefeitos[j+1].votes+" > "+this.prefeitos[j].votes);                 
                        if (this.prefeitos[j+1].votes > this.prefeitos[j].votes) {
                            console.log("Realizando troca:"+this.prefeitos[j].votes+" > "+this.prefeitos[j+1].votes);
                            let tmp = this.prefeitos[j];
                            this.prefeitos[j] = this.prefeitos[j+1];
                            this.prefeitos[j + 1] = tmp;
                        }                        
                    }
                }                                     

                return this.prefeitos;
            }
        }
    })
</script>