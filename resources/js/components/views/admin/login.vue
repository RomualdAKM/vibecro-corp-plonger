<script setup>
import { reactive, ref } from "vue";
import router from "./../../../router/index.js"

let form = reactive({
    email: "",
    password: "",
});



const login = async () => {
    await axios.post("/api/login", form).then((response) => {
        if (response.data.success) {
            localStorage.setItem("token", response.data.data.token);
            router.push("/admin/section1");
             toast.fire({
            icon: "success",
            title: "Connect  Successfully",
        });
        } else {
           toast.fire({
            icon: "error",
            title: response.data.message,
        });
        }
    });
};

</script>



<template>
<div class="container" style="margin-top: 50px;">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="login-container">
                    <div class="login-header">
                        <h2>Connexion</h2>
                    </div>
                    <form class="login-form" @submit.prevent="login()">
                        <div class="form-group">
                            <label for="username">Email</label>
                            <input type="email" v-model="form.email" id="username" class="form-control" placeholder="Entrez votre email">
                        </div>
                        <div class="form-group">
                            <label for="password">Mot de passe</label>
                            <input type="password" v-model="form.password" id="password" class="form-control" placeholder="Entrez votre mot de passe">
                        </div>
                        <button type="submit" class="btn btn-login btn-block">Se connecter</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</template>
<style scoped>
        /* body {
            background-color: #f4f4f4;
            font-family: Arial, sans-serif;
        } */

        .login-container {
            max-width: 400px;
            margin: 0 auto;
            padding: 40px;
            background-color: #ffffff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        .login-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .login-form {
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            font-weight: bold;
        }

        .form-control {
            border: 1px solid #ccc;
            border-radius: 3px;
            padding: 10px;
        }

        .btn-login {
            background-color: #007BFF;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 3px;
            cursor: pointer;
        }

        .btn-login:hover {
            background-color: #0056b3;
        }
    </style>