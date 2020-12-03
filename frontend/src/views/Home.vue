<template>
  <v-container>
    <v-row class="text-center">
      <v-col cols="12">
        <searchTicketComponent @getTictek="getTictek"></searchTicketComponent>
      </v-col>
    </v-row>
  </v-container>
</template>

<script>
// @ is an alias to /src
import searchTicketComponent from './../components/searchTicketComponent';
export default {
  name: 'Home',
  components: {
    searchTicketComponent
  },
  methods:{
    getTictek(e){
      this.$router.push({ name: 'Ticket', params: { ticket_id: e.id } })
    }
  }
}
</script>
