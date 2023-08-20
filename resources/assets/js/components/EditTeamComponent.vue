<template>
<div class="row">
    <div class="col-md-3">
        <div class="box box-primary">
            <div class="box-body box-profile">
                <img class="profile-user-img img-responsive img-circle" :src="avatar+'/'+users.teamSites_photo" alt="User profile picture">
                <h3 class="profile-username text-center" >{{users.teamSites_name}}</h3>
                <p class="text-muted text-center">{{users.teamSites_office}}</p>
                <vue-dropzone ref="myVueDropzone" id="dropzone" :options="dropzoneOptions"  :useCustomSlot=true>
                    <div class="dropzone-custom-content">
                        <h3 class="dropzone-custom-title">Arraste sua imagem</h3>
                        <div class="subtitle">ou click e procure a sua imagem</div>
                    </div>
                </vue-dropzone>
            </div>
        </div>
    </div>
    <form method="PUT" v-on:submit.prevent="updateTeam(users.id)" id="formEditTeam">
    <div class="col-md-9">
        <div class="box box-primary">
            <div class="box-body">
                
                <div class="col-md-6">
                    <div class="form-group">
                    <label>Nome do funcionário</label>
                    <input type="text" name="teamSites_name" v-model="users.teamSites_name" class="form-control" placeholder="Irá mostrar no site">
                </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Fone de contato</label>
                        <input type="text" 
                        name="teamSites_phoneOne"
                        class="form-control"
                        v-model="users.teamSites_phoneOne"
                        onkeyup="mascara( this, mtel );"
                        id="teamSites_phoneOne"
                        >
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Cargo do funcionario</label>
                        <select 
                        name="teamSites_office"
                        class="form-control"
                        v-model="users.teamSites_office">
                            <option selected>--Selecione--</option>
                            <option>Gestor</option>
                            <option>Comercial</option>
                            <option>Administração de Imóveis</option>
                            <option>Administrativo e Financeiro</option>
                            <option>Equipe Jurídico</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Descrição do funcionário</label>
                        <textarea 
                        name="teamSites_text"
                        class="form-control"
                        rows="5"
                        placeholder="Digite o perfil ou uma descrição para o funcionário"
                        v-model="users.teamSites_text"></textarea>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Link do linkedin</label>
                        <input name="teamSites_linkedin"
                        type="text"
                        class="form-control"
                        placeholder="Por exemplo: https://www.linkedin.com/in/sua-url-010203/"
                        v-model="users.teamSites_linkedin">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="box-footer">
            <a :href="home" class="btn btn-default">Voltar</a>
            <button type="submit" class="btn btn-primary pull-right">
                <i class="fa fa-save"></i> Alterar Funcionário
            </button>
        </div>
    </div>
    </form>
</div>
</template>

<script>
console.log({domain_complet})

import 'sweetalert2/dist/sweetalert2.min.css';
import vue2Dropzone from 'vue2-dropzone'
import 'vue2-dropzone/dist/vue2Dropzone.min.css'

export default {
    props: ['userTeam'],
    components: {
        vueDropzone: vue2Dropzone
    },
    data() {
        return {
            users: [],
            avatar: domain_complet+'images/',
            home: domain_complet+'site/equipe',
            dropzoneOptions: {
                url: domain_complet + 'api/team/avatar/'+this.userTeam,
                thumbnailWidth: 150,
                maxFilesize: 5,
                addRemoveLinks: true,
                removeAllFiles: true,
                dictDefaultMessage: "<i class='fa fa-cloud-upload'></i>Excluir imagem",
                headers: { "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr('content') }
            }
        }
    },
    mounted() {
       console.log($('meta[name="csrf-token"]').attr('content'))
       console.log(this.userTeam)
    }, 
    created() {
        this.getUser()
    },
    methods: {
        getUser(){
            axios.get(domain_complet + 'api/teamEquipe/' +this.userTeam)
            .then(response =>{
                console.log(response.data)
                this.users = response.data
            })
        },
        updateTeam: function(item){
            console.log(item);
            axios({
                method: 'put',
                url: domain_complet + 'api/team/'+item,
                data: $("#formEditTeam").serialize()
            }).then(response => {
                //this.allRefri();
                Vue.swal({
                    icon: 'success',
                    title: 'Atualizado',
                    text: 'Funcionário atualizado com sucesso.'
                });
                this.getUser()
                
                setTimeout(() => {
                    document.location.reload(true);
                    
                }, 2000);
               
            }).catch(error => {
                console.log(error);
                Vue.swal({
                    icon: 'error',
                    title: 'Error',
                    text: 'Ops! tente novamente.'
                });
            });
        },
    },
}
</script>

<style>

</style>