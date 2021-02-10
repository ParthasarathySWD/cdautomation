<style>
    .flt-right{
        float: right;
    }
</style>

<template>
    <!-- Create User Template -->
    <v-container class="grey lighten-5">
        <v-row no-gutters >
            <v-col cols="12" sm="6" md="12" >
                <v-card class="mx-auto" outlined >
                    <v-card-title>
                        <h5 class="display-0">
                            Add User
                        </h5>
                        <v-spacer></v-spacer>

                    </v-card-title>

                    <!-- User Form Section Begin -->
                    <v-form @submit.prevent="addUser" id="save-user">
                        <v-container>
                            <v-row>
                                <v-col cols="12" md="12">
                                    <!-- Tab Section Begin -->
                                    <v-tabs v-model="tab" align-with-title centered>
                                        <v-tabs-slider color="green"></v-tabs-slider>
                                        <v-tab >
                                            User Profile
                                        </v-tab>
                                        <v-tab >
                                            User Access
                                        </v-tab>
                                        <v-tab >
                                            User Role
                                        </v-tab>
                                        <v-tab >
                                            Information
                                        </v-tab>
                                    </v-tabs>
                                    <!-- end -->

                                    <!-- Tab Items Section Begin -->
                                    <v-tabs-items v-model="tab">
                                        <!-- User Profile Tab Section Begin -->
                                        <v-tab-item >
                                            <v-card  class="mx-auto pl-5 pr-5" flat elevation="24" >
                                                <v-card-text ></v-card-text>
                                                <v-row>
                                                    <v-col cols="12" md="3">
                                                        <v-text-field v-model="UserDetails.firstname" :counter="20" label="First Name" required >

                                                        </v-text-field>
                                                    </v-col>

                                                    <v-col cols="12" md="3">
                                                        <v-text-field v-model="UserDetails.lastname" :counter="20" label="Last name" required>

                                                        </v-text-field>
                                                    </v-col>

                                                    <v-col cols="12" md="3">
                                                        <v-text-field v-model="UserDetails.email" :counter="20" label="Email" required>

                                                        </v-text-field>
                                                    </v-col>

                                                    <v-col cols="12" md="3">
                                                        <v-text-field v-model="UserDetails.phonenumber" :counter="20" label="Phone Number" required>

                                                        </v-text-field>
                                                    </v-col>

                                                    <v-col cols="12" md="12">
                                                        <div class="my-2 flt-right">
                                                            <v-btn type="submit" small color="success" dark>
                                                                Save
                                                            </v-btn>

                                                            <v-btn small color="error" dark>
                                                                Cancel
                                                            </v-btn>
                                                        </div>
                                                    </v-col>
                                                </v-row>
                                            </v-card>
                                        </v-tab-item>
                                        <!-- end -->

                                        <!-- User Access Section Begin -->
                                        <v-tab-item >
                                            <v-card  class="mx-auto pl-5 pr-5" flat elevation="24" >
                                                <v-card-text ></v-card-text>
                                                <v-row>
                                                    <v-col cols="12" md="3">
                                                        <v-text-field v-model="UserDetails.username" :counter="20" label="User Name" required >

                                                        </v-text-field>
                                                    </v-col>

                                                    <v-col cols="12" md="3">
                                                        <v-text-field v-model="UserDetails.password" :append-icon="show1 ? 'mdi-eye' : 'mdi-eye-off'" :rules="[rules.required, rules.min]" :type="show1 ? 'text' : 'password'" name="input-10-1" label="Enter Password" hint="At least 8 characters" counter @click:append="show1 = !show1" >

                                                        </v-text-field>
                                                    </v-col>

                                                    <v-col cols="12" md="3">
                                                        <v-text-field v-model="UserDetails.cpassword" :append-icon="show2 ? 'mdi-eye' : 'mdi-eye-off'" :rules="[rules.required, rules.min]" :type="show2 ? 'text' : 'password'" name="input-10-1" label="Enter Confirm Password" hint="At least 8 characters" counter @click:append="show2 = !show2" >

                                                        </v-text-field>
                                                    </v-col>                                                   

                                                    <v-col cols="12" md="12">
                                                        <div class="my-2 flt-right">
                                                            <v-btn type="submit" small color="success" dark>
                                                                Save
                                                            </v-btn>

                                                            <v-btn small color="error" dark>
                                                                Cancel
                                                            </v-btn>
                                                        </div>
                                                    </v-col>
                                                </v-row>
                                            </v-card>
                                        </v-tab-item>
                                        <!-- end -->

                                        <v-tab-item >
                                            <v-card  class="mx-auto pl-5 pr-5" flat elevation="24" >
                                                <v-card-text ></v-card-text>
                                                <v-row>
                                                    <h5>third</h5>
                                                </v-row>
                                            </v-card>
                                        </v-tab-item>

                                        <v-tab-item >
                                            <v-card  class="mx-auto pl-5 pr-5" flat elevation="24" >
                                                <v-card-text ></v-card-text>
                                                <v-row>
                                                    <h5>four</h5>
                                                </v-row>
                                            </v-card>
                                        </v-tab-item>
                                    </v-tabs-items>
                                    <!-- end -->
                                </v-col>
                            </v-row>
                        </v-container>
                    </v-form>
                    <!-- end -->
                </v-card>
            </v-col>
        </v-row>
    </v-container>
</template>


<script>
  export default {
    data () {
      return {
            tab: null,  
            selectoptions: ['t', 'b', 'l', 'r', 's', 'e', 'x', 'y', 'a'],
            show1: false,
            show2: false,
            rules: {
                required: value => !!value || 'Required.',
                min: v => v.length >= 8 || 'Min 8 characters',
                emailMatch: () => (`The email and password you entered don't match`),
            },
            UserDetails : {},
      }
    },

    methods:{
        addUser() {
            alert(this.UserDetails)
            console.log(this.UserDetails)
            this.axios.post('http://localhost:8000/api/orgusers', this.UserDetails)
                .then(response => (
                    console.log(response)
                ))
                .catch(err => console.log(err))
                .finally(() => this.loading = false)
        }
    }
  }
</script>