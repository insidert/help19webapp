<template>
  <button class="btn btn-primary btn-sm" @click="initiateShare">
    <i class="bi bi-share-fill"></i> Share {{ shortText }}
  </button>
</template>

<script>
  export default {
    props: ["title", "text", "url", "shortText"],

    setup(props) {
      const initiateShare = () => {
        if (navigator.share) {
          navigator.share({
            title: props.title,
            text: props.text,
            url: props.url,
          })
            .then(() => console.log('Successful share'))
            .catch((error) => console.log('Error share.'));
        }
      }

      return {
        initiateShare
      }
    }
  }
</script>