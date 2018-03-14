<template>
    <div>
    	<p><span class="glyphicon glyphicon-user" aria-hidden="true"></span><b>{{message.user.name}}</b></p>
    	<p><span class="glyphicon glyphicon-comment"></span>{{message.message}}</p>
    </div>
</template>

<script>
    export default {
        props:["message"]
    }
</script>

