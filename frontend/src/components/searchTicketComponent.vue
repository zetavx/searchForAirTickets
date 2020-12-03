<template>
    <v-card
        class="mx-auto"
        max-width="800"
    >
    <v-card-title>
        Ticket de Vuelos
    </v-card-title>
        <v-container fluid>
            <v-row dense>
                <v-col
                v-for="ticket in tickets"
                :key="ticket.name_tic"
                :cols="4"
                >
                    <v-card
                    @click="detail(ticket)">
                        <v-img
                        :src="'https://cdn.vuetifyjs.com/images/cards/plane.jpg'"
                        class="white--text align-end"
                        gradient="to bottom, rgba(0,0,0,.1), rgba(0,0,0,.5)"
                        height="200px"
                        >
                        <v-card-title v-text="ticket.name_tic"></v-card-title>
                        </v-img>

                        <v-card-actions>
                        <v-spacer></v-spacer>

                        <v-btn icon>
                            <v-icon>mdi-heart</v-icon>
                        </v-btn>

                        <v-btn icon>
                            <v-icon>mdi-bookmark</v-icon>
                        </v-btn>

                        <v-btn icon>
                            <v-icon>mdi-share-variant</v-icon>
                        </v-btn>
                        </v-card-actions>
                    </v-card>
                </v-col>
            </v-row>
        </v-container>
    </v-card>
</template>
<script>
    export default {
        data: () => ({
            loading: false,
            tickets: [],
        }),
        mounted(){
            if(this.$store.state.tickets.length <= 0){
                this.getTicteks();
            }else{
                this.tickets = this.$store.state.tickets;
            }
        },
        methods:{
            getTicteks(){
                this.loading = true;
                this.axios.get('http://127.0.0.1:8000/api/ticket')
                .then((response) => {
                if (response.data.response == false) {
                    this.$toastr.warning(response.data.alert);
                } else {
                    this.$toastr.success(response.data.alert, "Muy Bien.!");
                    this.tickets = response.data.tickets;
                    this.$store.commit('increment', this.tickets);
                    console.log(this.$store.state.tickets);

                }
                })
                .catch((error) => {
                    console.log(error);
                })
                .finally(() => (this.loading = false));
            },
            detail(e){
                this.$emit('getTictek', e);
            }
        }
    }
</script>