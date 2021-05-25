<template>
    <h1 style="font-weight:bold">Message Container</h1>
     <div v-for="message in messages">
                        {{ message.user.name}}  :    {{ message.message }}
                    </div>
</template>
<script>


export default {
    props:['messages']
}
</script>


