<template lang="html">
  <div class="chat-log">
      <chat-message v-for="message in messages" :message="message" :key="message.id" id="chat-msg"></chat-message>
      <div class="empty" v-show="messages.length === 0">
          Nothing here yet!
      </div>
  </div>
</template>

<script>
export default {
    props: ['messages']
}
</script>

<style lang="css">
.chat-log #chat-msg:nth-child(even) {
    background-color: #ccc;
}

.empty {
    padding: 1rem;
    text-align: center;
}
</style>
