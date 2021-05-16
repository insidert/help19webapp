require('./bootstrap');

import { createApp } from 'vue';

import Share from './components/Share.vue'
import Status from './components/Status.vue'

createApp({
	components: {
    Share,
    Status
	}
}).mount("#help19")