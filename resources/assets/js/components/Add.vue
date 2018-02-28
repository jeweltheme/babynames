<template>
    <div class="modal" :class="openmodal">
        <div class="modal-background"></div>
        <div class="modal-card">
            <header class="modal-card-head">
                <p class="modal-card-title">Muslim Baby Name Entry</p>
                <button class="delete" aria-label="close" @click="close"></button>
            </header>

            <section class="modal-card-body">

                <h2 style="text-align:center; margin-bottom:30px;"><b>Left Input Original Name and Right Input Meaning of this Language</b></h2>



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
                                <input class="input" :class="{'is-danger': errors.m_bangla}" type="text" placeholder="Bangla Name Meaning" v-model="list.m_bangla">
                              <small v-if="errors.m_bangla" class="has-text-danger">{{ errors.m_bangla[0] }}</small>
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
                                <input class="input" :class="{'is-danger': errors.m_english}" type="text" placeholder="English Name Meaning" v-model="list.m_english">
                                <small v-if="errors.m_english" class="has-text-danger">{{ errors.m_english[0] }}</small>
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
                                <input class="input" :class="{'is-danger': errors.m_arabic}" type="text" placeholder="Arabic Name Meaning" v-model="list.m_arabic">
                                <small v-if="errors.m_arabic" class="has-text-danger">{{ errors.m_arabic[0] }}</small>
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
                                <input class="input" :class="{'is-danger': errors.m_urdu}" type="text" placeholder="Urdu Name Meaning" v-model="list.m_urdu">
                                <small v-if="errors.m_urdu" class="has-text-danger">{{ errors.m_urdu[0] }}</small>
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
                                <input class="input" :class="{'is-danger': errors.m_hindi}" type="text" placeholder="Hindi Name" v-model="list.m_hindi">
                                <small v-if="errors.m_hindi" class="has-text-danger">{{ errors.m_hindi[0] }}</small>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="field is-horizontal">
                    <div class="field-label is-normal">
                        <label class="label">Name Type</label>
                    </div>
                    <div class="field-body">
                        <div class="select">
                            <select v-model="list.name_type">
                                <option value="1">Boy</option>
                                <option value="2">Girl</option>
                                <option value="3">Allah</option>
                                <option value="4">Sahabi</option>
                            </select>
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
                list:{
                    n_english:'',
                    n_bangla:'',
                    n_arabic:'',
                    n_urdu:'',
                    n_hindi:'',
                    name_type:'',

                    m_english:'',
                    m_bangla:'',
                    m_arabic:'',
                    m_hindi:'',
                    m_urdu:''
                },
                errors:{}
            }
        },
        methods:{
            close(){
                this.$emit('closeRequest');
            },
            save(){
                axios.post('/muslimbabyname', this.$data.list).then( (response) => {
                    this.close()
                    this.$parent.lists.push(response.data)
                    this.$parent.lists.sort(function(a,b){
                        if(a.n_english > b.n_english){
                            return 1;
                        } else if( a.n_english < b.n_english){
                            return -1;
                        }
                    })
                    this.list = ""
                })
                  .catch( (error) => this.errors = error.response.data.errors )
            }
        }
    }
</script>





