<template>
  <div>
    <h1>{{ msg }}</h1>
    <el-radio class="radio" v-model="radio" label="1">Element UI</el-radio>
    <el-radio class="radio" v-model="radio" label="2">Element UI</el-radio>
    <el-radio class="radio" v-model="radio" label="3">Element UI</el-radio>

  </div>
</template>

<script>
  export default {
    data () {
      return {
        msg: 'This is a home',
        radio: '1'
      }
    }
  }
</script>