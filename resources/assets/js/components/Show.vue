<template>
    <div class="modal" :class="openmodal">
        <div class="modal-background"></div>
        <div class="modal-card">
            <header class="modal-card-head">
                <p class="modal-card-title">{{ list.n_english }}'s Details View</p>
                <button class="delete" aria-label="close" @click="close"></button>
            </header>

            <section class="modal-card-body">

                <li class="panel-block">
                    <label for="name" class="column is-2"> <b> English Name</b></label>{{ list.n_english }}
                </li>
                <li class="panel-block">
                    <label for="name" class="column is-2"><b>Bangla Name</b></label>{{ list.n_bangla }}
                </li>
                <li class="panel-block">
                    <label for="name" class="column is-2"><b>Arabic Name</b></label>{{ list.n_arabic }}
                </li>
                <li class="panel-block">
                    <label for="name" class="column is-2"><b>Urdu Name</b></label>{{ list.n_urdu }}
                </li>
                <li class="panel-block">
                    <label for="name" class="column is-2"><b>Hindi Name</b></label>{{ list.n_hindi }}
                </li>


            </section>
            <footer class="modal-card-foot">
                <button class="button is-success">Save changes</button>
                <button class="button" @click="close">Cancel</button>
            </footer>
        </div>
    </div>
</template>

<script>
    export default{
        props: ['openmodal'],
        data(){
            return{
                list:''
            }
        },
        methods:{
            close(){
                this.$emit('closeRequest');
            }
        }
    }
</script>