<template>
  <div class="expierience-content-item" v-if="expierenceShow">
    <div class="expierience-content-item__name">{{expierenceShow.companyName}}</div>
    <div class="expierience-content-item__start-date">{{startDate(expierenceShow.startDate)}}</div>
    <div class="expierience-content-item__end-date">{{endDate(expierenceShow.endDate)}}</div>
    <div v-if="expierenceShow.jobDesc1" class="expierience-content-item__desc">{{expierenceShow.jobDesc1}}</div>
    <div v-if="expierenceShow.jobDesc2" class="expierience-content-item__desc">{{expierenceShow.jobDesc2}}</div>
    <div v-if="expierenceShow.jobDesc3" class="expierience-content-item__desc">{{expierenceShow.jobDesc3}}</div>
  </div>
</template>

<script>
import {mapGetters} from "vuex";

export default {
  name: "ExpierenceContentItem",
  computed: {
    ...mapGetters('experience' , [
        'expierenceShow'
    ])
  },
  methods: {
    startDate( date ) {
      return date;
    },
    endDate(date) {
      return date;
    }
  }
}
</script>
