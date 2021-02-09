<template>
    <v-container class="grey lighten-5">
        <v-row no-gutters >
            <v-col cols="12" sm="6" md="12" >
                <v-card class="mx-auto" outlined >
                    <v-card-title>
                        <h4 class="display-0">
                            Add User
                        </h4>
                        <v-spacer></v-spacer>

                    </v-card-title>

                    <v-form v-model="valid">
                        <v-container>
                            <v-row>
                                <v-col cols="12" md="3">
                                    <v-text-field v-model="firstname" :rules="nameRules" :counter="10" label="First Name" required >

                                    </v-text-field>
                                </v-col>

                                <v-col cols="12" md="3">
                                    <v-text-field v-model="lastname" :rules="nameRules" :counter="10" label="Last name" required>

                                    </v-text-field>
                                </v-col>
                            </v-row>
                        </v-container>
                    </v-form>
                </v-card>
            </v-col>
        </v-row>
    </v-container>
</template>