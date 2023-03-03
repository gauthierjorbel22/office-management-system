<template>
    <div class="container">
        <h3 @click="getDepartment()">{{ data }}</h3>
        <p>{{ department }}</p>
    </div>
</template>

<script setup>
import axios from "axios";
const data = "Software Engineer";
let department = [];
async function getDepartment() {
    try {
        const response = await axios.get("http://localhost:8000/api/departments");
        console.log(response.data);
         this.department = response.data;
        return this.department;
    } catch (error) {
        console.log(error);
    }
}

</script>

<style scoped></style>