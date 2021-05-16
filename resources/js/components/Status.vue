<template>
  <div class="bg-light p-3">
    <small>Status</small> <br>
    <template v-if="status">
      <div class="mb-3">
        <p class="mb-0">Marked as 
          <span class="badge" 
            :class="[
              status.name == 'verified' 
              ? 'bg-success' 
              : status.name == 'fake' 
                ? 'bg-danger' 
                : 'bg-warning text-dark']">{{ status.name }}</span></p>
        <small>on {{ status.markedOn }}</small>
      </div> 
    </template>

    <template v-if="status == null">
      <p class="mb-0"><i class="bi bi-exclamation-circle"></i> No status marked for this service.</p>
    </template>

    <hr>

    <template v-if="state == 'canMarkStatus'">
      <small>Set new status</small> <br>
      <button class="btn btn-success btn-sm me-3 mb-3" @click="changeStatus('verified')">
        <i class="bi bi-patch-check me-3"></i> Mark As Verified
        </button>
      <button class="btn btn-warning btn-sm me-3 mb-3" @click="changeStatus('not-working')">
        <i class="bi bi-telephone-x me-3"></i> Mark As Not Working
        </button>
      <button class="btn btn-danger btn-sm me-3 mb-3" @click="changeStatus('fake')">
        <i class="bi bi-hand-thumbs-down me-3"></i> Mark As Fake
        </button>
    </template>

    <template v-if="state == 'markingStatus'">
      <p>Just a moment. Marking status...</p>
    </template>

    <template v-if="state == 'statusMarked'">
      <p class="mb-0 text-success"><i class="bi bi-check-circle"></i></p>
      <p>Service marked as <strong>{{ newStatus }}</strong></p>
    </template>
    
  </div>
</template>

<script>
  import { ref } from 'vue';

  export default {
    props: ["status", "url"],

    setup(props) {
      const state = ref('canMarkStatus');
      const newStatus = ref('');

      const changeStatus = (status) => {
        state.value = 'markingStatus';

        axios.post(props.url, {'name': status})
        .then(({data}) => {
          state.value = 'statusMarked'
          newStatus.value = status;
        })
        .catch(errors => console.log(errors))
      }

      return {
       state,
       newStatus,
       changeStatus,
      }
    }
  }
</script>