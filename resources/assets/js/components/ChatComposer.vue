<template>
    <div class="chat-composer">
    	<input id="message" type="text" placeholder="Start typing your message here" v-model="messageText" v-on:keyup.enter="sendMessage">
    	<button class="btn btn-primary" @click="sendMessage">Send</button>
    </div>
</template>

<script>
    export default {
        data(){
        	return{
        		messageText:''
        	}
        },
        methods:{
        	sendMessage(){
        		this.$emit('messagesent',{
        			message:this.messageText,
        			user:{
                        name:$('#navbarDropdown').text().trim()
                    }
        		});
        		this.messageText="";
        	}
        }
    }
</script>

<style type="text/css" media="screen">
	.chat-composer{
		display: flex;
	}
	.chat-composer input{
		flex: 1 auto;
	}
	.chat-composer button{
		border-radius: 1;
	}
</style>

