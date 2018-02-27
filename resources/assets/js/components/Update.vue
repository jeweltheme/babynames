<template>
    <div class="modal" :class="openmodal">
        <div class="modal-background"></div>
        <div class="modal-card">
            <header class="modal-card-head">
                <p class="modal-card-title">Update {{ list.n_english }}'s  Entry</p>
                <button class="delete" aria-label="close" @click="close"></button>
            </header>

            <section class="modal-card-body">


        <div class="field is-horizontal">
            <div class="field-label is-normal">
                <label class="label">Bangla </label>
            </div>
            <div class="field-body">
                <div class="field">
                    <p class="control is-expanded">
                        <input class="input" :class="{'is-danger': errors.n_bangla}" type="text" placeholder="Bangla Name" v-model="list.n_bangla">
                        <small v-if="errors.n_bangla" class="has-text-danger">{{ errors.n_bangla[0] }}</small>
                    </p>
                </div>
                <div class="field">
                    <p class="control is-expanded">
                        <input class="input" :class="{'is-danger': errors.n_bangla}" type="text" placeholder="Bangla Name" v-model="list.n_bangla">
                        <small v-if="errors.n_bangla" class="has-text-danger">{{ errors.n_bangla[0] }}</small>
                    </p>
                </div>
            </div>
        </div>

        <div class="field is-horizontal">
            <div class="field-label is-normal">
                <label class="label">English</label>
            </div>
            <div class="field-body">
                <div class="field">
                    <p class="control is-expanded">
                        <input class="input" :class="{'is-danger': errors.n_english}" type="text" placeholder="English Name" v-model="list.n_english">
                        <small v-if="errors.n_english" class="has-text-danger">{{ errors.n_english[0] }}</small>
                    </p>
                </div>
                <div class="field">
                    <p class="control is-expanded">
                        <input class="input" :class="{'is-danger': errors.n_english}" type="text" placeholder="English Name" v-model="list.n_english">
                        <small v-if="errors.n_english" class="has-text-danger">{{ errors.n_english[0] }}</small>
                    </p>
                </div>
            </div>
        </div>

        <div class="field is-horizontal">
            <div class="field-label is-normal">
                <label class="label">Arabic</label>
            </div>
            <div class="field-body">
                <div class="field">
                    <p class="control is-expanded">
                        <input class="input" :class="{'is-danger': errors.n_arabic}" type="text" placeholder="Arabic Name" v-model="list.n_arabic">
                        <small v-if="errors.n_arabic" class="has-text-danger">{{ errors.n_arabic[0] }}</small>
                    </p>
                </div>
                <div class="field">
                    <p class="control is-expanded">
                        <input class="input" :class="{'is-danger': errors.n_arabic}" type="text" placeholder="Arabic Name" v-model="list.n_arabic">
                        <small v-if="errors.n_arabic" class="has-text-danger">{{ errors.n_arabic[0] }}</small>
                    </p>
                </div>
            </div>
        </div>

        <div class="field is-horizontal">
            <div class="field-label is-normal">
                <label class="label">Urdu</label>
            </div>
            <div class="field-body">
                <div class="field">
                    <p class="control is-expanded">
                        <input class="input" :class="{'is-danger': errors.n_urdu}" type="text" placeholder="Urdu Name" v-model="list.n_urdu">
                        <small v-if="errors.n_urdu" class="has-text-danger">{{ errors.n_urdu[0] }}</small>
                    </p>
                </div>
                <div class="field">
                    <p class="control is-expanded">
                        <input class="input" :class="{'is-danger': errors.n_urdu}" type="text" placeholder="Urdu Name" v-model="list.n_urdu">
                        <small v-if="errors.n_urdu" class="has-text-danger">{{ errors.n_urdu[0] }}</small>
                    </p>
                </div>
            </div>
        </div>

        <div class="field is-horizontal">
            <div class="field-label is-normal">
                <label class="label">Hindi</label>
            </div>
            <div class="field-body">
                <div class="field">
                    <p class="control is-expanded">
                        <input class="input" :class="{'is-danger': errors.n_hindi}" type="text" placeholder="Hindi Name" v-model="list.n_hindi">
                        <small v-if="errors.n_hindi" class="has-text-danger">{{ errors.n_hindi[0] }}</small>
                    </p>
                </div>
                <div class="field">
                    <p class="control is-expanded">
                        <input class="input" :class="{'is-danger': errors.n_hindi}" type="text" placeholder="Hindi Name" v-model="list.n_hindi">
                        <small v-if="errors.n_hindi" class="has-text-danger">{{ errors.n_hindi[0] }}</small>
                    </p>
                </div>
            </div>
        </div>




            </section>
            <footer class="modal-card-foot">
                <button class="button is-success" @click="save">Add Name</button>
                <button class="button" @click="close">Cancel</button>
            </footer>
        </div>
    </div>
</template>

<script>
    export default{
        props:['openmodal'],
        data(){
            return{
                list:{},
                errors:{}
            }
        },
        methods:{
            close(){
                this.$emit('closeRequest');
            },
            save(){
                axios.patch('/muslimbabyname/${this.list.id}', this.$data.list).then( (response) => this.close())
                  .catch( (error) => this.errors = error.response.data.errors )
            }
        }
    }
</script>