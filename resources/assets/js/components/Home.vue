<template>
    <div>
        <nav class="panel column is-offset-2 is-8">
            <p class="panel-heading">
                Muslim Baby Names
                <button class="button is-link is-outlined" @click="addNew">
                    Add New
                </button>
                <span class="is-pulled-right" v-if="loading">
                    <i class="fa fa-refresh fa-spin fa-2x fa-fw"></i>
                </span>
            </p>
            <div class="panel-block">
                <p class="control has-icons-left">
                    <input class="input is-small" type="text" placeholder="search" v-model="searchQuery">
                    <span class="icon is-small is-left">
                        <i class="fa fa-search"></i>
                    </span>
                </p>
            </div>

            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Bangla</th>
                        <th>English</th>
                        <th>Arabic</th>
                        <th>Urdu</th>
                        <th>Hindi</th>
                        <th>Name Type</th>
                        <th>Status</th>
                    </tr>
                </thead>

                <tbody>
                    <tr v-for="item,key in temp">
                        <td>{{item.id}}</small>
                        <td>{{item.n_bangla}}<br><small>{{ item.m_bangla }}</small>
                        </td>
                        <td>{{item.n_english}}<br><small>{{ item.m_english }}</small></td>
                        <td>{{item.n_arabic}}<br><small>{{ item.m_arabic }}</small></td>
                        <td>{{item.n_urdu}}<br><small>{{ item.m_urdu }}</small></td>
                        <td>{{item.n_hindi}}<br><small>{{ item.m_hindi }}</small></td>

                        <td v-if="item.name_type === 1">Boy</td>
                        <td v-else-if="item.name_type === 2">Girl</td>
                        <td v-else-if="item.name_type === 3">Allah</td>
                        <td v-else-if="item.name_type === 4">Sahabi</td>
                        <td v-else></td>

                        <td class="panel-tabs text-light" style="font-size: 1em !important; margin-top:20px;">
<!--                             <span class="panel-icon column is-1">
                                <i class="has-text-danger fa fa-trash" aria-hidden="true" @click="del(key, item.id)"></i>
                            </span> -->
                            <a class="button is-primary">
                                <i class="has-text-light fa fa-edit" aria-hidden="true" @click="openUpdate(key)"></i>
                            </a>
                            <a class="button is-link" style="margin-left:15px;">
                                <i class="has-text-light fa fa-eye" aria-hidden="true" @click="openShow(key)"></i>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>

        </nav>
        <app-add :openmodal="addActive" @closeRequest="close"></app-add>
        <app-show :openmodal="showActive" @closeRequest="close"></app-show>
        <app-update :openmodal="updateActive" @closeRequest="close"></app-update>
    </div>

</template>

<script>
    import Add from './Add.vue';
    import Show from './Show.vue';
    import Update from './Update.vue';
    export default{
        data(){
            return{
                addActive: '',
                showActive: '',
                updateActive: '',
                lists:{},
                errors:{},
                loading: false,
                searchQuery: '',
                temp: ''
            }
        },
        components:{
            AppAdd: Add,
            AppShow: Show,
            AppUpdate: Update
        },
        methods:{
            addNew(){
                this.addActive = "is-active";
            },
            close(){
                this.addActive = this.showActive = this.updateActive = '';
            },
            openShow(key){
                this.$children[1].list = this.temp[key]
                this.showActive = 'is-active';
            },
            openUpdate(key){
                this.$children[2].list = this.temp[key]
                this.updateActive = 'is-active';
            },
            del(key,id){

                if(confirm("Are you sure wants to do this ?")){
                   this.loading = !this.loading
                   axios.delete(`/muslimbabyname/${id}`)
                   .then( (response) => {this.lists.splice(key, 1);
                        this.loading = !this.loading
                    })
                  .catch( (error) => this.errors = error.response.data.errors )
                }


            // console.log(`${key} ${id}`)
            //    axios.delete(`/muslimbabyname/${id}`)
            //    .then( (response) => console.log("Deleted"))
            //   .catch( (error) => this.errors = error.response.data.errors )

            }
        },
        mounted(){
               axios.post('/getData')
               .then( (response) => this.lists = this.temp = response.data)
              .catch( (error) => this.errors = error.response.data.errors )

        },
        watch:{
            searchQuery(){
                if(this.searchQuery.length>0){
                    this.temp = this.lists.filter((item)=>{
                        return Object.keys(item).some((key)=>{
                            let string = String( item[key] )
                            return string.toLowerCase().indexOf(this.searchQuery.toLowerCase())>-1
                            // console.log(string)
                        })

                    });
                    //console.log(result)
                }else{
                    this.temp = this.lists
                }
            }
        }
    }
</script>