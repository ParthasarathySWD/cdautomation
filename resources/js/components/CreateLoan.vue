<style>

</style>
<template>
<!-- <v-img
  lazy-src="https://picsum.photos/id/11/10/6"
  max-height="50%"
  max-width="auto"
  src="../../../images/demo1.jpg"
></v-img> -->

<v-card
    elevation="24"
    class="mx-auto"
    outlined
  >
    <v-container class="grey lighten-5">
    <v-row no-gutters>
      <v-col
        md="6"
      >
        <v-form>
            <v-row>
        <v-col md="12"
        >
          <v-text-field
            v-model="firstname"
            :rules="nameRules"
            label="Date Issued"
            required
          ></v-text-field>
        </v-col>

        
      </v-row>
        <v-row>
            <v-col md="12"
        >
          <v-text-field
            v-model="lastname"
            :rules="nameRules"
            label="Closing Date"
            required
          ></v-text-field>
        </v-col>

        
        </v-row>
        <v-row>
            <v-col md="12"
        >
          <v-text-field
            v-model="email"
            :rules="emailRules"
            label="Disbursement Date"
            required
          ></v-text-field>
        </v-col>
        </v-row>
        <v-row>
            <v-col md="12"
        >
          <v-text-field
            v-model="email"
            :rules="emailRules"
            label="Settlement Agent"
            required
          ></v-text-field>
        </v-col>
        </v-row>
        </v-form>
      </v-col>

      <v-col md="6">
         <v-row>
             <v-col md="12" class="align-center">
                 <v-file-input
    show-size
    label="File input"
  ></v-file-input>
             </v-col>
         </v-row>
      </v-col>
    </v-row>
  </v-container>
  </v-card>

<!-- <v-row no-gutters>
      <v-col
        cols="12"
        sm="4"
      >
      <v-img
  lazy-src="https://picsum.photos/id/11/10/6"
  max-height="auto"
  max-width="auto"
  src="../../../images/demo1.jpg"
></v-img>
      
        
      </v-col>

      <v-col cols="12"
        sm="4">
          
      </v-col>
    </v-row> -->
     
    
</template>
<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>