<template>
    <div class="modal" :class="openmodal">
        <div class="modal-background"></div>
        <div class="modal-card">
            <header class="modal-card-head">
                <p class="modal-card-title">{{ list.n_english }}'s Details View</p>
                <button class="delete" aria-label="close" @click="close"></button>
            </header>

            <section class="modal-card-body">
              <h2 style="text-align:center; margin-bottom:30px;"><b>Left side Original Name and Right side Meaning of this Language</b></h2>

                <div class="field is-horizontal">
                    <div class="field-label is-normal">
                        <label class="label">Bangla: </label>
                    </div>
                    <div class="field-body" style="margin-top:5px;">
                        <div class="field">
                            <p class="control is-expanded">
                                {{ list.n_bangla }}
                            </p>
                        </div>
                        <div class="field">
                            <p class="control is-expanded">
                                {{ list.m_bangla }}
                            </p>
                        </div>
                    </div>
                </div>

                <div class="field is-horizontal">
                    <div class="field-label is-normal">
                        <label class="label">English: </label>
                    </div>
                    <div class="field-body" style="margin-top:5px;">
                        <div class="field">
                            <p class="control is-expanded">
                                {{ list.n_english }}
                            </p>
                        </div>
                        <div class="field">
                            <p class="control is-expanded">
                                {{ list.m_english }}
                            </p>
                        </div>
                    </div>
                </div>


                <div class="field is-horizontal">
                    <div class="field-label is-normal">
                        <label class="label">Arabic: </label>
                    </div>
                    <div class="field-body" style="margin-top:5px;">
                        <div class="field">
                            <p class="control is-expanded">
                                {{ list.n_arabic }}
                            </p>
                        </div>
                        <div class="field">
                            <p class="control is-expanded">
                                {{ list.m_arabic }}
                            </p>
                        </div>
                    </div>
                </div>

                <div class="field is-horizontal">
                    <div class="field-label is-normal">
                        <label class="label">Urdu: </label>
                    </div>
                    <div class="field-body" style="margin-top:5px;">
                        <div class="field">
                            <p class="control is-expanded">
                                {{ list.n_urdu }}
                            </p>
                        </div>
                        <div class="field">
                            <p class="control is-expanded">
                                {{ list.m_urdu }}
                            </p>
                        </div>
                    </div>
                </div>

                <div class="field is-horizontal">
                    <div class="field-label is-normal">
                        <label class="label">Hindi: </label>
                    </div>
                    <div class="field-body" style="margin-top:5px;">
                        <div class="field">
                            <p class="control is-expanded">
                                {{ list.n_hindi }}
                            </p>
                        </div>
                        <div class="field">
                            <p class="control is-expanded">
                                {{ list.m_hindi }}
                            </p>
                        </div>
                    </div>
                </div>

                <div class="field is-horizontal">
                    <div class="field-label is-normal">
                        <label class="label">Name Type: </label>
                    </div>
                    <div class="field-body" style="margin-top:5px;">
                        <div class="field" v-if="list.name_type === 1">
                            <p class="control is-expanded">
                                Boy
                            </p>
                        </div>
                        <div class="field" v-else-if="list.name_type === 2">
                            <p class="control is-expanded">
                                Girl
                            </p>
                        </div>
                        <div class="field" v-else-if="list.name_type === 3">
                            <p class="control is-expanded">
                                Allah
                            </p>
                        </div>
                        <div class="field" v-else-if="list.name_type === 4">
                            <p class="control is-expanded">
                                Sahabi
                            </p>
                        </div>
                        <div class="field" v-else>
                            <p class="control is-expanded">
                            </p>
                        </div>

                    </div>
                </div>


            </section>
            <footer class="modal-card-foot">
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