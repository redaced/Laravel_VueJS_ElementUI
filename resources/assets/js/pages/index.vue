<template>
  <div>
    <el-menu :default-active="activeIndex" class="el-menu-demo" mode="horizontal" @select="handleSelect">
      <el-menu-item v-for="(item, index) in menus" :key="index" :index="index">{{item.name}}</el-menu-item>
    </el-menu>
    <h1>{{ msg }}</h1>
    <el-radio class="radio" v-model="radio" label="1">Element UI</el-radio>
    <el-radio class="radio" v-model="radio" label="2">Element UI</el-radio>
    <el-radio class="radio" v-model="radio" label="3">Element UI</el-radio>
    <example></example>
  </div>
</template>

<script>
  import Example from "../components/ExampleComponent.vue"
  import axios from "axios"
  export default {
    components: { Example },
    created() {
      var self = this;
      axios.get('api/menu')
      .then(function (response) {
        self.menus  = response.data
      })
      .catch(function (error) {
        console.log(error);
      });
    },
    data () {
      return {
        menus: [],
        activeIndex: '1',
        msg: 'This is a home',
        radio: '1'
      }
    },
    methods: {
      handleSelect(key, keyPath) {
        console.log(key, keyPath);
      }
    }
  }
</script>