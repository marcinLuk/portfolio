<template>
  <div class="expierience-content-item" v-if="expierenceShow">
    <div class="expierience-content-item__position">{{expierenceShow.position}}  at <span class="expierience-content-item__name"> {{expierenceShow.companyName}}</span></div>
    <span class="expierience-content-item__start-date">{{startDate(expierenceShow.startDate)}}</span>
    <span> - </span>
    <span class="expierience-content-item__end-date">{{endDate(expierenceShow.endDate)}}</span>
    <div v-if="expierenceShow.jobDesc1" class="expierience-content-item__desc">{{expierenceShow.jobDesc1}}</div>
    <div v-if="expierenceShow.jobDesc2" class="expierience-content-item__desc">{{expierenceShow.jobDesc2}}</div>
    <div v-if="expierenceShow.jobDesc3" class="expierience-content-item__desc">{{expierenceShow.jobDesc3}}</div>
  </div>
</template>

<script>
import {mapGetters} from "vuex";
import dayjs from 'dayjs';

export default {
  name: "ExpierenceContentItem",
  computed: {
    ...mapGetters('experience' , [
        'expierenceShow'
    ])
  },
  methods: {
    startDate( date ) {
      return dayjs(date).format('MMMM YYYY');
    },
    endDate(date) {
      if(!date) {
        return 'Present'
      }
      return dayjs(date).format('MMMM YYYY');
    }
  }
}
</script>
