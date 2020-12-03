<template>
    <v-card
        :loading="loading"
        class="mx-auto"
        max-width="600"
    >
        <v-img
        class="white--text align-end"
        height="200px"
        src="https://cdn.vuetifyjs.com/images/cards/docks.jpg"
        >
        <v-card-title>{{ticket.name_tic}}</v-card-title>
        </v-img>

        <v-card-subtitle class="pb-0">
            Precio: $ {{ticket.price_tic}}
        </v-card-subtitle>

        <v-card-text class="text--primary">
            <div>Duración: <b>{{ticket.duration_tic}}</b>h.</div>
            <div>Ciudad Origen: <b>{{ticket.city_start}}</b></div>
            <div>Ciudad Destino: <b>{{ticket.city_end}}</b></div>
            <div>Fecha Salida: <b>{{ticket.date_start}}</b></div>
            <div>Fecha LLegada: <b>{{ticket.date_return}}</b></div>
            <div>Aereolinia: <b>{{ticket.name_air}}</b></div>
            <div>Contact: <b>{{ticket.email_air}}</b></div>
        </v-card-text>

        <v-card-actions>
        <v-btn
            color="orange"
            text
        >
            Comprar
        </v-btn>

        <v-btn
            color="orange"
            text
        >
            Compartir
        </v-btn>

        <v-btn
            color="orange"
            text
            @click="goHome()"
        >
            Regresar
        </v-btn>
        </v-card-actions>
    </v-card>
</template>
<script>
    export default {
        name: "ticketDetail",
        data() {
            return{
                ticket: {},
                loading: false
            }
        },
        mounted() {
            if(!this.$route.params.ticket_id){
                this.$router.push('/');
            }else{
                this.getTicket();
            }
        },
        methods:{
            getTicket(){
                this.loading = true;
                this.axios.get('http://127.0.0.1:8000/api/ticket/'+this.$route.params.ticket_id)
                .then((response) => {
                if (response.data.response == false) {
                    this.$toastr.warning(response.data.alert);
                } else {
                    this.$toastr.success(response.data.alert, "Muy Bien.!");
                    this.ticket = response.data.ticket;
                }
                })
                .catch((error) => {
                    console.log(error);
                })
                .finally(() => (this.loading = false));
            },
            goHome(){
                this.$router.push('/');
            }
        }
    }
</script>